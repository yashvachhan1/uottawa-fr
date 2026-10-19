<?php
/* Template Name: Student experience */
get_header();
?>

<!-- ============================================================ HERO -->
<section class="page-hero page-hero--inner">
  <div class="page-hero__bg">
    <img src="<?php echo esc_url( uottawa_page_image( 'img_se_hero', uottawa_asset( 'img/007bc2f82e5e246d911896471b7b9f9f39c57034.jpg' ) ) ); ?>" alt="">
  </div>

  <div class="container">
    <div class="page-hero__card">
      <h1 class="page-hero__title">Votre expérience étudiante, en ligne</h1>
      <div class="page-hero__text">
        <p>L’Université d’Ottawa en ligne est conçue pour s’intégrer à une vie déjà bien remplie.</p>
        <p>Vous profitez de l’expertise du corps professoral, de l’accompagnement d’une équipe de conseiller·ère·s et des échanges avec la communauté étudiante, tout en suivant vos études selon un horaire qui tient compte de votre carrière, votre vie familiale et vos objectifs.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================ FACT STRIP -->
<section class="section facts-section">
  <div class="container">
    <ul class="facts">
      <li>100 % en ligne</li>
      <li>Un diplôme de l’Université d’Ottawa, reconnu pour sa qualité</li>
      <li>Un accompagnement personnalisé tout au long du parcours</li>
      <li>Plus de 300 000 diplômé·e·s à travers le monde</li>
      <li>Une université de recherche membre du U15</li>
      <li>Des programmes dirigés par le corps professoral</li>
    </ul>
  </div>
</section>

<!-- ============================================================ WHY STUDENTS CHOOSE -->
<section class="section reasons">
  <div class="container">
    <h2 class="section-title">Pourquoi choisir l’Université d’Ottawa en ligne?</h2>
    <p class="lede">Votre parcours à l’Université d’Ottawa en ligne vous permet de bénéficier d’un enseignement de qualité dans l’une des grandes universités de recherche du Canada afin d’atteindre vos objectifs professionnels.</p>

    <div class="reasons-icon-grid">
      <article class="reason-icon">
        <img class="reason-icon__img" src="<?php echo esc_url( uottawa_asset( 'icons/icon-research.svg' ) ); ?>" width="62" height="62" alt="">
        <h4>Une université de recherche membre du U15</h4>
        <p>L’Université d’Ottawa est membre du U15, qui réunit les principales universités de recherche du Canada.</p>
      </article>

      <article class="reason-icon">
        <img class="reason-icon__img" src="<?php echo esc_url( uottawa_asset( 'icons/icon-network.svg' ) ); ?>" width="61" height="61" alt="">
        <h4>Un réseau qui ouvre des portes</h4>
        <p>Située au cœur de la vie publique, citoyenne et politique du Canada, l’Université d’Ottawa offre un environnement unique qui enrichit votre formation et multiplie les occasions de créer des liens.</p>
      </article>

      <article class="reason-icon">
        <img class="reason-icon__img" src="<?php echo esc_url( uottawa_asset( 'icons/icon-teacher.svg' ) ); ?>" width="61" height="61" alt="">
        <h4>L’expertise de chaque faculté</h4>
        <p>Chaque programme reflète l’approche et la vision distinctives de sa faculté.</p>
      </article>

      <article class="reason-icon">
        <img class="reason-icon__img" src="<?php echo esc_url( uottawa_asset( 'icons/icon-excellence.svg' ) ); ?>" width="48" height="48" alt="">
        <h4>Un enseignement fondé sur des valeurs</h4>
        <p>L’excellence universitaire, l’intégrité, l’équité et la collaboration sont au cœur de chaque programme.</p>
      </article>

      <article class="reason-icon">
        <img class="reason-icon__img" src="<?php echo esc_url( uottawa_asset( 'icons/icon-connected.svg' ) ); ?>" width="58" height="58" alt="">
        <h4>Des échanges qui enrichissent votre parcours</h4>
        <p>Les forums de discussion, les travaux d’équipe et les activités interactives favorisent les échanges avec le corps professoral et la communauté étudiante.</p>
      </article>

      <article class="reason-icon">
        <img class="reason-icon__img" src="<?php echo esc_url( uottawa_asset( 'icons/icon-schedule.svg' ) ); ?>" width="58" height="58" alt="">
        <h4>Des études adaptées à votre horaire</h4>
        <p>Le contenu de vos cours est accessible en ligne dans une formule conçue pour s’intégrer à votre vie professionnelle et à votre quotidien.</p>
      </article>
    </div>

    <a class="btn btn--red btn--pill" href="<?php echo esc_url( uottawa_cta_url( 'request' ) ); ?>" style="margin-top:clamp(28px,2.4vw,46px)">Demander des renseignements</a>
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
        <img src="<?php echo esc_url( uottawa_page_image( 'img_se_day_1', uottawa_asset( 'img/3e1772b0e58a5483675ed988eb03ba7aea539c1f.jpg' ) ) ); ?>" alt="">
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
        <img src="<?php echo esc_url( uottawa_page_image( 'img_se_day_2', uottawa_asset( 'img/ec6f254c02d7b4af1e49d4a14a837ca24d7ebcbb.jpg' ) ) ); ?>" alt="">
      </div>
    </div>

    <div class="day-row">
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
      </div>
      <div class="day-media">
        <img src="<?php echo esc_url( uottawa_page_image( 'img_se_day_3', uottawa_asset( 'img/37a62cab214313cb1ec754ace570845aadd6deb8.jpg' ) ) ); ?>" alt="">
      </div>
    </div>
  </div>
</section>

<!-- ============================================================ WHAT MATTERS MOST -->
<section class="section matters-section">
  <div class="container">
    <h2 class="section-title">Les points à considérer pour la suite de votre parcours</h2>

    <div class="matters">
      <div>
        <h3>Votre temps</h3>
        <p>Chaque programme tient compte de votre formation antérieure et de votre expérience professionnelle afin que votre temps soit consacré à la suite de votre parcours. Sans déplacement sur le campus ni horaire de cours fixe, vous profitez d’une plus grande souplesse dans l’organisation de vos journées.</p>
      </div>
      <div>
        <h3>La valeur de votre investissement</h3>
        <p>La valeur d’un diplôme s’inscrit dans la durée et va bien au-delà des études. Forte de 175 ans d’histoire universitaire et d’un corps professoral reconnu mondialement pour ses travaux de recherche, l’Université d’Ottawa jouit d’une réputation bien établie dans le milieu professionnel, auprès des organismes de réglementation et des établissements offrant des programmes d’études supérieures.</p>
      </div>
      <div>
        <h3>La reconnaissance de votre parcours</h3>
        <p>Les acquis admissibles de votre formation antérieure sont reconnus dans votre cheminement vers un diplôme de l’Université d’Ottawa. La valeur de ce diplôme est largement reconnue dans les milieux professionnel et universitaire.</p>
      </div>
      <div>
        <h3>Une expérience d’apprentissage enrichissante</h3>
        <p>Les programmes de l’Université d’Ottawa en ligne sont enseignés par son corps professoral et répondent aux mêmes normes d’excellence que les programmes offerts sur le campus. Vous partagez votre parcours avec des personnes qui poursuivent leur carrière ou reprennent leurs études, et dont les expériences enrichissent les échanges.</p>
      </div>
      <div>
        <h3>Des études qui s’intègrent à votre quotidien</h3>
        <p>L’Université d’Ottawa en ligne tient compte des réalités qui façonnent votre quotidien : le travail, la famille et, souvent, la distance qui vous sépare d’Ottawa. Aucun déménagement n’est nécessaire et la formule vous offre la souplesse pour concilier vos études avec vos autres engagements. Votre parcours universitaire peut ainsi s’intégrer à votre réalité.</p>
      </div>
    </div>

    <a class="btn btn--red btn--pill" href="<?php echo esc_url( uottawa_cta_url( 'request' ) ); ?>" style="margin-top:clamp(28px,2.4vw,46px)">Demander des renseignements</a>
  </div>
</section>

<!-- ============================================================ WHAT YOU'LL GRADUATE WITH -->
<section class="section outcomes">
  <div class="container">
    <h2 class="section-title">Les avantages de votre diplôme</h2>

    <div class="outcomes-grid">
      <article class="outcome">
        <div class="outcome__media"><img src="<?php echo esc_url( uottawa_page_image( 'img_se_grad_main', uottawa_asset( 'img/1db0caf7dba8f8cfcd2ab1b78c55589d2203dad2.jpg' ) ) ); ?>" alt=""></div>
        <div class="outcome__body">
          <h4>Une reconnaissance au Canada et à l’international</h4>
          <p>Un diplôme de l’Université d’Ottawa reconnu au Canada comme à l’international et équivalent à celui obtenu sur le campus.</p>
        </div>
      </article>

      <article class="outcome">
        <div class="outcome__media"><img src="<?php echo esc_url( uottawa_page_image( 'img_se_grad_1', uottawa_asset( 'img/9755731fb6ea8b22a9d25e00c68d1d505c1bfdbb.jpg' ) ) ); ?>" alt=""></div>
        <div class="outcome__body">
          <h4>Une carrière sans interruption</h4>
          <p>Un diplôme obtenu tout en poursuivant votre carrière vous permet de conjuguer formation universitaire et expérience professionnelle, deux atouts recherchés sur le marché du travail.</p>
        </div>
      </article>

      <article class="outcome">
        <div class="outcome__media"><img src="<?php echo esc_url( uottawa_page_image( 'img_se_grad_2', uottawa_asset( 'img/07662f640130e427d17ab41521cec900d86b8ee3.jpg' ) ) ); ?>" alt=""></div>
        <div class="outcome__body">
          <h4>Une ouverture sur l’avenir</h4>
          <p>Votre diplôme vous permet d’accéder à des études supérieures, à des certifications professionnelles et à des parcours qui vont au-delà des possibilités offertes par votre formation antérieure.</p>
        </div>
      </article>

      <article class="outcome">
        <div class="outcome__media"><img src="<?php echo esc_url( uottawa_page_image( 'img_se_grad_3', uottawa_asset( 'img/3e1772b0e58a5483675ed988eb03ba7aea539c1f.jpg' ) ) ); ?>" alt=""></div>
        <div class="outcome__body">
          <h4>Un réseau international</h4>
          <p>Vous rejoignez une communauté de plus de 280 000 diplômé·e·s de l’Université d’Ottawa au Canada et partout dans le monde.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- ============================================================ A TEAM IN YOUR CORNER -->
<section class="section support">
  <div class="container">
    <h2 class="section-title">Un accompagnement à chaque étape</h2>
    <p class="lede">Votre conseiller·ère à la réussite étudiante vous accompagne tout au long de votre parcours et vous offre un soutien personnalisé pour favoriser votre réussite, tant dans vos études que dans les autres aspects de votre parcours.</p>

    <ul class="support-grid">
      <li>
        <h3>Conseils pédagogiques</h3>
        <p>Une orientation personnalisée en fonction de vos objectifs professionnels.</p>
      </li>
      <li>
        <h3>Conseils financiers</h3>
        <p>Des renseignements pour vous aider à planifier les coûts liés à votre programme.</p>
      </li>
      <li>
        <h3>Soutien à la réussite étudiante</h3>
        <p>Des ressources pour vous aider à progresser et à réussir tout au long de votre parcours.</p>
      </li>
    </ul>
  </div>
</section>

<!-- ============================================================ PROGRAMS -->
<section class="section programs" id="programs">
  <div class="container">
    <h2 class="section-title">Trouvez le programme adapté à vos objectifs</h2>

    <article class="program-card">
      <h4>Baccalauréat ès arts en études interdisciplinaires (mode accéléré en ligne)</h4>
      <p>Ce programme s’adresse aux titulaires d’un diplôme d’études collégiales qui comptent au moins trois années d’expérience professionnelle et souhaitent s’appuyer sur leurs acquis pour obtenir un diplôme de l’Université d’Ottawa. Votre formation collégiale est reconnue grâce au transfert de crédits, et votre cheminement universitaire est conçu pour s’adapter à votre vie professionnelle.</p>
      <a class="btn btn--red btn--program" href="<?php echo esc_url( home_url( '/' . uottawa_program_slug() . '/' ) ); ?>">Découvrir le programme</a>
    </article>
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
          <span>Comment se déroulent les études à l’Université d’Ottawa en ligne?</span>
        </button>
        <div class="faq-item__a">
          <p>Les études offrent une formule souple et structurée qui favorise les échanges. Vous accédez au contenu de vos cours à distance, échangez avec le corps professoral et la communauté étudiante, et approfondissez vos apprentissages au moyen de travaux, de discussions et de projets pratiques.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-item__q" type="button" aria-expanded="false">
          <span class="faq-item__marker">&#9658;</span>
          <span>Les programmes de l’Université d’Ottawa en ligne sont-ils entièrement offerts à distance?</span>
        </button>
        <div class="faq-item__a"><p>Oui. Vous pouvez suivre votre programme entièrement à distance et étudier où que vous soyez.</p></div>
      </div>

      <div class="faq-item">
        <button class="faq-item__q" type="button" aria-expanded="false">
          <span class="faq-item__marker">&#9658;</span>
          <span>Quel soutien est offert aux personnes qui étudient en ligne?</span>
        </button>
        <div class="faq-item__a"><p>Vous bénéficiez du soutien du corps professoral et de l’équipe responsable de la réussite étudiante, ainsi que de ressources universitaires qui vous accompagnent tout au long de votre parcours.</p></div>
      </div>

      <div class="faq-item">
        <button class="faq-item__q" type="button" aria-expanded="false">
          <span class="faq-item__marker">&#9658;</span>
          <span>Est-il possible de continuer à travailler pendant mes études en ligne?</span>
        </button>
        <div class="faq-item__a"><p>Oui. Les programmes de l’Université d’Ottawa en ligne sont conçus pour tenir compte de la réalité professionnelle des adultes, afin que vous puissiez poursuivre votre carrière tout en obtenant votre diplôme.</p></div>
      </div>

      <div class="faq-item">
        <button class="faq-item__q" type="button" aria-expanded="false">
          <span class="faq-item__marker">&#9658;</span>
          <span>Les cours sont-ils offerts en mode synchrone ou asynchrone?</span>
        </button>
        <div class="faq-item__a"><p>Les modalités varient selon le programme. De nombreux cours de l’Université d’Ottawa en ligne sont offerts en mode asynchrone, ce qui vous permet de réaliser vos activités au moment qui vous convient. Certaines activités, comme les travaux de groupe ou les séances en direct, peuvent toutefois se dérouler en mode synchrone, à des heures précises. Consultez la page de votre programme pour connaître les modalités qui s’appliquent.</p></div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
