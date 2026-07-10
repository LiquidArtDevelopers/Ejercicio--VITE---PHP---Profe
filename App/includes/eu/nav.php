<nav class="nav01" data-nav01>
  <div class="nav01__inner">
    <a class="nav01__brand" href="<?= e(route_url('/')) ?>" aria-label="Hasiera">
      <span class="nav01__logo" aria-hidden="true">LS</span>
      <span class="nav01__brandText">Liquid Stack</span>
    </a>

    <button class="nav01__toggle" type="button" aria-controls="nav01-menu" aria-expanded="false" aria-label="Menua ireki" data-nav01-toggle data-nav01-label-open="Menua ireki" data-nav01-label-close="Menua itxi">
      <span class="nav01__toggleLine"></span>
      <span class="nav01__toggleLine"></span>
      <span class="nav01__toggleLine"></span>
    </button>

    <div class="nav01__panel" id="nav01-menu" data-nav01-menu>
      <div class="nav01__panelInner">
        <?php $enlacesId = 'nav-productos-eu'; ?>
        <?php require app_path('includes/eu/enlaces.php'); ?>

        <div class="nav01__langs" aria-label="Hizkuntzak">
          <a class="nav01__lang" href="<?= e('/es' . (($navSuffixEs ?? '/') === '/' ? '' : $navSuffixEs)) ?>" lang="es" hreflang="es">ES</a>
          <a class="nav01__lang is-active" href="<?= e('/eu' . (($navSuffixEu ?? '/') === '/' ? '' : $navSuffixEu)) ?>" lang="eu" hreflang="eu" aria-current="true">EU</a>
        </div>
      </div>
    </div>
  </div>
</nav>
