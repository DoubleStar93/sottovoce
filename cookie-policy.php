<?php
declare(strict_types=1);
require_once __DIR__ . '/config.php';

$locale = appCurrentLocale();
?>
<!doctype html>
<html lang="<?= htmlspecialchars($locale, ENT_QUOTES) ?>">
<?php include __DIR__ . '/pages/_partials/head.php'; ?>
<body class="page-template page-template-default page sottovoce-luxury">
<div id="page" class="site">
<?php include __DIR__ . '/pages/_partials/header.php'; ?>
<main class="site-main">
  <section class="sottovoce-legal-page">
    <div class="container">
      <h2 class="display-1-72 font-48-mobile mb-4"><?= htmlspecialchars(label('cookies.title', 'Informativa Cookie'), ENT_QUOTES) ?></h2>
      <p class="body-2">
        <?= htmlspecialchars(label('cookies.intro', 'Questa informativa spiega quali cookie e tecnologie simili sono utilizzati su questo sito, per quali finalita e come puoi gestire le tue preferenze di consenso.'), ENT_QUOTES) ?>
      </p>

      <h3 class="mt-4 mb-2"><?= htmlspecialchars(label('cookies.section1.title', '1) Cosa sono i cookie'), ENT_QUOTES) ?></h3>
      <p class="body-2">
        <?= htmlspecialchars(label('cookies.section1.body', 'I cookie sono piccoli file di testo memorizzati sul tuo dispositivo durante la navigazione. Possono essere di prima parte (impostati da questo sito) o di terze parti (impostati da fornitori esterni).'), ENT_QUOTES) ?>
      </p>

      <h3 class="mt-4 mb-2"><?= htmlspecialchars(label('cookies.section2.title', '2) Categorie di cookie utilizzate'), ENT_QUOTES) ?></h3>
      <p class="body-2">
        <strong><?= htmlspecialchars(label('cookies.section2.necessary_title', 'Cookie tecnici/necessari:'), ENT_QUOTES) ?></strong>
        <?= htmlspecialchars(label('cookies.section2.necessary_body', ' necessari al funzionamento base del sito (navigazione, sicurezza, gestione lingua/sessione, supporto al flusso di prenotazione). Non richiedono consenso preventivo.'), ENT_QUOTES) ?>
      </p>
      <p class="body-2">
        <strong><?= htmlspecialchars(label('cookies.section2.analytics_title', 'Cookie analitici (opzionali):'), ENT_QUOTES) ?></strong>
        <?= htmlspecialchars(label('cookies.section2.analytics_body', ' aiutano a comprendere l\'uso aggregato del sito e a migliorare i servizi. Sono attivati solo dopo consenso, ove richiesto.'), ENT_QUOTES) ?>
      </p>
      <p class="body-2">
        <strong><?= htmlspecialchars(label('cookies.section2.marketing_title', 'Cookie marketing/profilazione (opzionali):'), ENT_QUOTES) ?></strong>
        <?= htmlspecialchars(label('cookies.section2.marketing_body', ' possono essere usati da fornitori terzi per personalizzare contenuti o pubblicita. Restano disattivati di default fino a consenso esplicito.'), ENT_QUOTES) ?>
      </p>

      <h3 class="mt-4 mb-2"><?= htmlspecialchars(label('cookies.section3.title', '3) Base giuridica e gestione del consenso'), ENT_QUOTES) ?></h3>
      <p class="body-2">
        <?= htmlspecialchars(label('cookies.section3.body', 'I cookie necessari si basano sul legittimo interesse/necessita tecnica di erogare il servizio. I cookie opzionali si basano sul consenso secondo GDPR e normativa ePrivacy. Tramite il banner cookie puoi accettare tutti, rifiutare gli opzionali o scegliere preferenze granulari.'), ENT_QUOTES) ?>
      </p>

      <h3 class="mt-4 mb-2"><?= htmlspecialchars(label('cookies.section4.title', '4) Modifica preferenze e revoca'), ENT_QUOTES) ?></h3>
      <p class="body-2">
        <?= htmlspecialchars(label('cookies.section4.body', 'Puoi aggiornare le tue scelte in qualunque momento tramite il link "Gestisci cookie" nel footer. La revoca del consenso non pregiudica la liceita dei trattamenti effettuati prima della revoca.'), ENT_QUOTES) ?>
      </p>

      <h3 class="mt-4 mb-2"><?= htmlspecialchars(label('cookies.section5.title', '5) Gestione tramite browser'), ENT_QUOTES) ?></h3>
      <p class="body-2">
        <?= htmlspecialchars(label('cookies.section5.body', 'La maggior parte dei browser consente di bloccare o cancellare i cookie dalle impostazioni. La disattivazione dei cookie tecnici puo influire sulla disponibilita del sito e sulle funzionalita legate alla prenotazione.'), ENT_QUOTES) ?>
      </p>

      <h3 class="mt-4 mb-2"><?= htmlspecialchars(label('cookies.section6.title', '6) Conservazione e terze parti'), ENT_QUOTES) ?></h3>
      <p class="body-2">
        <?= htmlspecialchars(label('cookies.section6.body', 'La durata dei cookie puo variare (cookie di sessione o persistenti con scadenza definita). I cookie di terze parti sono disciplinati dalle policy dei rispettivi fornitori. Eventuali trasferimenti internazionali avvengono con garanzie previste dal GDPR.'), ENT_QUOTES) ?>
      </p>

      <h3 class="mt-4 mb-2"><?= htmlspecialchars(label('cookies.section7.title', '7) Contatti'), ENT_QUOTES) ?></h3>
      <p class="body-2">
        <?= htmlspecialchars(label('cookies.section7.body', 'Per dettagli sul trattamento dei dati personali e sui diritti esercitabili, consulta anche la Privacy Policy o contattaci tramite i recapiti presenti nel footer.'), ENT_QUOTES) ?>
      </p>
    </div>
  </section>
</main>
<?php include __DIR__ . '/pages/_partials/footer.php'; ?>
</div>
<?php include __DIR__ . '/pages/_partials/foot.php'; ?>
</body>
</html>
