<?= $this->extend('layouts/default') ?>

<?= $this->section('head') ?>
    <title>Promociones en pinturas, barnices e impermeabilizante | Mapla</title>
    <meta name="description" content="Descubre nuestras increíbles promociones en pintura arquitectónica, selladores, recubrimientos, productos en polvo, y más. ¡Visítanos hoy mismo!"/>
<?= $this->endSection() ?>


<?= $this->section('javascript') ?>
    <script src="<?= base_url('js/components/navbar.js') ?>" defer type="module"></script>
<?= $this->endSection() ?>


<?= $this->section('content') ?>
    <main class="">
      <header class="relative min-h-[400px] md:min-h-[360px] bg-mapla-light-100 bg-promotions-back bg-no-repeat bg-cover bg-right sm:bg-center">
        <div class="absolute inset-0 flex flex-col justify-center text-white backdrop-brightness-50 text-center">
          <div class="container">
            <h1 class="font-black text-5xl md:text-6xl">Promociones Pinturas Mapla</h1>
            <h2 class="mt-4 mb-5 max-w-3xl mx-auto font-medium text-xl md:text-2xl">Sorpréndete con nuestras increíbles promociones en pintura, barnices, selladores, recubrimientos, impermeabilizantes y más.</h2>
            <p>¡Encuentra todo el material que necesites para decorar tu espacio al mejor precio!</p>
          </div>
        </div>
      </header>

      <section class="my-10">
        <div class="container grid gap-9">
          <?= $this -> include('components/Promotion') ?>
          <?= $this -> include('components/Promotion') ?>
          <?= $this -> include('components/Promotion') ?>
        </div>
      </section>
    </main>

<?= $this->endSection() ?>
