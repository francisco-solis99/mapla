<?= $this->extend('layouts/default') ?>

<?= $this->section('head') ?>
    <title>Productos Mapla - Pinturas, Selladores, Impermeabilizantes, y más</title>
    <meta name="description" content="Amplia variedad de soluciones especializadas para decorar tus proyectos. Pinturas, selladores, impermeabilizantes, barnices, aditivos, productos en polvo"/>
<?= $this->endSection() ?>


<?= $this->section('javascript') ?>
    <script src="<?= base_url('js/components/navbar.js') ?>" defer type="module"></script>
<?= $this->endSection() ?>


<?= $this->section('content') ?>
    <main class="">
      <section class="relative bg-types-back bg-cover bg-center bg-no-repeat min-h-[450px]">
        <div class="absolute inset-0 flex justify-center items-center text-center backdrop-brightness-50 text-white">
          <div class="container">
            <h1 class="font-bold text-5xl sm:text-6xl">Tipos de productos</h1>
            <h2 class="mt-6 text-xl sm:text-2xl font-medium">Pinturas, Selladores, Impermeabilizantes y demás productos para el recubrimiento arquitectónico</h2>
          </div>
        </div>
      </section>

      <section class="my-16">
        <div class="container">
          <hgroup class="mb-10 text-center">
            <h2 class="text-4xl font-bold font-ubuntu text-mapla-purple-200">Productos Mapla</h2>
            <p class="mt-5 max-w-5xl mx-auto text-mapla-dark-100">En Pinturas Mapla® contamos con la más amplia selección de productos especializados para mejorar la apariencia y aumentar la resistencia así como durabilidad de tus proyectos frente a las condiciones climáticas extremas del Caribe Mexicano.</p>
          </hgroup>

          <section>
            <div class="container grid grid-cols[repeat(auto-fit,minmax(230px,1fr))] sm:grid-cols-2 lg:grid-cols-3 gap-x-7 gap-y-12">
              <!-- Types Cards -->
              <?php foreach ($types as $itr => $type): ?>
                <?= $this -> setVar('type', $type) -> include('components/TypeCard') ?>
              <?php endforeach ?>
            </div>
          </section>
        </div>
      </section>

      <section class="py-10 grid place-items-center min-h-[550px] bg-gradient-to-r from-mapla-purple-200 to-mapla-purple-100 text-white">
        <div class="container flex flex-col lg:flex-row items-center justify-between">
          <div class="mb-16 lg:mb-0 text-center lg:text-left">
            <h2 class="mb-6 max-w-[360px] font-bold font-ubuntu text-5xl lg:text-6xl">Con <strong class="text-mapla-green-100">Mapla</strong>,¡Dale color a tu proyecto!</h2>
            <a href="<?= url_to('website.contact.index') ?>" class="px-4 py-2 bg-mapla-orange-100 rounded-3xl">Contactanos</a>
          </div>

          <picture class="inline-block max-w-md min-w-[280px] w-1/2 sm:w-3/4 lg:w-full">
            <source srcset="<?= base_url('images/products/type/wall-2x.webp')?>" media="(min-width: 468px)">
            <img src="<?= base_url('images/products/type/wall.webp')?>" alt="Paredes pintadas con Pinturas Mapla" class="w-full object-cover">
          </picture>
        </div>
      </section>
    </main>
<?= $this->endSection() ?>
