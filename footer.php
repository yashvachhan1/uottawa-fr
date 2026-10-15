<?php
/**
 * Call-to-action band and site footer — identical on every page.
 *
 * @package uottawa-online
 */
?>
  </main>

  <?php
  // The landing page ends with its own editable Final CTA, so the site-wide
  // band would be the same block twice.
  if ( ! uottawa_landing_rendered() ) :
  ?>
  <!-- ============================================================ CTA -->
  <section class="cta">
    <div class="container">
      <div class="cta__text">
        <h2 class="cta__title"><?php esc_html_e( 'Votre diplôme universitaire est à votre portée', 'uottawa-online-fr' ); ?></h2>
        <p class="cta__text-body"><?php esc_html_e( 'Valorisez votre diplôme d’études collégiales. Développez les compétences humaines les plus recherchées sur le marché du travail. Obtenez un diplôme universitaire entièrement en ligne, adapté aux réalités d’aujourd’hui.', 'uottawa-online-fr' ); ?></p>
      </div>

      <div class="cta__actions">
        <div class="cta__action">
          <a class="btn btn--red btn--pill" href="<?php echo esc_url( uottawa_cta_url( 'request' ) ); ?>"><?php esc_html_e( 'Demander des renseignements', 'uottawa-online-fr' ); ?></a>
          <p><?php esc_html_e( 'Découvrez le programme, les droits de scolarité et les étapes à suivre pour présenter une demande d’admission.', 'uottawa-online-fr' ); ?></p>
        </div>
        <div class="cta__action">
          <a class="btn btn--red btn--pill" href="<?php echo esc_url( uottawa_cta_url( 'apply' ) ); ?>"<?php echo uottawa_link_atts( uottawa_cta_url( 'apply' ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>><?php esc_html_e( 'Commencer votre demande d’admission', 'uottawa-online-fr' ); ?></a>
          <p><?php esc_html_e( 'Préparez-vous à acquérir les compétences dont le marché du travail de demain a besoin.', 'uottawa-online-fr' ); ?></p>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- ============================================================ FOOTER -->
  <footer class="site-footer">
    <p><?php echo wp_kses_post( uottawa_footer_line() ); ?></p>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>
