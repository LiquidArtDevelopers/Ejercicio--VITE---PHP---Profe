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

    <header class="header01">
      <img class="header01__media" src="<?= asset('assets/img/panes.avif') ?>" alt="Panes artesanos">
      <div class="header01__content">
        <p class="header01__eyebrow">Panadería artesana</p>
        <h1>Página de inicio</h1>
        <p class="header01__text">Panes, bollería y pastelería elaborados cada día.</p>
        <a href="<?= route_url('/productos') ?>" class="boton">Ver productos</a>
      </div>
    </header>

    <main>

      <!-- Sección de quienes somos -->
      <section>
        <h2>Quienes somos</h2>
        <!-- artículo de nuestra panadería -->
        <!-- Art14 -->
        <article class="art14">
          <div class="content">
            <h3>Conoce nuestra panadería</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic eaque quos recusandae amet nihil numquam nam, ipsa quo eveniet id veniam! Itaque nulla deserunt fuga nemo temporibus minus obcaecati reiciendis similique esse ipsum quasi, non quisquam neque veritatis ratione suscipit, quo assumenda iste odio dignissimos eligendi. Ipsam inventore quam in.</p>
            <img src="https://dummyimage.com/1200x500" alt="">
          </div>
        </article>

        <!-- artículo de nuestra gente -->
        <!-- Art16 -->
        <article class="art16">

          <div>
            <h3>Profesionales a tu servicio</h3>

            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt sit modi velit dolores culpa quaerat assumenda perspiciatis harum dolorum, blanditiis soluta reiciendis tempore eum veniam recusandae in porro iusto! Atque assumenda quasi debitis impedit nesciunt ipsum? Culpa magni a sapiente incidunt eum mollitia nostrum quod, ipsa in. Esse ut rerum eaque quo quidem sunt beatae nihil velit quasi nemo quaerat natus sint officia debitis architecto amet, quod provident! Temporibus facere rem consectetur velit numquam cumque magnam distinctio voluptates eos eum accusamus iste quaerat consequatur quibusdam, reprehenderit quos corporis laboriosam praesentium quia! Perferendis molestias, doloribus magni totam ex aperiam delectus magnam?</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat commodi atque quam quaerat natus ipsa architecto hic voluptatibus totam. Quos?</p>

            <a href="#" class="boton">CTA</a>
          </div>

          <div>
            <img src="https://dummyimage.com/1200x1200" alt="">
          </div>
        </article>

      </section>


      <!-- sección de productos o servicios -->
      <section>
        <h2>Nuestros productos</h2>

      </section>

      <!-- sección de contacto -->
      <section>
        <h2>Contacta con nosotr@s</h2>
        
      </section>

      
    </main>

    <?php require app_path('includes/footer.php'); ?>

</body>
</html>
