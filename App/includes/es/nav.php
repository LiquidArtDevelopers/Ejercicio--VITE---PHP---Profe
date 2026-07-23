<nav class="nav01" aria-label="Navegación principal" data-nav01>
  <div class="nav01__inner">
    <a class="nav01__brand" href="<?= url('/es') ?>" title="Ir al inicio de Patxi">
      <span class="nav01__logo" aria-hidden="true">P</span>
      <span class="nav01__brandText">Patxi</span>
    </a>

    <button class="nav01__toggle" type="button" aria-controls="nav01-menu-es" aria-expanded="false" aria-label="Abrir menú" title="Abrir menú" data-nav01-toggle data-nav01-label-open="Abrir menú" data-nav01-label-close="Cerrar menú">
      <span class="nav01__toggleLine"></span>
      <span class="nav01__toggleLine"></span>
      <span class="nav01__toggleLine"></span>
    </button>

    <div class="nav01__panel" id="nav01-menu-es" data-nav01-menu>
      <div class="nav01__panelInner">
        <?php
        $idSubmenu = 'nav-servicios-es';
        require app_path('includes/es/enlaces.php');
        ?>

        <div class="nav01__langs" aria-label="Idiomas">
          <a class="nav01__lang is-active" href="<?= url(ruta_homologa($url ?? null, 'es')) ?>" lang="es" hreflang="es" aria-current="true" title="Ver esta página en castellano">ES</a>
          <a class="nav01__lang" href="<?= url(ruta_homologa($url ?? null, 'eu')) ?>" lang="eu" hreflang="eu" title="Ikusi orri hau euskaraz">EU</a>
        </div>
      </div>
    </div>
  </div>
</nav>
