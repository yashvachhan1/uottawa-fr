<?php
/* Template Name: Home */
get_header();
?>

<!-- ============================================================ HERO -->
<section class="page-hero">
  <div class="page-hero__bg">
    <img src="<?php echo esc_url( uottawa_page_image( 'img_home_hero', uottawa_asset( 'img/007bc2f82e5e246d911896471b7b9f9f39c57034.jpg' ) ) ); ?>" alt="">
  </div>

  <div class="container">
    <div class="page-hero__card">
      <p class="page-hero__eyebrow">Université d'Ottawa en ligne</p>
      <h1 class="page-hero__title">Des esprits ouverts. Un avenir prometteur. Depuis 1848.</h1>
      <p class="page-hero__tagline">Poursuivez votre parcours, où que vous soyez.</p>
      <p class="page-hero__text">L’Université d’Ottawa s’appuie sur plus de 175 ans de tradition universitaire pour offrir une expérience d’apprentissage adaptée aux personnes qui concilient carrière, vie familiale et projets d’avenir. La même expertise du corps professoral. Les mêmes normes d’excellence. Une nouvelle façon d’étudier.</p>
      <div class="page-hero__actions">
        <a class="btn btn--red btn--hero" href="<?php echo esc_url( uottawa_cta_url( 'apply' ) ); ?>"<?php echo uottawa_link_atts( uottawa_cta_url( 'apply' ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>>Demande d’admission</a>
        <a class="btn btn--outline-light btn--hero" href="<?php echo esc_url( uottawa_cta_url( 'request' ) ); ?>">Demander des renseignements</a>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================ STATS -->
<section class="section stats">
  <div class="container">
    <h2 class="section-title">L’Université d’Ottawa : un environnement propice à votre réussite</h2>

    <div class="stats-row">
      <div class="stat">
        <p class="stat__value">12 000</p>
        <p class="stat__label">membres du corps professoral, du personnel de recherche et du personnel administratif</p>
      </div>
      <div class="stat">
        <p class="stat__value">300 000</p>
        <p class="stat__label">diplômé·e·s à travers le monde</p>
      </div>
      <div class="stat">
        <p class="stat__value">90 %</p>
        <p class="stat__label">des diplômé·e·s occupent un emploi six mois après l’obtention de leur diplôme</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================ AUDIENCE -->
<section class="section audience">
  <div class="container">
    <h2 class="section-title">Un diplôme qui s’adapte à votre réalité</h2>
    <p class="lede">Quel que soit le chemin parcouru, une place vous attend à l’Université d’Ottawa.</p>

    <div class="audience-grid">
      <article class="audience-item">
        <img class="audience-item__icon" src="<?php echo esc_url( uottawa_asset( 'icons/icon-jobchange.svg' ) ); ?>" width="75" height="75" alt="">
        <h4>Un nouveau tournant pour votre carrière</h4>
        <p>Vous avez des ambitions pour votre avenir. Un diplôme de l’Université d’Ottawa vous aide à les poursuivre avec la reconnaissance et la confiance nécessaires pour aller plus loin.</p>
      </article>

      <article class="audience-item audience-item--flip">
        <img class="audience-item__icon" src="<?php echo esc_url( uottawa_asset( 'icons/icon-family.svg' ) ); ?>" width="75" height="75" alt="">
        <h4>Travail, famille et études : un équilibre possible</h4>
        <p>Votre quotidien est déjà bien rempli. L’Université d’Ottawa en ligne vous offre la flexibilité nécessaire pour poursuivre vos études tout en préservant l’équilibre qui vous convient.</p>
      </article>

      <article class="audience-item">
        <img class="audience-item__icon" src="<?php echo esc_url( uottawa_asset( 'icons/icon-career.svg' ) ); ?>" width="53" height="53" alt="">
        <h4>L’expérience acquise, le diplôme pour aller plus loin</h4>
        <p>Votre expérience vous a permis de bâtir un solide parcours professionnel. Si l’obtention d’un diplôme peut vous ouvrir la voie vers un nouveau poste, une nouvelle occasion ou une promotion, l’Université d’Ottawa en ligne vous permet de poursuivre votre progression sans bouleverser votre quotidien.</p>
      </article>

      <article class="audience-item">
        <img class="audience-item__icon" src="<?php echo esc_url( uottawa_asset( 'icons/icon-learning.svg' ) ); ?>" width="56" height="56" alt="">
        <h4>Apprendre, encore et toujours</h4>
        <p>Aimeriez-vous terminer une formation laissée en suspens ou simplement continuer à enrichir vos connaissances? L’Université d’Ottawa en ligne vous permet de poursuivre votre apprentissage en vous appuyant sur l’expérience et les connaissances acquises tout au long de votre parcours.</p>
      </article>
    </div>
  </div>
</section>

<!-- ============================================================ REASONS -->
<section class="section reasons">
  <div class="container">
    <h2 class="section-title">Pourquoi choisir l’Université d’Ottawa en ligne?</h2>
    <p class="lede">Étudier à l’Université d’Ottawa en ligne, c’est bénéficier de la qualité de l’enseignement de l’une des grandes universités de recherche du Canada pour atteindre vos objectifs professionnels.</p>

    <div class="reasons-grid">
      <article class="reason-card reason-card--red">
        <h4>Un diplôme reconnu, 100 % en ligne</h4>
        <p>Un diplôme de l’Université d’Ottawa reconnu à l’échelle internationale vous permet de profiter de la qualité de l’enseignement d’une université de recherche membre du U15. Vous pouvez poursuivre vos études sans déménager ni mettre votre carrière sur pause, tout en développant une expérience recherchée sur le marché du travail.</p>
      </article>
      <article class="reason-card">
        <h4>L’expertise de chaque faculté</h4>
        <p>Chaque programme de l’Université d’Ottawa en ligne bénéficie de l’expertise et de la perspective propres à sa faculté, tout en mettant l’accent sur les compétences humaines essentielles et la capacité d’adaptation dans un contexte où l’intelligence artificielle occupe une place grandissante.</p>
      </article>
      <article class="reason-card">
        <h4>Un accompagnement à chaque étape</h4>
        <p>Une équipe de conseiller·ère·s à l’admission et à la réussite étudiante, basée au Canada, vous accompagne tout au long de votre parcours universitaire, de vos premières questions jusqu’à l’obtention de votre diplôme. Vous profitez ainsi d’un accompagnement personnalisé qui va bien au-delà d’un simple service d’assistance.</p>
      </article>
      <article class="reason-card">
        <h4>Un réseau qui va plus loin</h4>
        <p>La communauté étudiante réunit des personnes de partout au Canada aux parcours professionnels et universitaires variés. La diversité des parcours favorise les échanges et enrichit votre expérience d’apprentissage. Votre réseau professionnel s’ouvre également sur la communauté internationale de l’Université d’Ottawa, qui compte plus de 200 000 membres.</p>
      </article>
      <article class="reason-card">
        <h4>Un parcours qui reconnaît vos acquis</h4>
        <p>Vos acquis scolaires constituent une base solide pour poursuivre vos études sans repartir à zéro. Grâce à des possibilités de transfert de crédits adaptées à la vie professionnelle, les crédits obtenus dans le cadre de votre diplôme d’études collégiales peuvent être reconnus dans votre cheminement vers un diplôme de l’Université d’Ottawa.</p>
      </article>
    </div>
  </div>
</section>

<!-- ============================================================ BEYOND -->
<section class="section beyond">
  <div class="container">
    <h2 class="section-title">L’Université d’Ottawa en ligne : bien plus qu’un diplôme</h2>
    <p class="lede">Le diplôme est l’aboutissement d’un parcours dont la valeur se construit à chaque étape. Pour les adultes qui poursuivent leurs études, l’apprentissage ouvre de nouvelles possibilités : il renforce la confiance, donne un nouvel élan aux aspirations personnelles et élargit les perspectives professionnelles.</p>

    <div class="beyond-grid">
      <article class="beyond-item">
        <div class="beyond-item__media">
          <img src="<?php echo esc_url( uottawa_page_image( 'img_home_beyond_1', uottawa_asset( 'img/1db0caf7dba8f8cfcd2ab1b78c55589d2203dad2.jpg' ) ) ); ?>" alt="">
        </div>
        <div class="beyond-item__body">
          <h4>Un plus grand bien-être</h4>
          <p>La plupart des adultes qui poursuivent leurs études constatent une réelle amélioration de leur bien-être et de leur confiance, même lorsque les exigences de la formation et la conciliation avec les autres sphères de leur vie représentent de véritables défis.<span class="sup">1</span></p>
        </div>
      </article>

      <article class="beyond-item">
        <div class="beyond-item__media">
          <img src="<?php echo esc_url( uottawa_page_image( 'img_home_beyond_2', uottawa_asset( 'img/9755731fb6ea8b22a9d25e00c68d1d505c1bfdbb.jpg' ) ) ); ?>" alt="">
        </div>
        <div class="beyond-item__body">
          <h4>Un sentiment d’accomplissement renouvelé</h4>
          <p>Selon une étude britannique sur les effets de la formation à l’âge adulte, les personnes qui continuent d’apprendre font état d’un plus grand sentiment d’accomplissement que celles qui ne poursuivent pas de formation.<span class="sup">2</span></p>
        </div>
      </article>

      <article class="beyond-item">
        <div class="beyond-item__media">
          <img src="<?php echo esc_url( uottawa_page_image( 'img_home_beyond_3', uottawa_asset( 'img/07662f640130e427d17ab41521cec900d86b8ee3.jpg' ) ) ); ?>" alt="">
        </div>
        <div class="beyond-item__body">
          <h4>Un avenir professionnel plus prometteur</h4>
          <p>Au Canada, les personnes titulaires d’un diplôme universitaire gagnent en moyenne 53 % de plus par heure que celles qui n’ont pas fait d’études postsecondaires.<span class="sup">3</span></p>
        </div>
      </article>
    </div>

    <p class="sources">Sources : &sup1; Recherche sur le bien-être des adultes en formation associée au National Institute of Adult Continuing Education (NIACE). &sup2; Étude du Learning and Work Institute (Royaume-Uni, 2018) sur les effets de la formation à l’âge adulte. &sup3; Banque du Canada, &laquo;&nbsp;The Payoffs of Higher Education&nbsp;&raquo; (2020), d’après les données salariales de 2018.</p>
  </div>
</section>

<!-- ============================================================ PROGRAMS -->
<section class="section programs" id="programs">
  <div class="container">
    <h2 class="section-title">Nos programmes</h2>

    <article class="program-card">
      <h4>Baccalauréat ès arts en études interdisciplinaires (mode accéléré en ligne)</h4>
      <p>Ce programme s’adresse aux titulaires d’un diplôme d’études collégiales qui comptent au moins trois années d’expérience professionnelle et souhaitent s’appuyer sur leurs acquis pour obtenir un diplôme de l’Université d’Ottawa. Votre formation collégiale est reconnue grâce au transfert de crédits, et votre cheminement universitaire est conçu pour s’adapter à votre vie professionnelle.</p>
      <a class="btn btn--red btn--program" href="<?php echo esc_url( uottawa_page_url( uottawa_program_slug() ) ); ?>">Découvrir le programme</a>
    </article>
  </div>
</section>

<!-- ============================================================ FLEXIBLE DAY -->
<section class="section day" id="day">
  <div class="container">
    <h2 class="section-title">Une journée qui s’adapte à votre réalité</h2>
    <p class="lede">Vous demandez-vous comment intégrer les études à un horaire déjà bien rempli? Découvrez comment cette formule peut s’adapter à votre quotidien.</p>

    <div class="day-row">
      <article class="day-card">
        <h4>Les études au rythme de la vie professionnelle</h4>
        <dl class="day-list">
          <dt>7 h 15 :</dt>
          <dd>Consacrez 15 minutes au visionnement d’une séance de cours enregistrée avant de commencer votre journée de travail.</dd>
          <dt>12 h 15 :</dt>
          <dd>Profitez de votre pause du midi pour terminer un questionnaire ou un court exercice.</dd>
          <dt>15 h :</dt>
          <dd>Prenez un café et participez aux heures de disponibilité virtuelles du corps professoral pour approfondir une notion plus complexe.</dd>
          <dt>Un soir par semaine :</dt>
          <dd>Réservez une période sans interruption pour vos lectures et vos travaux.</dd>
        </dl>
      </article>
      <div class="day-media">
        <img src="<?php echo esc_url( uottawa_page_image( 'img_home_day_1', uottawa_asset( 'img/3e1772b0e58a5483675ed988eb03ba7aea539c1f.jpg' ) ) ); ?>" alt="">
      </div>
    </div>

    <div class="day-row day-row--reverse">
      <article class="day-card">
        <h4>Un équilibre entre famille, travail et études</h4>
        <dl class="day-list">
          <dt>Le départ pour l’école :</dt>
          <dd>Consultez vos notes de cours sur votre appareil mobile dès que vous avez cinq minutes.</dd>
          <dt>L’heure de la sieste :</dt>
          <dd>Profitez de ce moment de la journée pour vous consacrer à une tâche qui demande davantage de temps et d’attention, comme une rencontre de groupe ou un rendez-vous planifié avec un membre du corps professoral.</dd>
          <dt>Après le coucher des enfants :</dt>
          <dd>Profitez de ce moment de calme pour avancer vos lectures et vos travaux.</dd>
        </dl>
      </article>
      <div class="day-media">
        <img src="<?php echo esc_url( uottawa_page_image( 'img_home_day_2', uottawa_asset( 'img/ec6f254c02d7b4af1e49d4a14a837ca24d7ebcbb.jpg' ) ) ); ?>" alt="">
      </div>
    </div>

    <div class="day-row">
      <!-- The button belongs to this left column, directly under the card —
           the photo beside it is taller and runs on past it. -->
      <div class="day-col">
        <article class="day-card">
          <h4>Le plaisir d’apprendre, à tout âge</h4>
          <dl class="day-list">
            <dt>Vendredi après-midi :</dt>
            <dd>Discutez de vos progrès avec votre conseiller·ère à la réussite étudiante.</dd>
            <dt>Samedi matin :</dt>
            <dd>Prenez le temps de parcourir le contenu de la semaine autour d’un café, à votre rythme.</dd>
            <dt>Dimanche après-midi :</dt>
            <dd>Réservez une plus longue période pour terminer un travail.</dd>
          </dl>
        </article>
        <a class="btn btn--red btn--pill day__cta" href="<?php echo esc_url( home_url( '/student-experience/' ) ); ?>">En savoir plus</a>
      </div>
      <div class="day-media">
        <img src="<?php echo esc_url( uottawa_page_image( 'img_home_day_3', uottawa_asset( 'img/37a62cab214313cb1ec754ace570845aadd6deb8.jpg' ) ) ); ?>" alt="">
      </div>
    </div>
  </div>
</section>

<!-- ============================================================ NEXT STEP -->
<section class="section next">
  <div class="container">
    <h2 class="section-title">Votre prochaine étape, avec un accompagnement personnalisé</h2>
    <p class="lede">Notre équipe vous accompagne à chaque étape de votre demande d’admission à un programme de l’Université d’Ottawa en ligne. Une personne-ressource à l’admission vous guide tout au long du processus, des documents requis à la reconnaissance possible de vos acquis, en tenant compte de votre parcours et de votre réalité.</p>

    <ol class="steps">
      <li>
        <h3>1. Discutez avec une personne-ressource à l’admission</h3>
        <p>Tout commence par une conversation. Votre personne-ressource prend le temps de connaître votre parcours, vos objectifs et l’échéancier que vous envisagez afin de déterminer si un programme de l’Université d’Ottawa en ligne répond à vos besoins et comment il peut s’intégrer à votre réalité.</p>
      </li>
      <li>
        <h3>2. Faites reconnaître votre expérience</h3>
        <p>Votre personne-ressource examine vos crédits d’études postsecondaires et votre expérience professionnelle afin de déterminer les acquis qui pourraient être reconnus dans le cadre de votre programme.</p>
      </li>
      <li>
        <h3>3. Soumettez votre demande d’admission</h3>
        <p>Votre personne-ressource vous accompagne dans la préparation des documents nécessaires et vous guide dans les différentes étapes de votre demande d’admission.</p>
      </li>
      <li>
        <h3>4. Recevez votre décision d’admission</h3>
        <p>Une fois votre offre d’admission reçue, notre équipe vous accompagne dans la préparation de votre première session, de l’inscription jusqu’à votre première connexion.</p>
      </li>
    </ol>

    <a class="btn btn--red btn--pill" href="<?php echo esc_url( uottawa_cta_url( 'apply' ) ); ?>"<?php echo uottawa_link_atts( uottawa_cta_url( 'apply' ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>>Commencer votre demande d’admission</a>
  </div>
</section>

<!-- ============================================================ FAQ -->
<section class="section faq">
  <div class="container">
    <h2 class="section-title">Foire aux questions</h2>

    <div class="faq-list">
      <div class="faq-item is-open">
        <button class="faq-item__q" type="button" aria-expanded="true">
          <span class="faq-item__marker">&#9660;</span>
          <span>Qu’est-ce qui distingue l’Université d’Ottawa en ligne des autres programmes en ligne?</span>
        </button>
        <div class="faq-item__a">
          <p>La réputation de l’établissement qui décerne votre diplôme constitue un avantage important. L’Université d’Ottawa compte près de deux siècles d’histoire et fait partie du U15, qui regroupe les principales universités de recherche du Canada.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-item__q" type="button" aria-expanded="false">
          <span class="faq-item__marker">&#9658;</span>
          <span>Dois-je quitter mon emploi pour étudier en ligne?</span>
        </button>
        <div class="faq-item__a"><p>Non. Les programmes de l’Université d’Ottawa en ligne sont conçus pour vous permettre de concilier études et vie professionnelle. Leur formule flexible et les différentes périodes d’admission offertes au cours de l’année vous permettent de choisir le moment qui convient le mieux à votre réalité.</p></div>
      </div>

      <div class="faq-item">
        <button class="faq-item__q" type="button" aria-expanded="false">
          <span class="faq-item__marker">&#9658;</span>
          <span>Les étudiants internationaux peuvent-ils faire une demande d’admission?</span>
        </button>
        <div class="faq-item__a"><p>Oui. Avant de présenter une demande, vous devez toutefois communiquer avec une personne-ressource à l’admission. Les études en ligne sont soumises à des exigences particulières en matière de visa et de permis de travail au Canada. De plus, l’inscription à un programme en ligne ne donne pas nécessairement droit à un permis d’études canadien ou à un permis de travail postdiplôme. Notre équipe peut vous renseigner sur les exigences qui s’appliquent à votre situation.</p></div>
      </div>

      <div class="faq-item">
        <button class="faq-item__q" type="button" aria-expanded="false">
          <span class="faq-item__marker">&#9658;</span>
          <span>Un diplôme obtenu à l’Université d’Ottawa en ligne est-il équivalent à un diplôme obtenu sur le campus?</span>
        </button>
        <div class="faq-item__a"><p>Oui. Vous obtenez un diplôme de l’Université d’Ottawa et bénéficiez d’un enseignement assuré par le même corps professoral, selon les mêmes normes universitaires. Votre diplôme ne fait aucune distinction entre les études suivies en ligne et celles suivies sur le campus.</p></div>
      </div>

      <div class="faq-item">
        <button class="faq-item__q" type="button" aria-expanded="false">
          <span class="faq-item__marker">&#9658;</span>
          <span>Quels programmes sont offerts par l’Université d’Ottawa en ligne?</span>
        </button>
        <div class="faq-item__a"><p>Les demandes d’admission sont maintenant ouvertes pour notre premier programme, le Baccalauréat ès arts en études interdisciplinaires (formule accélérée en ligne). L’offre de l’Université d’Ottawa en ligne s’élargira progressivement avec l’ajout de nouveaux programmes.</p></div>
      </div>

      <div class="faq-item">
        <button class="faq-item__q" type="button" aria-expanded="false">
          <span class="faq-item__marker">&#9658;</span>
          <span>Une présence sur le campus est-elle obligatoire?</span>
        </button>
        <div class="faq-item__a"><p>Non. Vous pouvez suivre votre programme entièrement à distance, sans avoir à vous rendre sur le campus.</p></div>
      </div>

      <div class="faq-item">
        <button class="faq-item__q" type="button" aria-expanded="false">
          <span class="faq-item__marker">&#9658;</span>
          <span>Comment se déroulent les études à l’Université d’Ottawa en ligne?</span>
        </button>
        <div class="faq-item__a"><p>Les études sont organisées par session et encadrées par le corps professoral. Tout au long de votre programme, vous échangez directement avec le personnel enseignant de l’Université d’Ottawa et avec une communauté étudiante aux parcours scolaires et professionnels variés.</p></div>
      </div>

      <div class="faq-item">
        <button class="faq-item__q" type="button" aria-expanded="false">
          <span class="faq-item__marker">&#9658;</span>
          <span>Mes crédits d’études collégiales ou universitaires peuvent-ils être reconnus?</span>
        </button>
        <div class="faq-item__a"><p>Souvent, oui. Les modalités varient selon le programme, mais les crédits et les acquis admissibles peuvent être reconnus dans votre parcours afin d’éviter de reprendre des cours ou des apprentissages déjà effectués.</p></div>
      </div>

      <div class="faq-item">
        <button class="faq-item__q" type="button" aria-expanded="false">
          <span class="faq-item__marker">&#9658;</span>
          <span>Une aide financière est-elle offerte?</span>
        </button>
        <div class="faq-item__a"><p>Les possibilités d’aide financière varient selon le programme et votre situation. Notre équipe peut vous renseigner sur les options offertes, ainsi que sur les droits de scolarité et les modalités de paiement, afin de vous aider à planifier le financement de vos études.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================ ARTICLES -->
<section class="section articles" id="articles">
  <div class="container">
    <h2 class="section-title">Articles en vedette</h2>

    <div class="articles-grid">
      <?php
      uottawa_article_cards(
        array(
          'count'  => 2,
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

<?php get_footer(); ?>
