<nav class="nav01" data-nav01>
  <div class="nav01__inner">
    <a class="nav01__brand" href="<?= e(route_url('/')) ?>" aria-label="Inicio">
      <span class="nav01__logo" aria-hidden="true">LS</span>
      <span class="nav01__brandText">Liquid Stack</span>
    </a>

    <button class="nav01__toggle" type="button" aria-controls="nav01-menu" aria-expanded="false" aria-label="Abrir menu" data-nav01-toggle data-nav01-label-open="Abrir menu" data-nav01-label-close="Cerrar menu">
      <span class="nav01__toggleLine"></span>
      <span class="nav01__toggleLine"></span>
      <span class="nav01__toggleLine"></span>
    </button>

    <div class="nav01__panel" id="nav01-menu" data-nav01-menu>
      <div class="nav01__panelInner">
        <?php $enlacesId = 'nav-productos-es'; ?>
        <?php require app_path('includes/es/enlaces.php'); ?>

        <div class="nav01__langs" aria-label="Idiomas">
          <a class="nav01__lang is-active" href="<?= e('/es' . (($navSuffixEs ?? '/') === '/' ? '' : $navSuffixEs)) ?>" lang="es" hreflang="es" aria-current="true">ES</a>
          <a class="nav01__lang" href="<?= e('/eu' . (($navSuffixEu ?? '/') === '/' ? '' : $navSuffixEu)) ?>" lang="eu" hreflang="eu">EU</a>
        </div>
      </div>
    </div>
  </div>
</nav>
