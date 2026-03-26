<?php declare(strict_types=1); ?>
<!doctype html>
<html lang="it">
<?php include __DIR__ . '/pages/_partials/head.php'; ?>
<body class="page-template page-template-default page page-id-4490">
<div id="page" class="site">
<?php include __DIR__ . '/pages/_partials/header.php'; ?>
<main class="site-main">
  <section class="page-hero" style="min-height:62vh;display:flex;align-items:flex-end;background-image:linear-gradient(180deg,rgba(0,0,0,.55),rgba(0,0,0,.45)),url('/dependencies/img/wp-content/uploads/2026/01/ASV-Infinity-Pool-5-1-e1736344266192.jpg');background-size:cover;background-position:center;">
    <div class="container pb-5">
      <h1 class="display-1-72 text-white mb-2">Contattaci</h1>
      <p class="body-2 text-white mb-0">Prenotazioni, eventi privati e richieste speciali.</p>
    </div>
  </section>
  <section class="subtitle-title-desc pt-5">
    <div class="container text-center">
      <h2 class="display-1-72 font-48-mobile mt-4 text-uppercase title-pink">Contattaci</h2>
      <p class="body-2 description--text">Prenotazioni e richieste speciali: +39 06 1234 5678 - prenotazioni@sottovoce.it.</p>
    </div>
  </section>
  <div class="container individual-homepage-featured-offer">
    <div class="row g-0 align-items-center text-center justify-content-between">
      <div class="col-12 col-lg-6 inline-left show-on-scroll">
        <div class="content-box">
          <h5 class="eyebrow-text">Orari</h5>
          <h2 class="offers-section-item-heading text-center display-1-72 font-56-mobile">Siamo Aperti Tutti I Giorni</h2>
          <p class="body-2 mb-0 mb-lg-5">Pranzo 12:30 - 15:00. Cena 19:00 - 23:30. Indirizzo: Via del Gusto 14, Roma.</p>
        </div>
      </div>
      <div class="col-12 col-lg-6 p-0 inline-right show-on-scroll image-zoom-animation img-shadow">
        <div class="img-box img-shadow image-zoom-animation">
          <img width="1024" height="535" decoding="async" src="/dependencies/img/wp-content/uploads/2026/01/ASV-Infinity-Pool-5-1-e1736344266192.jpg" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
  <section style="padding:40px 0;background:#ffffff;">
    <div class="container" style="color:#25282d;">
      <h3 style="margin-bottom:12px;">Esempio contatti</h3>
      <div class="row g-3">
        <div class="col-12 col-md-4"><div style="border:1px solid #d9d9d9;padding:16px;">Telefono: +39 06 1234 5678</div></div>
        <div class="col-12 col-md-4"><div style="border:1px solid #d9d9d9;padding:16px;">Email: prenotazioni@sottovoce.it</div></div>
        <div class="col-12 col-md-4"><div style="border:1px solid #d9d9d9;padding:16px;">Indirizzo: Via del Gusto 14, Roma</div></div>
      </div>
    </div>
  </section>
  <section style="padding:40px 0;background:#f7f8f6;">
    <div class="container">
      <div style="background:#fff;border:1px solid #ddd;padding:24px;">
        <h3 style="margin-top:0;margin-bottom:12px;color:#25282d;">Modulo contatti</h3>
        <p class="body-2" style="color:#25282d;">Richiedi informazioni su prenotazioni, eventi privati o menu personalizzati.</p>
        <form class="row g-3">
          <div class="col-12 col-md-6">
            <label for="nome" style="display:block;margin-bottom:6px;color:#25282d;">Nome</label>
            <input id="nome" type="text" style="width:100%;padding:10px;border:1px solid #cfcfcf;" placeholder="Mario Rossi">
          </div>
          <div class="col-12 col-md-6">
            <label for="email" style="display:block;margin-bottom:6px;color:#25282d;">Email</label>
            <input id="email" type="email" style="width:100%;padding:10px;border:1px solid #cfcfcf;" placeholder="nome@email.it">
          </div>
          <div class="col-12">
            <label for="messaggio" style="display:block;margin-bottom:6px;color:#25282d;">Messaggio</label>
            <textarea id="messaggio" rows="4" style="width:100%;padding:10px;border:1px solid #cfcfcf;" placeholder="Scrivi qui la tua richiesta"></textarea>
          </div>
          <div class="col-12">
            <button type="button" class="btn primary-btn">Invia richiesta</button>
          </div>
        </form>
      </div>
    </div>
  </section>

  <?php include __DIR__ . '/pages/_partials/home-faq.php'; ?>
</main>
<?php include __DIR__ . '/pages/_partials/footer.php'; ?>
</div>
<?php include __DIR__ . '/pages/_partials/foot.php'; ?>
</body>
</html>
