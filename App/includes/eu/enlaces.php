<?php
// Listado compartido por el nav y el footer en castellano. Si se crea una
// página nueva, su href debe coincidir con una ruta de App/config/config.php.
// $idSubmenu llega desde nav.php o footer.php para evitar IDs HTML duplicados.
?>
<ul class="enlaces01">
  <li class="enlaces01__item">
    <a class="enlaces01__link" href="/eu">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/home.svg') ?>" alt="">
      <span>Hasiera</span>
    </a>
  </li>

  <li class="enlaces01__item">
    <a class="enlaces01__link" href="/eu/kontaktua">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/email.svg') ?>" alt="">
      <span>Kontaktua</span>
    </a>
  </li>

  <li class="enlaces01__item">
    <a class="enlaces01__link" href="/es/quienes-somos">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/persons.svg') ?>" alt="">
      <span>Quiénes somos</span>
    </a>
  </li>

  <!-- Este item contiene un segundo nivel de navegación. -->
  <li class="enlaces01__item enlaces01__item--hasSubmenu" data-nav01-submenu-item>
    <div class="enlaces01__submenuHeader">
      <a class="enlaces01__link enlaces01__link--parent" href="/es/servicios">
        <img class="enlaces01__icon" src="<?= asset('assets/img/icons/brush.svg') ?>" alt="">
        <span>Servicios</span>
      </a>
      <button class="enlaces01__submenuToggle" type="button" aria-controls="<?= e($idSubmenu) ?>" aria-expanded="false" aria-label="Abrir submenú Servicios" data-nav01-submenu-toggle data-nav01-label-open="Abrir submenú" data-nav01-label-close="Cerrar submenú" data-nav01-submenu-label="Servicios">
        <img class="enlaces01__chevron" src="<?= asset('assets/img/icons/arrow-down.svg') ?>" alt="">
      </button>
    </div>

    <ul class="enlaces01__submenu" id="<?= e($idSubmenu) ?>" data-nav01-submenu>
      <li class="enlaces01__item">
        <a class="enlaces01__link enlaces01__link--child" href="/es/servicios/pintor">
          <img class="enlaces01__icon" src="<?= asset('assets/img/icons/brush-1.svg') ?>" alt="">
          <span>Pintor</span>
        </a>
      </li>
      <li class="enlaces01__item">
        <a class="enlaces01__link enlaces01__link--child" href="/es/servicios/restaurador-muebles">
          <img class="enlaces01__icon" src="<?= asset('assets/img/icons/mueble.svg') ?>" alt="">
          <span>Restaurador de muebles</span>
        </a>
      </li>
    </ul>
  </li>

  <li class="enlaces01__item">
    <a class="enlaces01__link" href="/showroom">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/grid.svg') ?>" alt="">
      <span>Showroom</span>
    </a>
  </li>
</ul>
