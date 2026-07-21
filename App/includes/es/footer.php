<?php
// Footer en castellano. Solo contiene datos de actividad y cobertura confirmados.
?>
<footer class="footer01">
  <div class="footer01__inner">
    <section class="footer01__column" aria-labelledby="footer01-menu-title-es">
      <h2 class="footer01__title" id="footer01-menu-title-es">Navegación</h2>
      <?php
      $idSubmenu = 'footer-servicios-es';
      require app_path('includes/es/enlaces.php');
      ?>
    </section>

    <section class="footer01__column" aria-labelledby="footer01-legal-title-es">
      <h2 class="footer01__title" id="footer01-legal-title-es">Información legal</h2>
      <ul class="footer01__list">
        <li><a class="footer01__link" href="/es/legal#aviso-legal" title="Leer el aviso legal">Aviso legal</a></li>
        <li><a class="footer01__link" href="/es/legal#politica-privacidad" title="Leer la política de privacidad">Política de privacidad</a></li>
        <li><a class="footer01__link" href="/es/legal#gestion-cookies" title="Consultar la información sobre cookies">Gestión de cookies</a></li>
      </ul>
    </section>

    <section class="footer01__column" aria-labelledby="footer01-contact-title-es">
      <h2 class="footer01__title" id="footer01-contact-title-es">Contacto y zona de trabajo</h2>
      <div class="footer01__address">
        <p class="footer01__text">
          <img class="footer01__icon" src="<?= asset('assets/img/icons/pin.svg') ?>" alt="" title="" aria-hidden="true">
          <span>Usurbil, Donostialdea y localidades próximas</span>
        </p>
        <a class="footer01__link" href="/es/contacto" title="Pedir un presupuesto de pintura o restauración">
          <img class="footer01__icon" src="<?= asset('assets/img/icons/mail.svg') ?>" alt="" title="" aria-hidden="true">
          <span>Pedir presupuesto</span>
        </a>
      </div>
    </section>
  </div>

  <div class="footer01__bottom">
    <p>Patxi · Pintura y restauración de muebles. &copy; <?= date('Y') ?> Todos los derechos reservados.</p>
  </div>
</footer>
