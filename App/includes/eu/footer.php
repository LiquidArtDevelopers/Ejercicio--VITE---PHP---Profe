<?php
// Euskarazko footerra. Egiaztatutako jarduera eta estaldura-datuak bakarrik ditu.
?>
<footer class="footer01">
  <div class="footer01__inner">
    <section class="footer01__column" aria-labelledby="footer01-menu-title-eu">
      <h2 class="footer01__title" id="footer01-menu-title-eu">Nabigazioa</h2>
      <?php
      $idSubmenu = 'footer-zerbitzuak-eu';
      require app_path('includes/eu/enlaces.php');
      ?>
    </section>

    <section class="footer01__column" aria-labelledby="footer01-legal-title-eu">
      <h2 class="footer01__title" id="footer01-legal-title-eu">Lege-informazioa</h2>
      <ul class="footer01__list">
        <li><a class="footer01__link" href="<?= url('/eu/lege-oharra#aviso-legal') ?>" title="Lege-oharra irakurri">Lege-oharra</a></li>
        <li><a class="footer01__link" href="<?= url('/eu/lege-oharra#politica-privacidad') ?>" title="Pribatutasun-politika irakurri">Pribatutasun-politika</a></li>
        <li><a class="footer01__link" href="<?= url('/eu/lege-oharra#gestion-cookies') ?>" title="Cookieei buruzko informazioa kontsultatu">Cookieen kudeaketa</a></li>
      </ul>
    </section>

    <section class="footer01__column" aria-labelledby="footer01-contact-title-eu">
      <h2 class="footer01__title" id="footer01-contact-title-eu">Kontaktua eta lan-eremua</h2>
      <div class="footer01__address">
        <p class="footer01__text">
          <img class="footer01__icon" src="<?= asset('assets/img/icons/pin.svg') ?>" alt="" title="" aria-hidden="true">
          <span>Usurbil, Donostialdea eta inguruko herriak</span>
        </p>
        <a class="footer01__link" href="<?= url('/eu/kontaktua') ?>" title="Pintura edo zaharberritze aurrekontua eskatu">
          <img class="footer01__icon" src="<?= asset('assets/img/icons/mail.svg') ?>" alt="" title="" aria-hidden="true">
          <span>Aurrekontua eskatu</span>
        </a>
      </div>
    </section>
  </div>

  <div class="footer01__bottom">
    <p>Patxi · Pintura eta altzarien zaharberritzea. &copy; <?= date('Y') ?> Eskubide guztiak erreserbatuta.</p>
  </div>
</footer>
