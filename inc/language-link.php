<?php
/**
 * Where the language switch goes from this page.
 *
 * Left empty, the switch works the slug out: both sites name their pages the
 * same, so the path carries across. Rename a page on one side and that guess
 * stops matching, which is what this field is for — set the other site's URL
 * by hand and the switch uses it instead.
 *
 * @package uottawa-online-fr
 */

defined( 'ABSPATH' ) || exit;

/**
 * The URL set by hand on the page being viewed, if any.
 */
function uottawa_language_url_override() {
	$id = get_queried_object_id();

	if ( ! $id ) {
		return '';
	}

	$url = trim( (string) get_post_meta( $id, 'uottawa_language_url', true ) );

	if ( '' === $url ) {
		return '';
	}

	return 0 === strpos( $url, 'http' ) ? $url : 'https://' . ltrim( $url, '/' );
}

/**
 * The box, on anything with a front end of its own.
 */
function uottawa_language_link_meta_box() {
	foreach ( array( 'page', 'post' ) as $type ) {
		add_meta_box(
			'uottawa-language-link',
			__( 'Version anglaise de cette page', 'uottawa-online-fr' ),
			'uottawa_language_link_render',
			$type,
			'side',
			'default'
		);
	}
}
add_action( 'add_meta_boxes', 'uottawa_language_link_meta_box' );

/**
 * The field itself.
 */
function uottawa_language_link_render( $post ) {
	$value = get_post_meta( $post->ID, 'uottawa_language_url', true );

	wp_nonce_field( 'uottawa_language_link', 'uottawa_language_link_nonce' );
	?>
	<p>
		<label for="uottawa-language-url"><?php esc_html_e( 'Adresse de la page correspondante sur le site anglais :', 'uottawa-online-fr' ); ?></label>
		<input type="url" class="widefat" id="uottawa-language-url"
			name="uottawa_language_url" value="<?php echo esc_attr( $value ); ?>"
			placeholder="<?php echo esc_attr( untrailingslashit( uottawa_english_url() ) . '/…' ); ?>">
	</p>
	<p class="description">
		<?php esc_html_e( 'Laissez ce champ vide tant que les deux sites utilisent la même adresse : le sélecteur trouve la page lui-même. Remplissez-le dès qu’une adresse diffère, sinon le sélecteur mène à une page inexistante.', 'uottawa-online-fr' ); ?>
	</p>
	<?php
}

/**
 * Save it.
 */
function uottawa_language_link_save( $post_id ) {
	if ( ! isset( $_POST['uottawa_language_link_nonce'] )
		|| ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['uottawa_language_link_nonce'] ) ), 'uottawa_language_link' ) ) {
		return;
	}

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	if ( ! isset( $_POST['uottawa_language_url'] ) ) {
		return;
	}

	$value = esc_url_raw( trim( wp_unslash( $_POST['uottawa_language_url'] ) ) );

	if ( '' === $value ) {
		delete_post_meta( $post_id, 'uottawa_language_url' );
	} else {
		update_post_meta( $post_id, 'uottawa_language_url', $value );
	}
}
add_action( 'save_post', 'uottawa_language_link_save' );
