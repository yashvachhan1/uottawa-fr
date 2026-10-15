<?php
/**
 * Site header — logo, primary navigation and the two header buttons.
 *
 * @package uottawa-online
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- ============================================================ HEADER -->
  <header class="site-header" id="site-header">
    <div class="container">
      <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'Accueil uOttawa', 'uottawa-online-fr' ); ?>">
        <img class="logo__img" src="<?php echo esc_url( uottawa_asset( 'icons/logo.png' ) ); ?>" width="148" height="38" alt="uOttawa" />
      </a>

      <button class="nav-toggle" type="button" id="nav-toggle" aria-label="<?php esc_attr_e( 'Menu', 'uottawa-online-fr' ); ?>" aria-expanded="false">
        <span></span>
      </button>

      <nav class="nav" aria-label="<?php esc_attr_e( 'Navigation principale', 'uottawa-online-fr' ); ?>">
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'primary',
            'container'      => false,
            'items_wrap'     => '<ul>%3$s</ul>',
            'depth'          => 1,
            'fallback_cb'    => 'uottawa_primary_menu_fallback',
          )
        );
        ?>
      </nav>

      <div class="header-lang">
        <a class="btn btn--lang" href="<?php echo esc_url( uottawa_english_url() ); ?>" rel="noopener" lang="en" title="Site in English">EN</a>
      </div>

      <div class="header-actions">
        <a class="btn btn--red btn--sm" href="<?php echo esc_url( uottawa_cta_url( 'apply' ) ); ?>"<?php echo uottawa_link_atts( uottawa_cta_url( 'apply' ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>><?php esc_html_e( 'Demande d&rsquo;admission', 'uottawa-online-fr' ); ?></a>
        <a class="btn btn--outline-dark btn--sm" href="<?php echo esc_url( uottawa_cta_url( 'request' ) ); ?>"><?php esc_html_e( 'Demander des renseignements', 'uottawa-online-fr' ); ?></a>
      </div>
    </div>
  </header>

  <main>
