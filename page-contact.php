<?php
/* Template Name: Contact */
get_header();
?>

<!-- ============================================================ CONNECT WITH OUR TEAM -->
<section class="section contact">
  <div class="container">

    <div class="contact-row">
      <div>
        <h1 class="section-title">Communiquez avec notre équipe</h1>

        <div class="contact-points">
          <div>
            <h3>Posez vos questions</h3>
            <p>Obtenez des réponses à vos questions sur nos programmes, l’expérience étudiante et les perspectives après l’obtention d’un diplôme.</p>
          </div>
          <div>
            <h3>Découvrez la valeur de votre parcours</h3>
            <p>Découvrez comment vos crédits d’études postsecondaires peuvent être reconnus dans votre cheminement vers l’obtention de votre diplôme.</p>
          </div>
          <div>
            <h3>Renseignez-vous sur l’admission</h3>
            <p>Apprenez-en plus sur les conditions d’admission, les dates limites pour présenter une demande et les prochaines étapes.</p>
          </div>
        </div>

        <div class="contact-aside">
          <h2 class="section-title">Questions générales</h2>
          <p class="contact-lead">Notre équipe vous accompagne dans vos démarches en répondant à vos questions et en vous orientant vers les ressources appropriées.</p>

          <div class="contact-links">
            <span class="contact-link">
              <img src="<?php echo esc_url( uottawa_asset( 'icons/icon-email.svg' ) ); ?>" width="73" height="73" alt="">
              <a href="mailto:admissions@online.uottawa.ca">admissions@online.uottawa.ca</a>
            </span>
            <span class="contact-link contact-link--sm">
              <img src="<?php echo esc_url( uottawa_asset( 'icons/icon-phone.svg' ) ); ?>" width="41" height="41" alt="">
              <a href="tel:+16133177079">+1 (613) 317-7079</a>
            </span>
          </div>
        </div>
      </div>

      <!-- Enquiry form -->
      <?php $uottawa_form = uottawa_page_form_shortcode(); ?>
      <?php if ( $uottawa_form ) : ?>
      <div class="enquiry forminator-card-wrapper">
        <p class="enquiry__title">Franchissez une nouvelle étape vers l’obtention de votre diplôme</p>
        <?php echo do_shortcode( $uottawa_form ); ?>
        <p class="enquiry__note">En soumettant ce formulaire, vous acceptez que l’Université d’Ottawa en ligne ou ses représentant·e·s communiquent avec vous au sujet de ce programme.</p>
      </div>
      <?php else : ?>
      <form class="enquiry" action="#" method="post">
        <p class="enquiry__title">Franchissez une nouvelle étape vers l’obtention de votre diplôme</p>

        <div class="enquiry__grid">
          <div class="enquiry__field">
            <label for="first-name">Prénom</label>
            <input type="text" id="first-name" name="first-name" autocomplete="given-name" required>
          </div>

          <div class="enquiry__field">
            <label for="last-name">Nom de famille</label>
            <input type="text" id="last-name" name="last-name" autocomplete="family-name" required>
          </div>

          <div class="enquiry__field">
            <label for="email">Courriel</label>
            <input type="email" id="email" name="email" autocomplete="email" required>
          </div>

          <div class="enquiry__field">
            <label for="phone">Téléphone</label>
            <input type="tel" id="phone" name="phone" autocomplete="tel">
          </div>

          <div class="enquiry__field enquiry__field--wide">
            <label for="province">Province</label>
            <select id="province" name="province">
              <option value="">Choisir une province</option>
              <option>Alberta</option>
              <option>Colombie-Britannique</option>
              <option>Manitoba</option>
              <option>Nouveau-Brunswick</option>
              <option>Terre-Neuve-et-Labrador</option>
              <option>Territoires du Nord-Ouest</option>
              <option>Nouvelle-Écosse</option>
              <option>Nunavut</option>
              <option>Ontario</option>
              <option>Île-du-Prince-Édouard</option>
              <option>Québec</option>
              <option>Saskatchewan</option>
              <option>Yukon</option>
              <option>À l’extérieur du Canada</option>
            </select>
          </div>

          <div class="enquiry__field enquiry__field--wide">
            <label for="credential">Diplôme d’études collégiales</label>
            <select id="credential" name="credential">
              <option value="">Choisir un diplôme</option>
              <option>Diplôme en deux ans</option>
              <option>Diplôme en trois ans</option>
              <option>Certificat</option>
              <option>Baccalauréat</option>
              <option>Autre</option>
            </select>
          </div>

          <div class="enquiry__field enquiry__field--wide">
            <label for="start">Rentrée prévue</label>
            <select id="start" name="start">
              <option value="">Choisir une session</option>
              <option>Septembre 2027 (Automne)</option>
              <option>Janvier 2027 (Hiver)</option>
              <option>Mai 2027 (Printemps)</option>
            </select>
          </div>
        </div>

        <button class="btn enquiry__submit" type="submit">Soumettre</button>

        <p class="enquiry__note">En soumettant ce formulaire, vous acceptez que l’Université d’Ottawa en ligne ou ses représentant·e·s communiquent avec vous au sujet de ce programme.</p>
      </form>
      <?php endif; ?>
    </div>

    <div class="contact-row">
      <div>
        <h2 class="section-title">Vous souhaitez présenter une demande?</h2>
        <p class="contact-lead">Utilisez le lien ci-dessous pour commencer votre demande.</p>

        <div class="contact-links">
          <span class="contact-link contact-link--check">
            <img src="<?php echo esc_url( uottawa_asset( 'icons/icon-check.svg' ) ); ?>" width="53" height="53" alt="">
            <a href="<?php echo esc_url( uottawa_cta_url( 'apply' ) ); ?>"<?php echo uottawa_link_atts( uottawa_cta_url( 'apply' ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>>Présenter ma demande</a>
          </span>
        </div>
      </div>
    </div>

  </div>
</section>

<?php get_footer(); ?>
