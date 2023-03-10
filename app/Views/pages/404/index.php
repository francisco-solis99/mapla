<?= $this->extend('layouts/fullLayout') ?>

<?= $this->section('head') ?>
    <title><?= lang('Errors.pageNotFound') ?></title>
    <meta name="description" content=""/>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <main class="relative grid pt-20 md:pt-0 md:place-items-center min-h-screen bg-mapla-purple-200">
      <div class="container text-white h-1/2 lg:h-3/4 grid grid-rows-2">
        <picture class="">
          <img src="<?= base_url('logo-white.svg') ?>" alt="Pinturas Mapla - Logo">
        </picture>
        <div>
          <hgroup class="mb-8">
            <h1 class="text-6xl font-black">Error 404</h1>
            <p class="w-3/4 md:full mt-4">Parece que algo salió mal, la página que buscas no se encuentra.</p>
          </hgroup>
          <a href="<?= url_to('website.home.index') ?>" class="inline-flex items-center justify-center max-w-max text-mapla-green-100">
            <span class="inline-flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left stroke-mapla-green-100 inline" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <polyline points="15 6 9 12 15 18" />
              </svg>
            </span>
            <span>Regresar</span>
          </a>
        </div>

        <figure class="absolute max-w-[280px] sm:max-w-xs md:max-w-md lg:max-w-md right-0 bottom-0">
          <img src="<?= base_url('images/404.webp') ?>" alt="Pinturas Mapla - Error 404" class="w-full bg-cover">
        </figure>
      </div>
    </main>
<?= $this->endSection() ?>
