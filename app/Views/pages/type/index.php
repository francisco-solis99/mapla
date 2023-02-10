<?= $this->extend('layouts/default') ?>

<?= $this->section('head') ?>
    <title>Pintura ACRITEX | Mapla</title>
    <meta name="description" content="Pintura texturizada que protege el área de aplicación, fabricada con resinas estiren-acrílicas, cargas minerales, aditivos estabilizadores y pigmentos."/>
<?= $this->endSection() ?>


<?= $this->section('javascript') ?>
    <script src="<?= base_url('js/components/navbar.js') ?>" defer type="module"></script>
<?= $this->endSection() ?>


<?= $this->section('content') ?>
    <main class="">
      <section class="mt-20 mb-16 flex justify-center items-center">
        <div class="container text-center">
          <h1 class="text-4xl sm:text-6xl font-black">Pinturas especiales</h1>
          <h2 class="mt-4 text-xl sm:text-2xl font-medium">Vivamus malesuada finibus purus, non pulvinar dolor tempus et.</h2>
        </div>
      </section>

      <!-- Products and aside -->
      <section class="py-10 mb-16">
        <div class="container grid md:grid-cols-[25%_75%] gap-x-6">
          <aside>
            <div class="relative flex items-center justify-between text-center">
              <label for="search" class="visually__hidden">Buscar producto</label>
              <input type="text" id="search" name="search" placeholder="Buscar producto" class="w-full pl-4 pr-8 py-2 bg-white border border-slate-300 rounded-3xl hover:shadow-sm focus:shadow-sm transition-all delay-50 ease-in-out">
              <button class="absolute right-3 bg-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none"><path fill="#21252A" fill-rule="evenodd" d="m11.2545 10.312 4.55 4.55a.6659.6659 0 0 1 0 .9427.6647.6647 0 0 1-.4713.1953.6649.6649 0 0 1-.4714-.1953l-4.5499-4.55c-1.0887.8813-2.472 1.412-3.9786 1.412C2.8413 12.6667 0 9.8253 0 6.3333S2.8413 0 6.3332 0c3.492 0 6.3333 2.8413 6.3333 6.3333 0 1.5067-.5306 2.89-1.412 3.9787ZM1.3333 6.3333c0 2.7574 2.2427 5 5 5s4.9999-2.2426 4.9999-5c0-2.7573-2.2426-5-5-5-2.7572 0-4.9999 2.2427-4.9999 5Z" clip-rule="evenodd"/></svg>
              </button>
            </div>
            <div class="mt-5">
              <p class="mb-2 text-lg font-bold text-mapla-dark-200">Ordenar por</p>
              <ul class="text-sm text-mapla-dark-100">
                <li class="">
                  <button>Nombre A-Z</button>
                </li>
                <li class="">
                  <button>Nombre Z-A</button>
                </li>
                <li class="">
                  <button>Precio más Bajo</button>
                </li>
                <li class="">
                  <button>Precio más Alto</button>
                </li>
              </ul>
            </div>
            <div class="mt-5">
              <p class="mb-2 text-lg font-bold text-mapla-dark-200">Presentación</p>
              <ul class="w-3/4 mx-auto md:mx-0 grid grid-cols-2 gap-3 text-sm text-mapla-dark-200">
                <li class="flex flex-col justify-center items-center p-6 shadow-md rounded-xl cursor-pointer" role="button">
                  <img src="<?= base_url('images/products/presentation/litro.svg') ?>" alt="Presentacion por litro">
                  <span class="font-bold">Litro</span>
                </li>
                <li class="flex flex-col justify-center items-center p-6 shadow-md rounded-xl cursor-pointer" role="button">
                  <img src="<?= base_url('images/products/presentation/galon.svg') ?>" alt="Presentacion por Galon">
                  <span class="font-bold">Galon</span>
                </li>
                <li class="flex flex-col justify-center items-center p-6 shadow-md rounded-xl cursor-pointer" role="button">
                  <img src="<?= base_url('images/products/presentation/cubeta.svg') ?>" alt="Presentacion por Cubeta">
                  <span class="font-bold">Cubeta</span>
                </li>
                <li class="flex flex-col justify-center items-center p-6 shadow-md rounded-xl cursor-pointer" role="button">
                  <img src="<?= base_url('images/products/presentation/tambo.svg') ?>" alt="Presentacion por Tambo">
                  <span class="font-bold">Tambo</span>
                </li>
              </ul>
            </div>
          </aside>
          <section class="mt-16 md:mt-0 grid sm:grid-cols-2 lg:grid-cols-3 gap-14">
            <?php foreach ($products as $itr => $product): ?>
                <?= $this -> setVar('product', $product) ->include('components/Product') ?>
            <?php endforeach ?>
          </section>
        </div>
      </section>
    </main>
<?= $this->endSection() ?>
