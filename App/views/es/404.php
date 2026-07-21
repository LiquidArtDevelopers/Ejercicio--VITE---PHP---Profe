<?php http_response_code(404); ?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <title>Página no encontrada | Patxi</title>
    <meta name="description" content="La página solicitada no existe o ha cambiado de dirección. Vuelve al inicio o consulta los servicios de Patxi.">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/es/nav.php'); ?>

    <main>
      <section aria-labelledby="error404-es">
        <article class="art16">
          <div>
            <h1 id="error404-es">No encontramos esa página</h1>
            <p>Es posible que el enlace haya cambiado o que la dirección no esté escrita correctamente. Puedes volver al inicio, revisar los servicios o enviar una consulta.</p>
            <a href="/es" class="boton" title="Volver al inicio de Patxi">Volver al inicio</a>
            <a href="/es/servicios" class="boton" title="Ver los servicios de pintura y restauración">Ver servicios</a>
            <a href="/es/contacto" class="boton" title="Contactar con Patxi">Ir a contacto</a>
          </div>
          <div>
            <img
              src="<?= asset('assets/img/views/interior-renovado-1500.avif') ?>"
              srcset="<?= asset('assets/img/views/interior-renovado-900.avif') ?> 900w, <?= asset('assets/img/views/interior-renovado-1500.avif') ?> 1500w"
              sizes="(max-width: 799px) 100vw, 40vw"
              width="1500"
              height="1000"
              alt="Interior luminoso con paredes renovadas"
              title="Un espacio renovado por descubrir"
              decoding="async"
            >
          </div>
        </article>
      </section>
    </main>

    <?php require app_path('includes/es/footer.php'); ?>
  </body>
</html>
