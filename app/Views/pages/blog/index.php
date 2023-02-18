<?= $this->extend('layouts/default') ?>

<?= $this->section('head') ?>
    <title>Blog Mapla de Pintura y Decoración | Consejos y Tips</title>
    <meta name="description" content="Encuentra las mejores recomendaciones para lograr grandes resultados pintando y decorando tus espacios. Con Mapla ¡Dale color a tu proyecto!"/>
<?= $this->endSection() ?>


<?= $this->section('javascript') ?>
    <script src="<?= base_url('js/components/navbar.js') ?>" defer type="module"></script>
    <script src="<?= base_url('js/components/pagination.js') ?>" defer type="module"></script>
<?= $this->endSection() ?>


<?= $this->section('content') ?>
    <main>
      <section class="flex justify-center items-center min-h-[290px] bg-mapla-light-300">
        <div class="container text-center">
          <h1 class="text-mapla-dark-200 text-4xl sm:text-6xl font-black">Blog de Pintura y Decoración</h1>
          <h2 class="mt-5 text-mapla-dark-200 font-medium text-xl sm:text-2xl">Tips y recomendaciones de pintura y decoración de exteriores e interiores</h2>
        </div>
      </section>

      <section class="my-10">
        <div class="mb-8 container">
          <p class="text-center text-mapla-dark-100">En este blog te brindaremos los mejores tips y recomendaciones para lograr los mejores acabados al momento de decorar tus espacios.</p>
        </div>
        <div class="container grid md:grid-cols-[20%_75%] gap-x-8">
          <aside>
            <div class="relative flex items-center justify-between text-center">
              <label for="search" class="visually__hidden">Buscar un tema</label>
              <input type="text" id="search" name="search" placeholder="Buscar un tema" class="w-full pl-4 pr-8 py-2 bg-white border border-slate-300 rounded-3xl hover:shadow-sm focus:shadow-sm transition-all delay-50 ease-in-out">
              <button class="absolute right-3 bg-white" aria-label="Buscar">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none"><path fill="#21252A" fill-rule="evenodd" d="m11.2545 10.312 4.55 4.55a.6659.6659 0 0 1 0 .9427.6647.6647 0 0 1-.4713.1953.6649.6649 0 0 1-.4714-.1953l-4.5499-4.55c-1.0887.8813-2.472 1.412-3.9786 1.412C2.8413 12.6667 0 9.8253 0 6.3333S2.8413 0 6.3332 0c3.492 0 6.3333 2.8413 6.3333 6.3333 0 1.5067-.5306 2.89-1.412 3.9787ZM1.3333 6.3333c0 2.7574 2.2427 5 5 5s4.9999-2.2426 4.9999-5c0-2.7573-2.2426-5-5-5-2.7572 0-4.9999 2.2427-4.9999 5Z" clip-rule="evenodd"/></svg>
              </button>
            </div>
            <div class="mt-5">
              <p class="mb-2 text-lg font-bold text-mapla-dark-200">Temas</p>
              <ul class="grid gap-y-2 text-sm text-mapla-dark-100">
                <li class="">
                  <button>Estilo de vida</button>
                </li>
                <li class="">
                  <button>Decoración</button>
                </li>
                <li class="">
                  <button>Hogar</button>
                </li>
                <li class="">
                  <button>Empresas</button>
                </li>
                <li class="">
                  <button>Paletas de color</button>
                </li>
                <li class="">
                  <button>Tendencias</button>
                </li>
                <li class="">
                  <button>Ecología</button>
                </li>
                <li class="">
                  <button>Tips</button>
                </li>
              </ul>
            </div>
          </aside>

          <section class="mt-16 md:mt-0 grid sm:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-10">
            <?= $this -> include('components/PostItem') ?>
            <?= $this -> include('components/PostItem') ?>
            <?= $this -> include('components/PostItem') ?>
            <?= $this -> include('components/PostItem') ?>
            <?= $this -> include('components/PostItem') ?>
            <?= $this -> include('components/PostItem') ?>
            <?= $this -> include('components/PostItem') ?>
            <?= $this -> include('components/PostItem') ?>
            <?= $this -> include('components/PostItem') ?>
          </section>
        </div>
      </section>

      <section class="my-16">
        <div class="container flex justify-end">
          <?= $this -> include('components/Pagination') ?>
        </div>
      </section>
    </main>
<?= $this->endSection() ?>
