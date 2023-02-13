<?= $this->extend('layouts/default') ?>

<?= $this->section('head') ?>
    <title>Pinturas en Cancún, Playa Del Carmen, Yucatán, Mérida</title>
    <meta name="description" content="Adquiere la mejor solución de recubrimiento para decorar tu proyecto. Pinturas, barnices, selladores, recubrimiento, impermeabilizante y más"/>

<?= $this->endSection() ?>


<?= $this->section('javascript') ?>
    <script src="<?= base_url('js/components/navbar.js') ?>" defer type="module"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
<?= $this->endSection() ?>


<?= $this->section('content') ?>
    <main class="bg-mapla-light-100">
      <section class="p-8 bg-contact-back bg-cover bg-no-repeat bg-center min-h-[700px] grid items-center">
        <div class="container">
          <div class="max-w-md md:max-w-lg">
            <h1 class="text-mapla-dark-200 font-black text-[40px]">
              <strong class="block">Mapla®</strong>
              <span>Soluciones y Pinturas</span>
            </h1>
            <h2 class="w-full sm:w-[70%] mt-2 mb-3 text-mapla-dark-200 font-medium text-xl">Venta de pinturas, barnices, selladores e impermeabilizantes </h2>
            <p class="text-mapla-dark-100 text-sm">En Mapla nos especializamos en la fabricación y distribución de pinturas en el sureste del país. Contáctanos para brindarte la mejor solución acorde a las necesidades de tu proyecto.</p>
          </div>
          <div class="mt-6 max-w-md">
            <?= $this -> include('components/Contact') ?>
          </div>
        </div>
      </section>
    </main>

<?= $this->endSection() ?>
