<?php
// Listado compartido por el nav y el footer en castellano.
// Cada href coincide con una ruta definida en App/config/config.php.
?>
<ul class="enlaces01">
  <li class="enlaces01__item">
    <a class="enlaces01__link" href="/es" title="Ir al inicio de Patxi">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/home.svg') ?>" alt="" title="" aria-hidden="true">
      <span>Inicio</span>
    </a>
  </li>

  <li class="enlaces01__item">
    <a class="enlaces01__link" href="/es/contacto" title="Contactar con Patxi y pedir presupuesto">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/email.svg') ?>" alt="" title="" aria-hidden="true">
      <span>Contacto</span>
    </a>
  </li>

  <li class="enlaces01__item">
    <a class="enlaces01__link" href="/es/quienes-somos" title="Conocer a Patxi y su forma de trabajar">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/persons.svg') ?>" alt="" title="" aria-hidden="true">
      <span>Quién soy</span>
    </a>
  </li>

  <li class="enlaces01__item enlaces01__item--hasSubmenu" data-nav01-submenu-item>
    <div class="enlaces01__submenuHeader">
      <a class="enlaces01__link enlaces01__link--parent" href="/es/servicios" title="Ver todos los servicios de pintura y restauración">
        <img class="enlaces01__icon" src="<?= asset('assets/img/icons/brush.svg') ?>" alt="" title="" aria-hidden="true">
        <span>Servicios</span>
      </a>
      <button class="enlaces01__submenuToggle" type="button" aria-controls="<?= e($idSubmenu) ?>" aria-expanded="false" aria-label="Abrir submenú de servicios" title="Abrir submenú de servicios" data-nav01-submenu-toggle data-nav01-label-open="Abrir submenú" data-nav01-label-close="Cerrar submenú" data-nav01-submenu-label="Servicios">
        <img class="enlaces01__chevron" src="<?= asset('assets/img/icons/arrow-down.svg') ?>" alt="" title="" aria-hidden="true">
      </button>
    </div>

    <ul class="enlaces01__submenu" id="<?= e($idSubmenu) ?>" data-nav01-submenu>
      <li class="enlaces01__item">
        <a class="enlaces01__link enlaces01__link--child" href="/es/servicios/pintor" title="Servicio de pintor profesional en Usurbil y Donostialdea">
          <img class="enlaces01__icon" src="<?= asset('assets/img/icons/brush-1.svg') ?>" alt="" title="" aria-hidden="true">
          <span>Pintor</span>
        </a>
      </li>
      <li class="enlaces01__item">
        <a class="enlaces01__link enlaces01__link--child" href="/es/servicios/restaurador-muebles" title="Servicio de restauración de muebles en Usurbil y Donostialdea">
          <img class="enlaces01__icon" src="<?= asset('assets/img/icons/mueble.svg') ?>" alt="" title="" aria-hidden="true">
          <span>Restauración de muebles</span>
        </a>
      </li>
    </ul>
  </li>

  <li class="enlaces01__item">
    <a class="enlaces01__link" href="/showroom" title="Ver el showroom de recursos del proyecto">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/grid.svg') ?>" alt="" title="" aria-hidden="true">
      <span>Showroom</span>
    </a>
  </li>
</ul>
