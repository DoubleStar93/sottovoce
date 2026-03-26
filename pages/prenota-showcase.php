<?php
declare(strict_types=1);
require_once __DIR__ . '/../config.php';
$mobeePageUrl = appEnv('MOBEE_PAGE_URL', '#');
?>
<!doctype html>
<html lang="it">
<?php include __DIR__ . '/_partials/head.php'; ?>
<body class="page-template page-template-default page page-id-3739">
<div id="page" class="site">
<?php include __DIR__ . '/_partials/header.php'; ?>

<main class="site-main" style="background:#f7f8f6;min-height:100vh;">
  <section style="padding:140px 20px 80px;">
    <div class="container" style="max-width:1200px;">
      <p class="eyebrow-dark text-uppercase text-center mb-2">Button Showcase</p>
      <h1 class="display-1-72 text-center mb-3">Varianti Pulsante Prenota</h1>
      <p class="body-2 text-center mb-5" style="max-width:760px;margin:0 auto;">
        Selezione di stili luxury, allineati al visual attuale. Ogni bottone apre la pagina di prenotazione in nuova tab.
      </p>

      <style>
        .book-grid { display:grid; grid-template-columns:repeat(auto-fit,minmax(300px,1fr)); gap:24px; }
        .book-card { background:#fff; border:1px solid rgba(37,40,45,.12); padding:28px; box-shadow:0 16px 30px -24px rgba(37,40,45,.28); }
        .book-card h3 { margin:0 0 8px; font-size:24px; line-height:1.2; color:#25282d; }
        .book-card p { margin:0 0 18px; color:#62676d; font-size:15px; line-height:1.5; min-height:48px; }
        .book-btn { display:inline-flex; align-items:center; justify-content:center; min-height:54px; padding:0 28px; text-decoration:none !important; letter-spacing:.4px; font-size:17px; }
        .book-btn:focus { outline:2px solid #25282d; outline-offset:2px; }
        .book-btn:hover,
        .book-btn:focus,
        .book-btn:active,
        .book-btn:visited { text-decoration:none !important; }

        .book-btn--classic { background:#25282d; color:#fff; border:1px solid #25282d; }
        .book-btn--classic:hover { background:#1b1d21; color:#fff; }

        .book-btn--outline { background:transparent; color:#25282d; border:1px solid #25282d; }
        .book-btn--outline:hover { background:#25282d; color:#fff; }

        .book-btn--gold { background:linear-gradient(135deg,#b8945c,#d9be8a); color:#1f1d19; border:1px solid #b8945c; }
        .book-btn--gold { border-radius:8px; }
        .book-btn--gold:hover { filter:brightness(.96); color:#1f1d19; text-decoration:none; }

        .book-btn--minimal { background:#fff; color:#25282d; border:0; border-bottom:2px solid #25282d; padding:0 6px; min-height:40px; }
        .book-btn--minimal:hover { color:#000; border-bottom-color:#000; }

        .book-btn--pill { background:#25282d; color:#fff; border:1px solid #25282d; border-radius:999px; padding:0 34px; }
        .book-btn--pill:hover { background:#111; color:#fff; }

        .book-btn--glass { background:rgba(37,40,45,.06); color:#25282d; border:1px solid rgba(37,40,45,.2); backdrop-filter:blur(2px); }
        .book-btn--glass:hover { background:rgba(37,40,45,.12); color:#25282d; }
      </style>

      <div class="book-grid">
        <article class="book-card">
          <h3>Classic Black</h3>
          <p>Solido, elegante, in linea con la UI attuale.</p>
          <a class="book-btn book-btn--classic" href="<?= htmlspecialchars($mobeePageUrl, ENT_QUOTES) ?>" target="_blank" rel="noopener noreferrer">Prenota</a>
        </article>

        <article class="book-card">
          <h3>Outline Luxury</h3>
          <p>Look pulito con inversione su hover.</p>
          <a class="book-btn book-btn--outline" href="<?= htmlspecialchars($mobeePageUrl, ENT_QUOTES) ?>" target="_blank" rel="noopener noreferrer">Prenota</a>
        </article>

        <article class="book-card">
          <h3>Champagne Gold</h3>
          <p>Tocco premium per CTA ad alta priorita.</p>
          <a class="book-btn book-btn--gold" href="<?= htmlspecialchars($mobeePageUrl, ENT_QUOTES) ?>" target="_blank" rel="noopener noreferrer">Prenota</a>
        </article>

        <article class="book-card">
          <h3>Minimal Editorial</h3>
          <p>Molto raffinato, ideale per hero pulite.</p>
          <a class="book-btn book-btn--minimal" href="<?= htmlspecialchars($mobeePageUrl, ENT_QUOTES) ?>" target="_blank" rel="noopener noreferrer">Prenota</a>
        </article>

        <article class="book-card">
          <h3>Soft Pill</h3>
          <p>Contemporaneo, morbido ma autorevole.</p>
          <a class="book-btn book-btn--pill" href="<?= htmlspecialchars($mobeePageUrl, ENT_QUOTES) ?>" target="_blank" rel="noopener noreferrer">Prenota</a>
        </article>

        <article class="book-card">
          <h3>Glass Subtle</h3>
          <p>Elegante e moderno, senza effetto 3D.</p>
          <a class="book-btn book-btn--glass" href="<?= htmlspecialchars($mobeePageUrl, ENT_QUOTES) ?>" target="_blank" rel="noopener noreferrer">Prenota</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php include __DIR__ . '/_partials/footer.php'; ?>
</div>
<?php include __DIR__ . '/_partials/foot.php'; ?>
</body>
</html>
