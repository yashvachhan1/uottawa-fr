<?php
/**
 * The sample blog post.
 *
 * The blog templates have nothing to show on a fresh install, so the news
 * row falls back to placeholders and the post design cannot be reviewed at
 * all. This writes one real post, in French — copy, category and a featured
 * image from the theme's own pictures — so both are there the moment the
 * theme is in.
 *
 * It runs from first-run setup, once. Delete the post afterwards and it
 * stays deleted; the option below is what remembers that.
 *
 * @package uottawa-online-fr
 */

defined( 'ABSPATH' ) || exit;

/**
 * The post's fixed slug, so the thing is only ever created once.
 */
function uottawa_demo_post_slug() {
	return 'cinq-questions-avant-de-commencer-des-etudes-en-ligne';
}

/**
 * Title, category, excerpt and body.
 */
function uottawa_demo_post_content() {
	return array(
		'title'    => __( 'Cinq questions à se poser avant d’entreprendre des études en ligne', 'uottawa-online-fr' ),
		'category' => __( 'Apprentissage en ligne', 'uottawa-online-fr' ),
		'image'    => '3e1772b0e58a5483675ed988eb03ba7aea539c1f.jpg',
		'alt'      => __( 'Une étudiante travaille à son bureau dans un espace d’étude partagé', 'uottawa-online-fr' ),
		'excerpt'  => __( 'Étudier en ligne, c’est un autre rythme, pas un parcours plus facile. Voici les cinq questions qui méritent une réponse avant de présenter une demande d’admission.', 'uottawa-online-fr' ),
		'body'     => '
<p>Des études en ligne exigent la même chose que des études sur le campus : les lectures, les échéances, la réflexion. Ce qui change, c’est l’origine de la structure. Sur le campus, l’horaire tient la semaine ensemble. En ligne, c’est vous qui la tenez — et c’est une compétence, pas un trait de personnalité. Elle s’apprend, et il vaut la peine d’être honnête avec soi-même avant de commencer.</p>

<p>Voici les cinq questions qu’on nous pose le plus souvent, et les réponses que nous donnons.</p>

<h2>1. Combien d’heures cela demande-t-il vraiment ?</h2>

<p>Prévoyez de six à neuf heures par semaine pour chaque cours. Certaines semaines sont plus légères, et celles où un travail est à remettre sont plus lourdes. Ce qui compte n’est pas le total, mais le fait que ces heures existent dans votre semaine : la plupart des gens les trouvent tôt le matin, sur l’heure du dîner et dans un bloc de fin de semaine, plutôt qu’en une longue soirée.</p>

<h2>2. Puis-je continuer à travailler à temps plein ?</h2>

<p>La plupart de nos étudiantes et étudiants le font. Deux cours par trimestre en parallèle d’un emploi à temps plein, c’est le rythme qui convient à la majorité ; trois, c’est possible pendant un trimestre ou deux, et rarement tenable plus longtemps. Vous n’êtes pas en retard si vous prenez le chemin le plus lent — un programme accéléré est conçu pour que le rythme vous appartienne.</p>

<blockquote><p>Les personnes qui terminent ne sont pas celles qui ont le plus de temps libre. Ce sont celles qui ont décidé à l’avance quelles heures revenaient aux études.</p></blockquote>

<h2>3. Vais-je étudier seul ?</h2>

<p>Non. Les cours suivent un rythme hebdomadaire avec le même groupe, et le travail que vous faites à votre heure s’accompagne de discussions, de travaux d’équipe et de séances en direct. Le corps professoral tient des heures de disponibilité régulières, et l’équipe de soutien scolaire est là pour tout, du choix de cours à un trimestre qui a mal tourné.</p>

<h2>4. Mes études antérieures comptent-elles ?</h2>

<p>Souvent, oui. Les diplômes collégiaux, les études universitaires déjà faites et, dans certains cas, les qualifications professionnelles peuvent être évalués aux fins de transfert de crédits, ce qui peut retrancher un temps appréciable au parcours. L’évaluation est individuelle : la seule façon de savoir, c’est de demander — et il vaut mieux le faire avant de présenter une demande d’admission qu’après.</p>

<h2>5. Et si un trimestre se passe mal ?</h2>

<p>La vie ne s’arrête pas pour des études. Une maladie, un nouvel emploi, une famille qui a besoin de vous : c’est ordinaire, et le programme est fait pour l’absorber. Vous pouvez alléger votre charge de cours, reporter un trimestre ou reprendre le parcours plus tard. Parlez-en tôt à une conseillère ou un conseiller ; presque tout se règle plus facilement à la troisième semaine qu’à la onzième.</p>

<h3>Encore indécis ?</h3>

<p>Si vous pesez le pour et le contre, l’étape la plus utile est une conversation, pas d’autres lectures. Dites-nous où vous en êtes et ce que vous attendez de ce diplôme, et nous vous dirons honnêtement si c’est le bon choix pour vous.</p>
',
	);
}

/**
 * Put the theme's own picture in the media library and hand back its id.
 *
 * The file lives in the theme, so it is copied into uploads rather than
 * downloaded — a fresh site may not be reachable from itself yet.
 *
 * @param string $file Filename inside assets/img.
 * @param string $alt  Alternative text.
 * @param int    $post Post to attach it to.
 */
function uottawa_demo_post_image( $file, $alt, $post ) {
	$source = get_theme_file_path( 'assets/img/' . $file );

	if ( ! file_exists( $source ) ) {
		return 0;
	}

	$upload = wp_upload_bits( $file, null, file_get_contents( $source ) ); // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents

	if ( ! empty( $upload['error'] ) ) {
		return 0;
	}

	$id = wp_insert_attachment(
		array(
			'post_mime_type' => 'image/jpeg',
			'post_title'     => sanitize_text_field( $alt ),
			'post_status'    => 'inherit',
		),
		$upload['file'],
		$post
	);

	if ( is_wp_error( $id ) || ! $id ) {
		return 0;
	}

	require_once ABSPATH . 'wp-admin/includes/image.php';
	wp_update_attachment_metadata( $id, wp_generate_attachment_metadata( $id, $upload['file'] ) );
	update_post_meta( $id, '_wp_attachment_image_alt', $alt );

	return $id;
}

/**
 * Write the post, once.
 */
function uottawa_demo_post() {
	// Holds the id of the post once it has been written. Set only after the
	// post exists: an earlier version marked this done up front, so a pass
	// that did not get as far as writing anything left the site believing it
	// had, and the post never appeared.
	if ( get_option( 'uottawa_demo_post_created' ) ) {
		return;
	}

	$existing = get_page_by_path( uottawa_demo_post_slug(), OBJECT, 'post' );

	if ( $existing ) {
		update_option( 'uottawa_demo_post_created', $existing->ID );
		return;
	}

	$demo = uottawa_demo_post_content();

	// Left to itself wp_insert_post files this under user 0 when it runs from
	// setup rather than from a logged-in screen, and the byline comes out
	// empty. Put it under an administrator.
	$admins = get_users(
		array(
			'role'    => 'administrator',
			'number'  => 1,
			'orderby' => 'ID',
			'fields'  => 'ID',
		)
	);

	$id = wp_insert_post(
		array(
			'post_type'    => 'post',
			'post_author'  => $admins ? (int) $admins[0] : 1,
			'post_name'    => uottawa_demo_post_slug(),
			'post_title'   => $demo['title'],
			'post_excerpt' => $demo['excerpt'],
			'post_content' => trim( $demo['body'] ),
			'post_status'  => 'publish',
		)
	);

	if ( is_wp_error( $id ) || ! $id ) {
		return;
	}

	$term = term_exists( $demo['category'], 'category' );

	if ( ! $term ) {
		$term = wp_insert_term( $demo['category'], 'category' );
	}

	if ( ! is_wp_error( $term ) ) {
		wp_set_post_categories( $id, array( (int) $term['term_id'] ) );
	}

	update_option( 'uottawa_demo_post_created', $id );

	$image = uottawa_demo_post_image( $demo['image'], $demo['alt'], $id );

	if ( $image ) {
		set_post_thumbnail( $id, $image );
	}
}

/**
 * Setup runs this too, but only when the theme's version has moved on - and
 * that reading comes from a cache that an object cache can hold stale for
 * half an hour after the files land. The post has a guard of its own, so it
 * does not need the version to agree: hang it off admin_init as well and it
 * appears on the first admin screen after the update, whatever the cache
 * happens to say.
 */
add_action( 'admin_init', 'uottawa_demo_post' );
