<?php
/* Template Name: News & events */
get_header();
?>

<!-- ============================================================ HERO -->
<section class="page-hero page-hero--inner">
  <div class="page-hero__bg">
    <img src="<?php echo esc_url( uottawa_page_image( 'img_news_hero', uottawa_asset( 'img/007bc2f82e5e246d911896471b7b9f9f39c57034.jpg' ) ) ); ?>" alt="<?php echo esc_attr( uottawa_page_image_alt( 'img_news_hero', 'Deux collègues qui discutent et rient de part et d’autre d’un bureau, dans un espace de travail lumineux' ) ); ?>">
  </div>

  <div class="container">
    <div class="page-hero__card">
      <h1 class="page-hero__title">Actualités et événements</h1>
      <div class="page-hero__text">
        <p>Consultez une sélection d’articles et les plus récentes publications de l’Université d’Ottawa en ligne. Ces ressources vous aident à développer des compétences humaines recherchées sur le marché du travail, à préparer votre avenir professionnel et à progresser plus rapidement vers l’obtention de votre diplôme.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================ FEATURED ARTICLES -->
<section class="section featured">
  <div class="container">
    <h2 class="section-title">Articles en vedette</h2>

    <div class="articles-grid articles-grid--3">
      <?php
      uottawa_article_cards(
        array(
          'count'    => 3,
          'featured' => true,
          'labels' => array(
            'kicker'  => '[Program Name]',
            'title'   => '[Blog post title]',
            'excerpt' => '[Brief description of the blog post]',
            'meta'    => '[By] [Date]',
          ),
        )
      );
      ?>

    </div>
  </div>
</section>

<!-- ============================================================ LATEST ARTICLES -->
<section class="section latest">
  <div class="container">
    <h2 class="section-title">Articles récents</h2>

    <?php
    // Every category that actually has something in it. Nothing to choose
    // between means no point offering the choice.
    $uottawa_cats = get_categories( array( 'hide_empty' => true ) );
    ?>
    <div class="filter-bar" data-filter>
      <span class="filter-bar__label">Filtrer par :</span>

      <label class="screen-reader-text" for="filter-category"><?php esc_html_e( 'Filtrer par programme', 'uottawa-online-fr' ); ?></label>
      <select class="filter-bar__select" id="filter-category" data-filter-category>
        <option value=""><?php esc_html_e( 'Tous les programmes', 'uottawa-online-fr' ); ?></option>
        <?php foreach ( $uottawa_cats as $uottawa_cat ) : ?>
          <option value="<?php echo esc_attr( $uottawa_cat->slug ); ?>"><?php echo esc_html( $uottawa_cat->name ); ?></option>
        <?php endforeach; ?>
      </select>

      <label class="screen-reader-text" for="filter-topic"><?php esc_html_e( 'Rechercher par sujet', 'uottawa-online-fr' ); ?></label>
      <input class="filter-bar__search" id="filter-topic" type="search" data-filter-topic
        placeholder="<?php esc_attr_e( 'Sujet', 'uottawa-online-fr' ); ?>" autocomplete="off">
    </div>

    <div class="articles-grid articles-grid--3">
      <?php
      uottawa_article_cards(
        array(
          // Every post, because the filter above the row is what narrows it.
          // A filter over a fixed three would have nothing to do.
          'count'  => -1,
          'offset' => 0,
          'labels' => array(
            'kicker'  => '[Program]',
            'title'   => '[Title]',
            'excerpt' => '[Description]',
            'meta'    => 'By uOttawa Online Team | [Date]',
          ),
        )
      );
      ?>

    </div>

    <p class="filter-bar__empty" data-filter-empty hidden><?php esc_html_e( 'Aucun article ne correspond. Essayez un autre programme ou un autre mot.', 'uottawa-online-fr' ); ?></p>
  </div>
</section>

<?php get_footer(); ?>
