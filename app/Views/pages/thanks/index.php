<?= $this->extend('layouts/fullLayout') ?>

<?= $this->section('head') ?>
    <title>Gracias</title>
    <meta name="description" content=""/>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <main class="relative grid place-items-center min-h-screen bg-mapla-purple-200">
      <figure class="absolute inline-block w-1/3 md:w-auto max-w-max bottom-0 left-0">
        <img src="<?= base_url('images/thanks-left.webp') ?>" alt="" class="w-full object-cover">
      </figure>
      <div class="container flex flex-col gap-y-16 md:gap-y-24 items-center text-white ">
        <picture class="">
          <img src="<?= base_url('logo-white.svg') ?>" alt="Pinturas Mapla - Logo">
        </picture>
        <div class="text-center">
          <hgroup class="w-7/12 md:w-auto mx-auto">
            <h1 class="text-4xl md:text-6xl font-black">Gracias</h1>
            <p class="mt-4 text-sm md:text-base">Tus datos se enviaron con éxito, en breve uno de nuestros asesores se pondrá en contacto contigo.</p>
          </hgroup>
          <a href="/" class="block mx-auto max-w-max my-8 p-2 bg-mapla-orange-100 rounded-full font-bold text-sm md:text-base">
            Visitar Web
          </a>
          <a href="#" class="inline-flex items-center justify-center max-w-max text-mapla-green-100">
            <span class="inline-flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left stroke-mapla-green-100 inline" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <polyline points="15 6 9 12 15 18" />
              </svg>
            </span>
            <span>Regresar</span>
          </a>
        </div>
      </div>
      <figure class="absolute inline-block w-1/3 md:w-auto max-w-max top-0 right-0">
        <img src="<?= base_url('images/thanks-right.webp') ?>" alt="w-full bg-cover">
      </figure>
    </main>
<?= $this->endSection() ?>
