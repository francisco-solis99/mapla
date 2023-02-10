<?= $this->extend('layouts/default') ?>

<?= $this->section('head') ?>
    <title>Catálogo de pinturas y productos de decoración | Mapla</title>
    <meta name="description" content="En Mapla te brindamos las mejores recomendaciones para lograr grandes resultados en tu proyecto ¡Dale color a tu proyecto!"/>
<?= $this->endSection() ?>


<?= $this->section('javascript') ?>
    <script src="<?= base_url('js/components/navbar.js') ?>" defer type="module"></script>
    <script src="<?= base_url('js/components/modal.js') ?>" defer type="module"></script>
    <script src="<?= base_url('js/components/automaticCarousel.js') ?>" defer type="module"></script>
<?= $this->endSection() ?>


<?= $this->section('content') ?>
    <main class="bg-mapla-light-100">
      <section class="relative bg-catalogue-back bg-cover bg-center bg-no-repeat min-h-[450px]">
        <div class="absolute inset-0 grid place-content-center text-center backdrop-brightness-50 text-white">
          <div class="container">
            <h1 class="font-bold text-5xl sm:text-6xl">Catálogo de productos</h1>
            <h2 class="mt-6 text-xl sm:text-2xl font-medium">Productos de pintura y decoración de interiores y exteriores</h2>
          </div>
        </div>
      </section>

      <!-- Catalogues list section -->
      <section class="my-12">
        <div class="container">
          <p class="text-center">Consulta nuestro catálogo y conoce nuestra gran variedad de productos para lograr los mejores resultados en tu proyecto.</p>
          <div class="mt-8 grid sm:grid-cols-2 md:grid-cols-3 gap-x-7 gap-y-12 justify-items-center">
            <article class="max-w-sm">
              <picture>
                <img src="<?= base_url('images/catalogue/download.webp') ?>" alt="Catalogo Mapla">
              </picture>
              <button class="modal__btn-open block mx-auto mt-5 py-2 px-3 bg-mapla-purple-100 text-white text-[13px] font-bold rounded-3xl">Descargar Catalogo</button>
            </article>
            <article class="max-w-sm">
              <picture>
                <img src="<?= base_url('images/catalogue/download.webp') ?>" alt="Catalogo Mapla">
              </picture>
              <button class="modal__btn-open block mx-auto mt-5 py-2 px-3 bg-mapla-purple-100 text-white text-[13px] font-bold rounded-3xl">Descargar Catalogo</button>
            </article>
            <article class="max-w-sm">
              <picture>
                <img src="<?= base_url('images/catalogue/download.webp') ?>" alt="Catalogo Mapla">
              </picture>
              <button class="modal__btn-open block mx-auto mt-5 py-2 px-3 bg-mapla-purple-100 text-white text-[13px] font-bold rounded-3xl">Descargar Catalogo</button>
            </article>
          </div>
          <?= $this->include('components/Modal') ?>
        </div>
      </section>

      <!-- Banner carousel -->
      <section class="my-24">
        <div class="container">
          <?= $this -> include('components/AutomaticCarousel') ?>
        </div>
      </section>

      <!-- Share section -->
      <section class="my-16">
        <div class="container">
        <?= $this->include('components/Share') ?>
        </div>
      </section>
    </main>

<?= $this->endSection() ?>
