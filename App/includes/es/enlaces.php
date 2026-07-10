<?php
$urlActual = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';

if ($urlActual !== '/') {
    $urlActual = rtrim($urlActual, '/');
}

$productosActivo = in_array($urlActual, [route_url('/productos'), route_url('/producto1'), route_url('/producto2')], true);
$submenuProductosId = $enlacesId ?? 'submenu-productos-es';
?>

<ul class="enlaces01">
  <li class="enlaces01__item">
    <a class="enlaces01__link<?= $urlActual === route_url('/') ? ' is-active' : '' ?>" href="<?= e(route_url('/')) ?>">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/home.svg') ?>" alt="">
      <span>Inicio</span>
    </a>
  </li>

  <li class="enlaces01__item">
    <a class="enlaces01__link<?= $urlActual === route_url('/contacto') ? ' is-active' : '' ?>" href="<?= e(route_url('/contacto')) ?>">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/mail.svg') ?>" alt="">
      <span>Contacto</span>
    </a>
  </li>

  <li class="enlaces01__item">
    <a class="enlaces01__link<?= $urlActual === route_url('/quienes-somos') ? ' is-active' : '' ?>" href="<?= e(route_url('/quienes-somos')) ?>">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/users.svg') ?>" alt="">
      <span>Quienes somos</span>
    </a>
  </li>

  <li class="enlaces01__item enlaces01__item--hasSubmenu<?= $productosActivo ? ' is-submenu-open' : '' ?>" data-nav01-submenu-item>
    <div class="enlaces01__submenuHeader">
      <a class="enlaces01__link enlaces01__link--parent<?= $productosActivo ? ' is-active' : '' ?>" href="<?= e(route_url('/productos')) ?>">
        <img class="enlaces01__icon" src="<?= asset('assets/img/icons/boxes.svg') ?>" alt="">
        <span>Productos</span>
      </a>
      <button class="enlaces01__submenuToggle" type="button" aria-controls="<?= e($submenuProductosId) ?>" aria-expanded="<?= $productosActivo ? 'true' : 'false' ?>" aria-label="<?= $productosActivo ? 'Cerrar submenu Productos' : 'Abrir submenu Productos' ?>" data-nav01-submenu-toggle data-nav01-label-open="Abrir submenu" data-nav01-label-close="Cerrar submenu" data-nav01-submenu-label="Productos">
        <img class="enlaces01__chevron" src="<?= asset('assets/img/icons/chevron.svg') ?>" alt="">
      </button>
    </div>

    <ul class="enlaces01__submenu" id="<?= e($submenuProductosId) ?>" data-nav01-submenu>
      <li class="enlaces01__item">
        <a class="enlaces01__link enlaces01__link--child<?= $urlActual === route_url('/producto1') ? ' is-active' : '' ?>" href="<?= e(route_url('/producto1')) ?>">
          <img class="enlaces01__icon" src="<?= asset('assets/img/icons/tag.svg') ?>" alt="">
          <span>Producto 1</span>
        </a>
      </li>
      <li class="enlaces01__item">
        <a class="enlaces01__link enlaces01__link--child<?= $urlActual === route_url('/producto2') ? ' is-active' : '' ?>" href="<?= e(route_url('/producto2')) ?>">
          <img class="enlaces01__icon" src="<?= asset('assets/img/icons/spark.svg') ?>" alt="">
          <span>Producto 2</span>
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
