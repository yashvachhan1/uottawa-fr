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
          'count'  => 3,
          'offset' => 0,
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

    <p class="filter-bar">
      <span class="filter-bar__label">Filtrer par :</span>
      <a class="is-active" href="#">Tous les programmes</a>
      <a href="#">Sujet</a>
    </p>

    <div class="articles-grid articles-grid--3">
      <?php
      uottawa_article_cards(
        array(
          'count'  => 3,
          'offset' => 3,
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
  </div>
</section>

<?php get_footer(); ?>
