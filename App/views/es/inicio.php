<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/') ?>">
    <title>Nuestra panaderia</title>
    <meta name="description" content="Panaderia y pasteleria artesana con panes, bolleria y productos recien hechos.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/nav.php'); ?>

    <header class="header02">
      <img class="header02__media" src="<?= asset('assets/img/test/dummy02.avif') ?>" alt="Escena de Matrix">
      <div class="header02__content">
        <p class="header02__eyebrow">Header 02</p>
        <h1 class="header02__title">Header 02</h1>
        <p class="header02__text">Matrix ipsum dolor sit amet, consectetur adipisicing elit. Morpheus quaerat optionem et realitatem.</p>
        <a href="#inicio-recursos" class="boton">Continuar</a>
      </div>
    </header>

    <main>
      <section id="inicio-recursos">
        <h2>Artículos 14 y 16</h2>

        <!-- Art14 -->
        <article class="art14">
          <div class="content">
            <h3>Artículo 14</h3>
            <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et simulacrum. Morpheus quaerat optionem, pillula rubra aperiam systema et realitatem. Agent Smith recusandae Zion, dum machinae architecto mundum regunt et Trinity viam demonstrat.</p>
            <img src="<?= asset('assets/img/test/dummy01.avif') ?>" alt="Escena de Matrix">
          </div>
        </article>

        <!-- Art16 -->
        <article class="art16">
          <div>
            <h3>Artículo 16 · Variante 01</h3>
            <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et simulacrum. Morpheus quaerat optionem, pillula rubra aperiam systema et realitatem. Trinity navigat per lineas codicis dum machinae architecto mundum regunt.</p>
            <p>Agent Smith recusandae libertatem, sed Zion veritatem defendit.</p>
            <a href="#" class="boton">CTA</a>
          </div>
          <div>
            <img src="<?= asset('assets/img/test/dummy01.avif') ?>" alt="Escena de Matrix">
          </div>
        </article>
      </section>
    </main>

    <?php require app_path('includes/footer.php'); ?>
  </body>
</html>
