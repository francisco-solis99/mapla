<?= $this->extend('layouts/default') ?>

<?= $this->section('head') ?>
    <title>✦ Distribuidor de Pinturas e Impermeabilizantes - Mapla</title>
    <meta name="description" content="Más de 26 años de experiencia en fabricación y distribución de pinturas en el sureste del país. Te brindamos asesoramiento en tu proyecto. ¡Visítanos!"/>
<?= $this->endSection() ?>


<?= $this->section('javascript') ?>
    <script src="<?= base_url('js/components/navbar.js') ?>" defer type="module"></script>
<?= $this->endSection() ?>


<?= $this->section('content') ?>
    <main class="">
      <section class="relative bg-about-back bg-cover bg-center bg-no-repeat min-h-[560px]">
        <div class="absolute inset-0 grid place-content-center text-center backdrop-brightness-50 text-white">
          <div class="container">
            <h1 class="font-bold text-5xl sm:text-6xl">Distribuidor de pinturas ecológicas</h1>
            <h2 class="mt-6 text-xl sm:text-2xl font-medium">Renueva cualquier espacio con nuestros selladores, impermeabilizantes, barnices, recubrimientos, y pinturas.</h2>
          </div>
        </div>
      </section>

      <section class="w-11/12 mx-auto lg:w-full my-16 grid lg:grid-cols-2 gap-x-8 items-center">
        <div class="lg:w-11/12 w-full ml-auto">
          <h3 class="text-center sm:text-left mb-7 text-mapla-purple-200 text-5xl font-bold font-ubuntu">
            <span class="block">Mapla®</span>
            <span class="block">Soluciones y Pinturas</span>
          </h3>
          <p class="text-center sm:text-left mb-6 text-mapla-dark-100">
            Somos una empresa 100% mexicana comprometida con la constante actualización de materias primas, para poder brindarte la mejor vanguardia en tecnología mediante productos totalmente confiables y siempre conforme al cuidado del medio ambiente.
          </p>
          <p class="text-center sm:text-left text-mapla-dark-100">
            A lo largo de nuestros más de 26 años de experiencia, nos hemos convertido en la marca líder en fabricación y distribución de pinturas en el sureste del país, contando con una reconocida presencia en Mérida, Cancún, Playa del Carmen, Cozumel, Tulum, Bacalar y Chetumal.
          </p>
        </div>
        <picture class="mt-8 lg:mt-0 inline-block max-w-2xl min-w-[300px] lg:justify-self-end mx-auto">
          <source srcset="<?= base_url('/images/about/walls-2x.webp')?>" media="(min-width: 468px)">
          <img src="<?= base_url('/images/about/walls.webp') ?>" alt="Casa pintada - Soluciones Mapla" class="w-full object-cover">
        </picture>
      </section>


      <section class="my-16">
        <div class="container grid md:grid-cols-2 gap-7">
          <div class="p-8 sm:p-14 bg-mapla-light-200 text-mapla-dark-200 rounded-[20px]">
            <h3 class="w-full text-center sm:text-left sm:w-4/6 text-3xl sm:text-4xl text-mapla-purple-200 font-bold font-ubuntu">Destacamos en los siguientes aspectos</h3>
            <ul class="mt-6 pl-6">
              <li class="item__list-leaf">Confianza sobre la calidad de nuestros productos.</li>
              <li class="item__list-leaf">Atención híper personalizada para nuestros clientes.</li>
              <li class="item__list-leaf">Productos amigables al medio ambiente.</li>
            </ul>
          </div>
          <div class="p-8 sm:p-14 bg-mapla-light-200 text-mapla-dark-200 rounded-[20px]">
            <h3 class="w-full text-center sm:text-left sm:w-4/6 text-3xl sm:text-4xl text-mapla-purple-200 font-bold font-ubuntu">Garantizamos lo mejor para ti</h3>
            <ul class="mt-6">
              <li class="item__list-leaf">El mejor precio y durabilidad vs contratipo.</li>
              <li class="item__list-leaf">Tiempo de respuesta en igualación personalizada.</li>
              <li class="item__list-leaf">Bajo olor y totalmente agradable al olfato.</li>
              <li class="item__list-leaf">Asesoría en todo momento.</li>
            </ul>
          </div>
        </div>
      </section>


      <section class="relative min-h-[105vh] grid place-items-center bg-gradient-to-r from-mapla-purple-200 to-mapla-purple-100">
        <div class="absolute bg-leafs-back bg-no-repeat bg-contain bg-bottom md:bg-center inset-0 w-full h-full"></div>
        <div class="relative container">
          <hgroup class="text-white text-center font-bold">
            <p class="text-[28px]">☀️Porque hay climas diferentes 🌧</p>
            <h2 class="mt-4 text-6xl">Mapla® es diferente.</h2>
          </hgroup>
          <div class="mt-10">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/T2LTm8RqstY" title="Mapla es diferente" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen  loading="lazy" class="w-full lg:w-[840px] lg:h-[420px] mx-auto aspect-square"></iframe>
          </div>
        </div>
      </section>

      <section class="my-16">
        <div class="container grid sm:grid-cols-2 lg:grid-cols-4 items-center gap-x-6 gap-y-10 sm:gap-y-8">
          <div class="w-4/5 mx-auto text-center lg:w-full lg:mx-0 lg:text-left">
            <h3 class="text-4xl font-bold font-ubuntu text-mapla-purple-200">Catálogo de productos</h3>
            <p class="my-4 mx-auto lg:mx-0 text-mapla-dark-100">Dentro de nuestro amplio catálogo de productos podrás encontrar las mejores soluciones para todo tipo de aplicación y superficie.</p>
            <a href="#" class="inline-block p-3 text-sm bg-mapla-orange-100 text-white rounded-full">Ver catálogos</a>
          </div>
          <article class="text-center">
            <img src="<?= base_url('/images/about/icons/impermeabilizante.svg') ?>" alt="Impermeabilizante - Mapla" class="mx-auto">
            <h3 class="mt-6 text-mapla-purple-200 font-medium text-2xl">Impermeabilizante</h3>
          </article>
          <article class="text-center">
            <img src="<?= base_url('/images/about/icons/sellador.svg') ?>" alt="Sellador - Mapla" class="mx-auto">
            <h3 class="mt-6 text-mapla-purple-200 font-medium text-2xl">Selladores</h3>
          </article>
          <article class="text-center">
            <img src="<?= base_url('/images/about/icons/barnices.svg') ?>" alt="Barnices - Mapla" class="mx-auto">
            <h3 class="mt-6 text-mapla-purple-200 font-medium text-2xl">Barnices</h3>
          </article>
          <article class="text-center">
            <img src="<?= base_url('/images/about/icons/pinturas.svg') ?>" alt="Pinturas especiales - Mapla" class="mx-auto">
            <h3 class="mt-6 text-mapla-purple-200 font-medium text-2xl">Pinturas especiales</h3>
          </article>
          <article class="text-center">
            <img src="<?= base_url('/images/about/icons/polvo.svg') ?>" alt="Productos en polvo - Mapla" class="mx-auto">
            <h3 class="mt-6 text-mapla-purple-200 font-medium text-2xl">Productos en polvo</h3>
          </article>
          <article class="text-center">
            <img src="<?= base_url('/images/about/icons/recubrimiento.svg') ?>" alt="Recubrimiento - Mapla" class="mx-auto">
            <h3 class="mt-6 text-mapla-purple-200 font-medium text-2xl">Recubrimiento</h3>
          </article>
          <article class="text-center">
            <img src="<?= base_url('/images/about/icons/arquitectura.svg') ?>" alt="Pintura arquitectónica - Mapla" class="mx-auto">
            <h3 class="mt-6 text-mapla-purple-200 font-medium text-2xl">Pintura arquitectónica</h3>
          </article>
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
