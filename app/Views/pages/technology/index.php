<?= $this->extend('layouts/default') ?>

<?= $this->section('head') ?>
    <title>✦ Tecnología en Pinturas | Mapla</title>
    <meta name="description" content="Empresa 100% mexicana dedicada a la fabricación y distribución de pinturas que soportan las extremas condiciones ambientales del Caribe."/>
<?= $this->endSection() ?>


<?= $this->section('javascript') ?>
    <script src="<?= base_url('js/components/navbar.js') ?>" defer type="module"></script>
<?= $this->endSection() ?>


<?= $this->section('content') ?>
    <main class="">
      <section class="mb-8">
        <div class="container grid md:grid-cols-2 gap-6 items-center justify-items-center">
          <div class="text-center sm:text-left">
            <h1 class="text-mapla-dark-200 font-black text-4xl sm:text-6xl">Tecnología Mapla</h1>
            <h2 class="mt-5 text-xl sm:text-2xl font-medium">Somos la marca líder en pinturas ecológicas</h2>
          </div>
          <picture class="max-w-sm sm:max-w-md">
            <source srcset="<?= base_url('/images/about/tech-2x.webp')?>" media="(min-width: 468px)">
            <img src="<?= base_url('/images/about/tech.webp')?>" alt="Tecnología mapla" class="w-full object-fill">
          </picture>
        </div>
      </section>

      <section class="bg-wave-back py-6 min-h-[405px] grid items-center sm:items-start md:items-center overflow-hidden bg-mapla-light-200 sm:bg-white">
        <div class="container relative md:flex md:justify-between md:items-center">
          <div class="mb-4 md:w-2/5">
            <h2 class="font-ubuntu text-mapla-purple-200 font-bold text-4xl lg:text-[45px] lg:leading-[54px] mb-2">La mejor opción en pinturas ecológicas</h2>
            <button class="mt-4 p-3 bg-mapla-orange-100 text-white rounded-3xl text-sm transition-opacity delay-100 hover:opacity-90">Compromiso social</button>
          </div>
          <p class="md:w-2/5 text-mapla-dark-100">Somos una empresa 100% mexicana comprometida con la constante actualización de materias primas, a la vanguardia de la tecnología, con productos totalmente confiables y siempre conforme al cuidado del medio ambiente.</p>
        </div>
      </section>

      <section class="my-9">
        <div class="container text-center">
          <div class="mb-10">
            <h2 class="text-mapla-purple-200 font-bold font-ubuntu text-4xl lg:text-[45px]">Pinturas Low Voc</h2>
            <p class="mt-6 text-mapla-dark-100 max-w-5xl mx-auto">La pintura “Low Voc” se caracteriza por la ausencia del fuerte olor a “ pintura fresca” que desprenden las pinturas que contienen altos niveles de VOC, que incluso pueden causar dolor de cabeza o problemas de memoria cuando se inhalan. Mapla elige hacer pinturas amigables con el medio ambiente y cuidar tu salud, es por eso que en nuestra producción cuidamos minimizar al máximo los Compuestos Volátiles de Carbono.</p>
          </div>
          <picture class="inline-block min-w-[220px] max-w-4xl">
            <source srcset="<?= base_url('/images/about/tech-lowvoc-2x.webp')?>" media="(min-width: 468px)">
            <img src="<?= base_url('/images/about/tech-lowvoc.webp')?>" alt="Pinturas Low Voc" class="w-full object-cover">
          </picture>
        </div>
      </section>

      <section class="my-9">
        <div class="container grid sm:grid-cols-2 lg:grid-cols-3 justify-items-center gap-7">
          <article class="text-center sm:text-left sm:col-span-2 lg:col-span-1 lg:max-w-sm text-mapla-dark-100">
            <h3 class="text-mapla-purple-200 font-ubuntu text-bold text-4xl">Pinturas antibacteriales 🦠</h3>
            <p class="mt-5 text-sm">Mantén tus espacios limpios y seguros de bacterias y microrganismos dañinos para tu salud y la de tu familia, mediante la aplicación de nuestra pintura antibacterial en cualquiera de tus habitaciones.</p>
          </article>
          <article class="max-w-sm p-8 bg-mapla-light-200 text-mapla-dark-100 rounded-[20px]">
            <span class="inline-block bg-white rounded-full p-2 max-w-[50px]">
              <img src="<?= base_url('/images/about/flower.webp')?>" alt="" class="w-full object-cover">
            </span>
            <h3 class="text-mapla-purple-200 text-2xl font-medium mt-3 mb-4">Pinturas sin olor</h3>
            <p class="text-sm">Nuestras pinturas ecológicas sin olor, a diferencia de la pintura convencional, no contiene partículas invisibles que pueden ser nocivas para tu salud, ya que entre sus componentes se encuentran metales pesados o sustancias volátiles derivadas del petróleo. Además, utilizando este tipo de pintura evitaras tener que esperar varios días para que disminuya el olor a pintura para retomar tus labores cotidianas.</p>
          </article>
          <article class="max-w-sm p-8 bg-mapla-light-200 text-mapla-dark-100 rounded-[20px]">
            <span class="inline-block bg-white rounded-full p-2 max-w-[50px]">
              <img src="<?= base_url('/images/about/winter.webp')?>" alt="" class="w-full object-cover">
            </span>
            <h3 class="text-mapla-purple-200 text-2xl font-medium mt-3 mb-4">Pinturas sin olor</h3>
            <p class="text-sm">Nuestras pinturas ecológicas sin olor, a diferencia de la pintura convencional, no contiene partículas invisibles que pueden ser nocivas para tu salud, ya que entre sus componentes se encuentran metales pesados o sustancias volátiles derivadas del petróleo. Además, utilizando este tipo de pintura evitaras tener que esperar varios días para que disminuya el olor a pintura para retomar tus labores cotidianas.</p>
          </article>
          <article class="text-mapla-dark-100"></article>
        </div>
      </section>


      <section class="bg-mapla-purple-200 text-white text-center">
        <div class="flex flex-col md:grid md:grid-cols-2 ">
          <div class="p-4 flex flex-col justify-center items-center">
            <div class="mb-10">
              <h3 class="py-2 px-3 inline-block justify-self-center text-[28px] bg-mapla-green-100 text-mapla-green-200 font-bold rounded-lg ">#HazloconMapla</h3>
              <h2 class="mt-10 mb-8 font-bold font-ubuntu text-6xl">Pinturas 100% Mexicanas</h2>
              <p class="lg:w-4/6 lg:mx-auto mb-4">
                La mejor calidad con pinturas 100% mexicanas, luce nuestros colores.
              </p>
              <a href="<?= url_to('website.promotions.index') ?>" class=" bg-mapla-orange-100 p-3 text-white inline-block rounded-full">Promociones</a>
            </div>
          </div>
          <picture class="inline-block mt-5 md:mt-0">
            <source srcset="<?= base_url('/images/about/tech-mex-2x.webp')?>" media="(min-width: 768px)">
            <img src="<?= base_url('/images/about/tech-mex.webp')?>" alt="Soluciones - Pinturas Mapla" class="w-full object-cover h-full">
          </picture>
        </div>
      </section>
    </main>

<?= $this->endSection() ?>
