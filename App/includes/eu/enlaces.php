<?php
$urlActual = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';

if ($urlActual !== '/') {
    $urlActual = rtrim($urlActual, '/');
}

$productosActivo = in_array($urlActual, [route_url('/produktuak'), route_url('/produktua-1'), route_url('/produktua-2')], true);
$submenuProductosId = $enlacesId ?? 'submenu-produktuak-eu';
?>

<ul class="enlaces01">
  <li class="enlaces01__item">
    <a class="enlaces01__link<?= $urlActual === route_url('/') ? ' is-active' : '' ?>" href="<?= e(route_url('/')) ?>">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/home.svg') ?>" alt="">
      <span>Hasiera</span>
    </a>
  </li>

  <li class="enlaces01__item">
    <a class="enlaces01__link<?= $urlActual === route_url('/kontaktua') ? ' is-active' : '' ?>" href="<?= e(route_url('/kontaktua')) ?>">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/mail.svg') ?>" alt="">
      <span>Kontaktua</span>
    </a>
  </li>

  <li class="enlaces01__item">
    <a class="enlaces01__link<?= $urlActual === route_url('/nortzuk-gara') ? ' is-active' : '' ?>" href="<?= e(route_url('/nortzuk-gara')) ?>">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/users.svg') ?>" alt="">
      <span>Nortzuk gara</span>
    </a>
  </li>

  <li class="enlaces01__item enlaces01__item--hasSubmenu<?= $productosActivo ? ' is-submenu-open' : '' ?>" data-nav01-submenu-item>
    <div class="enlaces01__submenuHeader">
      <a class="enlaces01__link enlaces01__link--parent<?= $productosActivo ? ' is-active' : '' ?>" href="<?= e(route_url('/produktuak')) ?>">
        <img class="enlaces01__icon" src="<?= asset('assets/img/icons/boxes.svg') ?>" alt="">
        <span>Produktuak</span>
      </a>
      <button class="enlaces01__submenuToggle" type="button" aria-controls="<?= e($submenuProductosId) ?>" aria-expanded="<?= $productosActivo ? 'true' : 'false' ?>" aria-label="<?= $productosActivo ? 'Azpimenua itxi Produktuak' : 'Azpimenua ireki Produktuak' ?>" data-nav01-submenu-toggle data-nav01-label-open="Azpimenua ireki" data-nav01-label-close="Azpimenua itxi" data-nav01-submenu-label="Produktuak">
        <img class="enlaces01__chevron" src="<?= asset('assets/img/icons/chevron.svg') ?>" alt="">
      </button>
    </div>

    <ul class="enlaces01__submenu" id="<?= e($submenuProductosId) ?>" data-nav01-submenu>
      <li class="enlaces01__item">
        <a class="enlaces01__link enlaces01__link--child<?= $urlActual === route_url('/produktua-1') ? ' is-active' : '' ?>" href="<?= e(route_url('/produktua-1')) ?>">
          <img class="enlaces01__icon" src="<?= asset('assets/img/icons/tag.svg') ?>" alt="">
          <span>Produktua 1</span>
        </a>
      </li>
      <li class="enlaces01__item">
        <a class="enlaces01__link enlaces01__link--child<?= $urlActual === route_url('/produktua-2') ? ' is-active' : '' ?>" href="<?= e(route_url('/produktua-2')) ?>">
          <img class="enlaces01__icon" src="<?= asset('assets/img/icons/spark.svg') ?>" alt="">
          <span>Produktua 2</span>
        </a>
      </li>
    </ul>
  </li>

  <li class="enlaces01__item">
    <a class="enlaces01__link<?= $urlActual === '/showroom' ? ' is-active' : '' ?>" href="/showroom">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/grid.svg') ?>" alt="">
      <span>Showroom</span>
    </a>
  </li>
</ul>
