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

      <section class="py-6 relative min-h-[405px] grid items-center sm:items-start md:items-center overflow-hidden bg-mapla-light-200 sm:bg-white">
        <div class="absolute inset-0">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1400 405" fill="none" class="min-h-[405px]"><path fill="#FBF7FF" fill-rule="evenodd" d="M0 12.7438S120.09.2109 392 .2109c271.91 0 491 43.8833 683 43.8833s325-31.3504 325-31.3504V372.244s-96.85 31.967-325 31.967c-116.39 0-448.097-39.602-683-47.793-234.903-8.19-392 15.826-392 15.826V12.7438Z" clip-rule="evenodd"/></svg>
        </div>
        <div class="container relative md:flex md:justify-between md:items-center">
          <div class="mb-4 md:w-2/5">
            <h2 class="font-ubuntu text-mapla-purple-200 font-bold text-[45px] mb-2">La mejor opción en pinturas ecológicas</h2>
            <button class="p-3 bg-mapla-orange-100 text-white rounded-3xl text-sm transition-opacity delay-100 hover:opacity-90">Compromiso social</button>
          </div>
          <p class="md:w-2/5 text-mapla-dark-100">Somos una empresa 100% mexicana comprometida con la constante actualización de materias primas, a la vanguardia de la tecnología, con productos totalmente confiables y siempre conforme al cuidado del medio ambiente.</p>
        </div>
      </section>

      <section class="my-9">
        <div class="container text-center">
          <div class="mb-10">
            <h2 class="text-mapla-purple-200 font-bold font-ubuntu text-[45px]">Pinturas Low Voc</h2>
            <p class="text-mapla-dark-100 max-w-5xl mx-auto">La pintura “Low Voc” se caracteriza por la ausencia del fuerte olor a “ pintura fresca” que desprenden las pinturas que contienen altos niveles de VOC, que incluso pueden causar dolor de cabeza o problemas de memoria cuando se inhalan. Mapla elige hacer pinturas amigables con el medio ambiente y cuidar tu salud, es por eso que en nuestra producción cuidamos minimizar al máximo los Compuestos Volátiles de Carbono.</p>
          </div>
          <picture class="inline-block max-w-4xl">
            <source srcset="<?= base_url('/images/about/tech-lowvoc-2x.webp')?>" media="(min-width: 468px)">
            <img src="<?= base_url('/images/about/tech-lowvoc.webp')?>" alt="Pinturas Low Voc" class="w-full object-cover">
          </picture>
        </div>
      </section>

      <section>
        <div class="container">
          <article class="text-mapla-dark-100">
            <h3 class="text-mapla-purple-200 font-ubuntu text-bold">Pinturas antibacteriales 🦠</h3>
            <p>Mantén tus espacios limpios y seguros de bacterias y microrganismos dañinos para tu salud y la de tu familia, mediante la aplicación de nuestra pintura antibacterial en cualquiera de tus habitaciones.</p>
          </article>
          <article class="text-mapla-dark-100"></article>
          <article class="text-mapla-dark-100"></article>
        </div>
      </section>
    </main>

<?= $this->endSection() ?>
