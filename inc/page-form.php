<?php
/**
 * Forminator shortcode field for the designed pages that carry a form.
 *
 * The landing page has had one of these since it was ported; this gives the
 * contact page the same thing. Paste a shortcode and it replaces the form the
 * design ships with; leave it empty and the design's own form stays.
 *
 * @package uottawa-online
 */

defined( 'ABSPATH' ) || exit;

/**
 * Templates that can take a form, and what the box should say on each.
 */
function uottawa_page_form_map() {
	return array(
		'page-contact.php' => __( 'Le formulaire à côté de &laquo;&nbsp;Communiquez avec notre équipe&nbsp;&raquo;.', 'uottawa-online-fr' ),
	);
}

/**
 * The shortcode saved on the page being viewed, if any.
 */
function uottawa_page_form_shortcode() {
	$id = get_queried_object_id();

	return $id ? (string) get_post_meta( $id, 'forminator_shortcode', true ) : '';
}

/**
 * Register the box on the templates that can take a form.
 */
function uottawa_page_form_meta_box( $post ) {
	$map = uottawa_page_form_map();

	if ( ! $post || ! isset( $map[ uottawa_page_template_file( $post ) ] ) ) {
		return;
	}

	add_meta_box(
		'uottawa-page-form',
		__( 'Formulaire de la page', 'uottawa-online-fr' ),
		'uottawa_page_form_render',
		'page',
		'normal',
		'high'
	);
}
add_action( 'add_meta_boxes_page', 'uottawa_page_form_meta_box' );

/**
 * The box itself.
 */
function uottawa_page_form_render( $post ) {
	$map   = uottawa_page_form_map();
	$where = isset( $map[ uottawa_page_template_file( $post ) ] ) ? $map[ uottawa_page_template_file( $post ) ] : '';
	$value = get_post_meta( $post->ID, 'forminator_shortcode', true );

	wp_nonce_field( 'uottawa_page_form', 'uottawa_page_form_nonce' );
	?>
	<p class="description">
		<?php echo wp_kses_post( $where ); ?>
		<?php esc_html_e( 'Collez un code court Forminator pour utiliser ce formulaire. Laissez le champ vide pour conserver le formulaire d’origine.', 'uottawa-online-fr' ); ?>
	</p>
	<p>
		<label for="uottawa-forminator-shortcode"><strong><?php esc_html_e( 'Code court Forminator', 'uottawa-online-fr' ); ?></strong></label><br>
		<input type="text" class="widefat code" id="uottawa-forminator-shortcode"
			name="forminator_shortcode" value="<?php echo esc_attr( $value ); ?>"
			placeholder='[forminator_form id="123"]'>
	</p>
	<?php
}

/**
 * Save it.
 */
function uottawa_page_form_save( $post_id ) {
	if ( ! isset( $_POST['uottawa_page_form_nonce'] )
		|| ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['uottawa_page_form_nonce'] ) ), 'uottawa_page_form' ) ) {
		return;
	}

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	if ( ! current_user_can( 'edit_page', $post_id ) ) {
		return;
	}

	if ( ! isset( $_POST['forminator_shortcode'] ) ) {
		return;
	}

	$value = sanitize_text_field( wp_unslash( $_POST['forminator_shortcode'] ) );

	if ( '' === $value ) {
		delete_post_meta( $post_id, 'forminator_shortcode' );
	} else {
		update_post_meta( $post_id, 'forminator_shortcode', $value );
	}
}
add_action( 'save_post_page', 'uottawa_page_form_save' );
