<?= $this->extend('layouts/default') ?>

<?= $this->section('head') ?>
    <title>Tienda de Pinturas en Cancún, Playa Del Carmen, Mérida</title>
    <meta name="description" content="Venta de pintura para las extremas condiciones ambientales del Caribe Mexicano en: Cozumel, Chetumal, Mérida y Tulúm, Valladolid, José María Morelos"/>

    <style>
      .shadow__link:hover {
        text-shadow: 0 0 .65px #333, 0 0 .65px #333;
      }
    </style>

    <link rel="stylesheet" href="<?= base_url('css/swapir.css') ?>">
<?= $this->endSection() ?>


<?= $this->section('javascript') ?>
    <script src="<?= base_url('js/components/navbar.js') ?>" defer type="module"></script>
    <script src="<?= base_url('js/components/carousels.js') ?>" defer type="module"></script>
<?= $this->endSection() ?>


<?= $this->section('content') ?>
  <main class="mb-8">
    <!-- Herop Carousel -->
      <section class="min-h-[560px] bg-slate-200 grid">
        <div class="slides">
          <article class="relative bg-hero-slide-1 bg-cover bg-center bg-no-repeat h-full grid place-items-center">
            <div class="absolute inset-0 backdrop-brightness-50 grid items-center lg:block lg:container lg:static lg:backdrop-filter-none">
              <div class="mx-auto max-w-xl px-8 text-center sm:text-left lg:mx-0">
                <h1 class="text-purple-200 text-4xl font-black lg:text-mapla-purple-200 sm:text-5xl">Pinturas y soluciones de recubrimiento en Yucatán y Quintana Roo</h1>
                <h2 class="text-white mt-6 mb-7 text-xl lg:text-mapla-dark-200 font-medium lg:w-4/5">Tienda de pintura arquitectonica, selladores, recubrimientos, impermeabilizantes, y barnices en el Sureste Mexicano.</h2>
                <a href="#" class="p-3 bg-mapla-orange-100 text-white font-bold rounded-full">Contactanos</a>
              </div>
            </div>
          </article>
      </section>

      <!-- Products carousel -->
      <section class="my-10">
        <h2 class="secundary__title text-3xl text-center">Productos destacados</h2>
        <div class="container my-16">
          <div class="flex justify-between">
            <?php foreach ($products as $itr => $product): ?>
              <div>
                  <?= $this -> setVar('product', $product) ->include('components/Product') ?>
              </div>
            <?php endforeach ?>
          </div>
          </div>
        </div>
      </section>

      <!-- Banner carousel -->
      <section class="my-24">
        <div class="container bg-red-500">
          <picture class="">
            <source srcset="/images/home/banner-2x.webp" media="(min-width: 768px)">
            <img src="/images/home/banner.webp" alt="Banner" class="w-full object-cover">
          </picture>
        </div>
      </section>

      <!-- Responsable prodcucts -->
      <section class="mt-10 py-4">
        <div class="container grid md:grid-cols-2 items-center gap-6">
          <div class="md:w-3/4">
            <h3 class="text-mapla-dark-200 font-medium text-2xl">Productos responsables - Low Voc</h3>
            <h2 class="secundary__title mb-3 mt-4 text-4xl font-ubuntu">Pinturas amigables con el medio ambiente 🌱</h2>
            <p class="mb-5 text-mapla-dark-100">Nuestras pinturas son amigables con el medio ambiente gracias a que en nuestra producción cuidamos minimizar al máximo los Compuestos Volátiles de Carbono.</p>
            <a href="#" class="cta__white">Tecnologia Mapla</a>
          </div>
          <picture class="max-w-lg mx-auto w-3/4 md:w-full md:mx-0 md:max-w-xl md:justify-self-end">
            <source srcset="/images/home/low-voc-2x.webp" media="(min-width: 768px)">
            <img src="<?= base_url('/images/home/low-voc.webp')?>" alt="Productos responsables - Pinturas Mapla" class="w-full object-cover" loading="lazy">
          </picture>
        </div>
      </section>

      <!-- Solutions -->
      <section class="pt-8 bg-mapla-purple-200 text-white text-center">
        <div class="flex flex-col md:grid md:grid-cols-2 ">
          <div class="p-4 flex flex-col justify-center items-center">
            <div class="mb-10">
              <h3 class="py-2 px-3 inline-block justify-self-center text-[28px] bg-mapla-green-100 text-mapla-green-200 font-bold rounded-lg ">#HazloconMapla</h3>
              <h2 class="mt-10 mb-8 font-bold font-ubuntu text-6xl">Soluciones</h2>
              <p class="lg:w-4/6 lg:mx-auto">
                Con nosotros, encontrarás la mejor asesoría y te brindaremos soluciones personalizadas para tu decoración, orientándote en elección de pintura, igualación de color y selección de acabados. Dale la mejor calidad con pinturas 100% mexicanas, luce nuestros colores.
              </p>
            </div>
            <div class="flex flex-wrap gap-2 justify-center">
              <button class="cta__white min-w-[100px]">Academia Mapla</button>
              <button class="cta__white min-w-[100px]">Seleccionador de productos</button>
              <button class="cta__white min-w-[100px]">Colores</button>
            </div>
          </div>
          <picture class="inline-block mt-5 md:mt-0">
            <source srcset="/images/home/soluciones-2x.webp" media="(min-width: 768px)">
            <img src="<?= base_url('/images/home/soluciones-2x.webp')?>" alt="Soluciones - Pinturas Mapla" class="w-full object-cover h-full">
          </picture>
        </div>
      </section>

      <!-- Solutions vertical carousel -->
      <section class="min-h-[540px] py-10 flex items-center bg-mapla-light-100 ">
        <div class="container">
          <article class="grid md:grid-cols-2 gap-8 md:items-center">
            <div class="md:max-w-lg">
              <h3 class="font-medium text-mapla-dark-200 text-2xl">Asesores</h3>
              <h2 class="font-ubuntu text-5xl sm:text-6xl mt-3 mb-8">
                <strong class="text-mapla-purple-100 inline-block md:block">Soluciones</strong>
                <span>a la medida de tus proyectos</span>
              </h2>
              <p class="mb-8">Nuestros asesores brindan soluciones a la medida de tus proyectos, acompañándote en cada etapa de este. Desde atención personalizada, aplicación de muestras, creación de productos especiales hasta planes de descuento por volumen de compra.</p>
              <a href="#" class="cta__white">Acerca de Nosotros</a>
            </div>
            <picture class="inline-block max-w-md min-w-[200px] w-3/4 justify-self-center sm:w-full md:justify-self-end">
              <source srcset="/images/home/asesores1-2x.webp" media="(min-width: 468px)">
              <img src="/images/home/asesores1.webp" alt="Soluciones - Mapla" class="w-full object-cover">
            </picture>
          </article>
          <article class="grid md:grid-cols-2 gap-8 md:items-center">
            <div class="md:max-w-lg">
              <h3 class="font-medium text-mapla-dark-200 text-2xl">Asesores</h3>
              <h2 class="font-ubuntu text-5xl sm:text-6xl mt-3 mb-8">
                <strong class="text-mapla-purple-100 inline-block md:block">Soluciones</strong>
                <span>empresariales</span>
              </h2>
              <p class="mb-8">Asignaremos a uno de nuestros asesores expertos para atender las necesidades de tu empresa, brindando soluciones que se adapten a lo que busca y personalizándolas para ti cumpliendo con los más altos niveles de calidad en todos nuestros productos.</p>
              <a href="#" class="cta__white">Contactanos </a>
            </div>
            <picture class="inline-block max-w-md min-w-[200px] w-3/4 justify-self-center sm:w-full md:justify-self-end">
              <source srcset="/images/home/asesores1-2x.webp" media="(min-width: 468px)">
              <img src="/images/home/asesores1.webp" alt="Soluciones - Mapla" class="w-full object-cover">
            </picture>
          </article>
        </div>
      </section>

      <!-- Service Mapla and offices-->
      <section class="my-8 py-4">
        <div class="container grid md:grid-cols-2 gap-3 items-center">
          <picture class="max-w-xs md:max-w-sm inline-block justify-self-center">
            <source srcset="/images/home/shop-2x.webp" media="(min-width: 768px)">
            <img src="<?= base_url('/images/home/shop.webp')?>" alt="Servicio Personalizado Mapla" class="w-full object-cover">
          </picture>
          <div class="text-center">
            <span class="hidden md:inline-block">
              <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 65 65" fill="none"><path fill="#5600B9" fill-rule="evenodd" d="M63.5137 62.2919h-2.7026V30.0626c2.1623-1.2187 3.6487-3.6562 3.9188-6.3643a3.5834 3.5834 0 0 1 .1056-.1929c.092-.1597.1645-.2856.1645-.484 0-.2707 0-.4063-.1353-.677L58.1085.9481C57.838.4062 57.2977 0 56.757 0H8.1082c-.6756 0-1.2163.4062-1.3516.948L0 22.615v.4062c0 3.1144 1.6216 5.823 4.054 7.1769v32.0934H1.3516C.5407 62.2914 0 62.8332 0 63.6457 0 64.4582.5407 65 1.3515 65h62.1629c.8108 0 1.3515-.5418 1.3515-1.3543-.0005-.8129-.676-1.3543-1.352-1.3543l-.0002.0005ZM9.0547 2.7084h46.7574l5.9458 18.9577-58.6497.0005L9.0547 2.7084Zm35.6756 25.7293c2.2972 0 4.1889-1.7606 4.7296-4.0625h-9.4592c.5403 2.3019 2.4325 4.0625 4.7296 4.0625Zm-7.7025-4.0625c-.5407 2.3019-2.4324 4.0625-4.7296 4.0625-2.2971 0-4.1893-1.7606-4.7296-4.0625h9.4592ZM19.865 28.4377c2.2971 0 4.1889-1.7606 4.7296-4.0625h-9.4592c.5402 2.3019 2.4324 4.0625 4.7296 4.0625ZM2.838 24.3752h9.3245c-.5407 2.3019-2.4325 4.0625-4.7296 4.0625-2.2977 0-4.0541-1.7606-4.5948-4.0625Zm3.9186 37.9167H22.973v-5.8231H6.7566v5.8231Zm32.4326 0H25.6764V40.2188h13.514l-.0012 22.0731Zm2.7035 0H58.109v-5.8231H41.8927v5.8231Zm16.2163-8.5312H41.8927V38.8654c0-.8125-.5407-1.3543-1.3515-1.3543H24.3249c-.8108 0-1.3515.5418-1.3515 1.3543v14.8953H6.7571V31.1456h.8108c2.5677 0 4.8649-1.3543 6.2164-3.5207 1.3515 2.1668 3.6487 3.5207 6.2164 3.5207 2.5677 0 4.8649-1.3543 6.2164-3.5207 1.3515 2.1668 3.6487 3.5207 6.2164 3.5207 2.5677 0 4.8649-1.3543 6.2164-3.5207 1.3515 2.1668 3.6487 3.5207 6.2164 3.5207 2.5677 0 4.8649-1.3543 6.2164-3.5207 1.3515 2.1668 3.6487 3.5207 6.2164 3.5207.2701 0 .6755 0 .9461-.1356l-.0013 22.7498-.1349.0009Zm-5.6757-29.3855c.5402 2.3019 2.4324 4.0625 4.7296 4.0625 2.1623 0 4.0541-1.7606 4.5948-4.0625h-9.3244Z" clip-rule="evenodd"/><path fill="#5600B9" fill-rule="evenodd" d="M18.2434 50.375h-6.8919c-.6755 0-1.3515-.6769-1.3515-1.3538V38.865c0-.8125.5407-1.3543 1.3515-1.3543l6.8919-.0004c.8109 0 1.3515.5418 1.3515 1.3543v10.1561c0 .8125-.5406 1.3543-1.3515 1.3543Zm-1.351-10.1561H12.703v7.448h4.1894v-7.448ZM53.3787 50.375h-6.8919c-.6756 0-1.3511-.6769-1.3515-1.3543V38.8646c0-.8125.5407-1.3543 1.3515-1.3543h6.8919c.8108 0 1.3515.5418 1.3515 1.3543v10.1561c0 .8125-.5407 1.3543-1.3515 1.3543Zm-1.3511-10.1561h-4.1893v7.448h4.1893v-7.448Z" clip-rule="evenodd"/></svg>
            </span>
            <h2 class="secundary__title md:my-5 text-4xl font-ubuntu">Servicio personalizado Mapla</h2>
            <p class="text-mapla-dark-100 mb-5">Cada proyecto es diferente, por eso en nuestras sucursales te brindaremos asesoría personalizada para que logres el resultado que buscas con los mejores productos.</p>
            <a href="#" class="cta__white">Sucursales</a>
          </div>
        </div>
      </section>

    </div>
  </main>
<?= $this->endSection() ?>
