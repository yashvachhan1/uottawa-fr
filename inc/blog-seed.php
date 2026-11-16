<?php
/**
 * Put the blog posts on the site.
 *
 * The posts were written for the English site and belong on both — the
 * pages are in French, the posts are not. Bringing them over through
 * Tools > Import did not get far: the importer fetches each picture from
 * the site the export came from, and on a host that cannot reach it the
 * posts arrive with nothing in them.
 *
 * So they travel with the theme instead. The copy is in blog-posts.php and
 * the pictures in assets/blog, and this puts both into the site: a post for
 * each, its pictures in the media library, and the body pointed at those
 * copies rather than at wherever they came from.
 *
 * It runs once. Delete a post afterwards and it stays deleted; the option
 * below is what remembers that.
 *
 * @package uottawa-online-fr
 */

defined( 'ABSPATH' ) || exit;

require_once get_template_directory() . '/inc/blog-posts.php';

/**
 * The category the posts are filed under. It is what the article cards show
 * above each title, so it has to read as something.
 */
function uottawa_blog_seed_category() {
	return __( 'Online learning', 'uottawa-online-fr' );
}

/**
 * Put one of the theme's pictures in the media library, once.
 *
 * Several posts share a picture, and a run that uploaded it again for each
 * would leave the library with copies of the same file. The ones already
 * done are kept for the length of the run.
 *
 * @param string $file Filename inside assets/blog.
 * @param string $alt  What the picture shows.
 */
function uottawa_blog_seed_attachment( $file, $alt = '' ) {
	static $done = array();

	if ( isset( $done[ $file ] ) ) {
		return $done[ $file ];
	}

	$path = get_theme_file_path( 'assets/blog/' . $file );

	if ( ! file_exists( $path ) ) {
		return 0;
	}

	$upload = wp_upload_bits( $file, null, file_get_contents( $path ) ); // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents

	if ( ! empty( $upload['error'] ) ) {
		return 0;
	}

	$type = wp_check_filetype( $file );

	$id = wp_insert_attachment(
		array(
			'post_mime_type' => $type['type'] ? $type['type'] : 'image/png',
			'post_title'     => pathinfo( $file, PATHINFO_FILENAME ),
			'post_status'    => 'inherit',
		),
		$upload['file']
	);

	if ( is_wp_error( $id ) || ! $id ) {
		return 0;
	}

	require_once ABSPATH . 'wp-admin/includes/image.php';
	wp_update_attachment_metadata( $id, wp_generate_attachment_metadata( $id, $upload['file'] ) );

	if ( '' !== trim( $alt ) ) {
		update_post_meta( $id, '_wp_attachment_image_alt', $alt );
	}

	$done[ $file ] = $id;

	return $id;
}

/**
 * Point every picture in a body at the copy in this site's media library.
 *
 * The bodies came out of an export and still name the site they were written
 * on. A size is part of the file name there — the 1024-wide version, say —
 * and the sizes this site makes are its own, so the name is taken back to
 * the original before it is looked up.
 *
 * @param string $content Post body.
 * @param array  $alts    Alt text by filename.
 */
function uottawa_blog_seed_images( $content, $alts ) {
	return preg_replace_callback(
		'#<img[^>]+>#i',
		function ( $match ) use ( $alts ) {
			$tag = $match[0];

			if ( ! preg_match( '/\ssrc\s*=\s*["\x27]([^"\x27]+)/i', $tag, $src ) ) {
				return $tag;
			}

			$file = wp_basename( wp_parse_url( html_entity_decode( $src[1] ), PHP_URL_PATH ) );
			$file = preg_replace( '/-\d+x\d+(\.[a-z0-9]+)$/i', '$1', $file );

			// The body's own alt is the fuller description; the map only
			// carries the ones the export kept separately.
			$alt = isset( $alts[ $file ] ) ? $alts[ $file ] : '';

			if ( preg_match( '/\salt\s*=\s*"([^"]*)"/i', $tag, $m ) && '' !== trim( $m[1] ) ) {
				$alt = html_entity_decode( $m[1] );
			}

			$id = uottawa_blog_seed_attachment( $file, $alt );

			if ( ! $id ) {
				return $tag;
			}

			$url = wp_get_attachment_image_url( $id, 'large' );

			if ( ! $url ) {
				$url = wp_get_attachment_url( $id );
			}

			return str_replace( $src[1], esc_url( $url ), $tag );
		},
		$content
	);
}

/**
 * Write the posts, once.
 */
function uottawa_blog_seed() {
	if ( get_option( 'uottawa_blog_seed_done' ) ) {
		return;
	}

	$posts = uottawa_blog_seed_posts();
	$alts  = uottawa_blog_seed_alt();

	// Under an administrator, so the byline reads as the site rather than
	// as nobody.
	$admins = get_users(
		array(
			'role'    => 'administrator',
			'number'  => 1,
			'orderby' => 'ID',
			'fields'  => 'ID',
		)
	);

	$author = $admins ? (int) $admins[0] : 1;

	$term = term_exists( uottawa_blog_seed_category(), 'category' );

	if ( ! $term ) {
		$term = wp_insert_term( uottawa_blog_seed_category(), 'category' );
	}

	$category = is_wp_error( $term ) ? 0 : (int) $term['term_id'];

	$made = array();

	foreach ( $posts as $post ) {
		// A post already at that slug is somebody's — whether they wrote it
		// or imported it, it is not this theme's to touch.
		if ( get_page_by_path( $post['slug'], OBJECT, 'post' ) ) {
			continue;
		}

		$id = wp_insert_post(
			array(
				'post_type'    => 'post',
				'post_author'  => $author,
				'post_name'    => $post['slug'],
				'post_title'   => $post['title'],
				'post_date'    => $post['date'],
				'post_content' => '',
				'post_status'  => 'publish',
			)
		);

		if ( is_wp_error( $id ) || ! $id ) {
			continue;
		}

		if ( $category ) {
			wp_set_post_categories( $id, array( $category ) );
		}

		$thumb = uottawa_blog_seed_attachment(
			$post['thumb'],
			isset( $alts[ $post['thumb'] ] ) ? $alts[ $post['thumb'] ] : ''
		);

		if ( $thumb ) {
			set_post_thumbnail( $id, $thumb );
		}

		// The body goes in after the post exists, so the pictures it names
		// can be attached to it as they are put in the library.
		wp_update_post(
			array(
				'ID'           => $id,
				'post_content' => uottawa_blog_seed_images( $post['content'], $alts ),
			)
		);

		$made[] = $id;
	}

	update_option( 'uottawa_blog_seed_done', $made ? $made : 1 );
}

/**
 * Setup runs this too, but only when the theme's version has moved on, and
 * that reading comes from a cache an object cache can hold stale for half an
 * hour after the files land. The posts have a guard of their own, so they do
 * not need the version to agree.
 */
add_action( 'admin_init', 'uottawa_blog_seed' );
