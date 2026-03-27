<div class="container-fluid individual-homepage-contact-map-section" id="contact-details">
<?php
$contactMapEmbedSrc = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5699.341013142288!2d12.196659976562394!3d44.419406602538864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477df91d0e0333db%3A0x14bb96f746a53614!2sFigo%20Burger%20Pizza%20%26%20Sushi!5e0!3m2!1sit!2sit!4v1774603582267!5m2!1sit!2sit';
$footerEmail = appEnv('FOOTER_EMAIL', 'info@sottovoce-ristorante.example');
$footerPhoneDisplay = appEnv('FOOTER_PHONE', '+39 02 0000 0000');
$footerTelHref = preg_replace('/\s+/', '', $footerPhoneDisplay);
$showContactSectionTitle = $showContactSectionTitle ?? true;
$showContactTitleAfterMap = $showContactTitleAfterMap ?? false;
?>
  <div class="container individual-homepage-contact-map">
    <div class="row g-0 mt-0 mb-4 mb-lg-5 justify-content-center">
      <div class="col-12 sottovoce-contact-map">
        <div class="contact-map-wrap">
          <iframe
            title="<?= htmlspecialchars(label('contact.map_iframe_title', 'Mappa'), ENT_QUOTES) ?>"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            allowfullscreen=""
            src="<?= htmlspecialchars($contactMapEmbedSrc, ENT_QUOTES) ?>"
          ></iframe>
        </div>
      </div>
    </div>

    <?php if ($showContactTitleAfterMap): ?>
      <div class="row justify-content-center">
        <div class="col-12 text-center">
          <h2 class="display-2-48 mb-4"><?= htmlspecialchars(label('contact.title', 'Contatti'), ENT_QUOTES) ?></h2>
        </div>
      </div>
    <?php endif; ?>

    <div class="row justify-content-center">
      <div class="col-12 col-lg-8 col-xl-7 text-center">
        <div class="individual-homepage-contact-map-content-box sottovoce-contact-copy">
          <?php if ($showContactSectionTitle): ?>
            <h2 class="display-2-48 mb-4"><?= htmlspecialchars(label('contact.title', 'Contatti'), ENT_QUOTES) ?></h2>
          <?php endif; ?>
          <div class="contact-details">
            <p class="body-4 mb-3">
              <a class="bluelink secondary-medium" href="tel:<?= htmlspecialchars($footerTelHref, ENT_QUOTES) ?>">
                <span class="dir-ltr"><?= htmlspecialchars($footerPhoneDisplay, ENT_QUOTES) ?></span>
              </a>
            </p>
            <p class="body-4 mb-3">
              <a class="bluelink secondary-medium" href="mailto:<?= htmlspecialchars($footerEmail, ENT_QUOTES) ?>">
                <?= htmlspecialchars($footerEmail, ENT_QUOTES) ?>
              </a>
            </p>
            <p class="body-4 mb-0">
              <?= htmlspecialchars(trim(appEnv('FOOTER_ADDRESS_LINE1', 'Via Ponte Marino, 17') . ' - ' . appEnv('FOOTER_ADDRESS_LINE2', '48121 Ravenna RA')), ENT_QUOTES) ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<section id="faq" class="global-hotel-landing-faq-section sottovoce-faq">
  <div class="container px-3 py-5">
    <h2 class="mb-4 pb-1 display-2-48 font-56-mobile text-center sottovoce-faq-title"><?= htmlspecialchars(label('faq.title', 'Domande frequenti'), ENT_QUOTES) ?></h2>
    <div class="accordion accordionFaq" id="accordionFaq659105484">
      <div class="card">
        <div class="card-header" id="heading0">
          <button class="btn btn-block d-flex text-left body-2 justify-content-between align-items-center" type="button" data-toggle="collapse" data-target="#collapse6591054840" aria-expanded="true" aria-controls="collapse0">
            <h3 class="mb-0 body-2"><?= htmlspecialchars(label('faq.q1', 'Come posso prenotare da Sottovoce?'), ENT_QUOTES) ?></h3>
            <i class="fal fa-plus float-end plus-icon" aria-hidden="true"></i>
          </button>
        </div>

        <div id="collapse6591054840" class="collapse accordionFaq-card-content" aria-labelledby="heading0" data-parent="#accordionFaq659105484">
          <div class="card-body">
            <?= htmlspecialchars(label('faq.a1', 'Puoi prenotare tramite il pulsante Prenota, scriverci via email oppure contattarci telefonicamente.'), ENT_QUOTES) ?>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="heading1">
          <button class="btn btn-block d-flex text-left body-2 justify-content-between align-items-center" type="button" data-toggle="collapse" data-target="#collapse6591054841" aria-expanded="true" aria-controls="collapse1">
            <h3 class="mb-0 body-2"><?= htmlspecialchars(label('faq.q2', 'Quanto dura ogni prenotazione?'), ENT_QUOTES) ?></h3>
            <i class="fal fa-plus float-end plus-icon" aria-hidden="true"></i>
          </button>
        </div>

        <div id="collapse6591054841" class="collapse accordionFaq-card-content" aria-labelledby="heading1" data-parent="#accordionFaq659105484">
          <div class="card-body">
            <?= htmlspecialchars(label('faq.a2', 'Ogni tavolo segue turni da 50 minuti.'), ENT_QUOTES) ?>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="heading2">
          <button class="btn btn-block d-flex text-left body-2 justify-content-between align-items-center" type="button" data-toggle="collapse" data-target="#collapse6591054842" aria-expanded="true" aria-controls="collapse2">
            <h3 class="mb-0 body-2"><?= htmlspecialchars(label('faq.q3', "Quando apre Sottovoce?"), ENT_QUOTES) ?></h3>
            <i class="fal fa-plus float-end plus-icon" aria-hidden="true"></i>
          </button>
        </div>

        <div id="collapse6591054842" class="collapse accordionFaq-card-content" aria-labelledby="heading2" data-parent="#accordionFaq659105484">
          <div class="card-body">
            <?= htmlspecialchars(label('faq.a3', "L'attivita e pensata per il servizio serale e apre al tramonto."), ENT_QUOTES) ?>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="heading3">
          <button class="btn btn-block d-flex text-left body-2 justify-content-between align-items-center" type="button" data-toggle="collapse" data-target="#collapse6591054843" aria-expanded="true" aria-controls="collapse3">
            <h3 class="mb-0 body-2"><?= htmlspecialchars(label('faq.q4', 'Cosa succede se arrivo in ritardo?'), ENT_QUOTES) ?></h3>
            <i class="fal fa-plus float-end plus-icon" aria-hidden="true"></i>
          </button>
        </div>

        <div id="collapse6591054843" class="collapse accordionFaq-card-content" aria-labelledby="heading3" data-parent="#accordionFaq659105484">
          <div class="card-body">
            <?= htmlspecialchars(label('faq.a4', 'Ti consigliamo di arrivare con qualche minuto di anticipo.'), ENT_QUOTES) ?>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="heading4">
          <button class="btn btn-block d-flex text-left body-2 justify-content-between align-items-center" type="button" data-toggle="collapse" data-target="#collapse6591054844" aria-expanded="true" aria-controls="collapse4">
            <h3 class="mb-0 body-2"><?= htmlspecialchars(label('faq.q5', 'E possibile fermarsi oltre i 50 minuti?'), ENT_QUOTES) ?></h3>
            <i class="fal fa-plus float-end plus-icon" aria-hidden="true"></i>
          </button>
        </div>

        <div id="collapse6591054844" class="collapse accordionFaq-card-content" aria-labelledby="heading4" data-parent="#accordionFaq659105484">
          <div class="card-body">
            <?= htmlspecialchars(label('faq.a5', 'Quando possibile, valutiamo estensioni del tempo al tavolo.'), ENT_QUOTES) ?>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="heading5">
          <button class="btn btn-block d-flex text-left body-2 justify-content-between align-items-center" type="button" data-toggle="collapse" data-target="#collapse6591054845" aria-expanded="true" aria-controls="collapse5">
            <h3 class="mb-0 body-2"><?= htmlspecialchars(label('faq.q6', 'Avete opzioni per allergie o esigenze alimentari?'), ENT_QUOTES) ?></h3>
            <i class="fal fa-plus float-end plus-icon" aria-hidden="true"></i>
          </button>
        </div>

        <div id="collapse6591054845" class="collapse accordionFaq-card-content" aria-labelledby="heading5" data-parent="#accordionFaq659105484">
          <div class="card-body">
            <?= htmlspecialchars(label('faq.a6', 'Il nostro team e disponibile a supportarti con indicazioni su ingredienti e alternative.'), ENT_QUOTES) ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
