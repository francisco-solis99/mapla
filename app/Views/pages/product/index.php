<?= $this->extend('layouts/default') ?>

<?= $this->section('head') ?>
    <title></title>
    <meta name="description" content=""/>
<?= $this->endSection() ?>


<?= $this->section('javascript') ?>
    <script src="<?= base_url('js/components/navbar.js') ?>" defer type="module"></script>
<?= $this->endSection() ?>


<?= $this->section('content') ?>
    <main>
      <section class="mt-20 mb-16">
        <div class="container">
          <article class="grid lg:grid-cols-2 justify-items-center gap-8">
            <div class="p-8 shadow-md w-full self-start text-center">
              <picture class="inline-block max-w-[250px] lg:max-w-xs">
                <img src="<?= base_url('images/products/product-2x.webp') ?>" alt="Sellador Reforzado - Mapla" class="w-full bg-cover">
              </picture>
            </div>
            <div>
              <h1 class="text-mapla-dark-200 font-black text-[45px]">SELLADOR REFORZADO</h1>
              <p class="my-3 text-mapla-dark-200 font-medium text-[22px]">Cubeta 0L</p>
              <p class="text-mapla-purple-200 font-bold text-[38px] font-ubuntu">$0,000.00</p>
              <p class="my-6 text-mapla-dark-100 text-[15px]">
                SELLACRYL DUAL® es un sellador fabricado con un alto contenido de polímeros estirén-acrílicos, los cuales evitan problemas de anclaje en muros y plafones de construcciones nuevas con alto contenido de alcalinidad para interiores y exteriores. Tiene propiedades de fungicida, bactericida y alguicida, evitando la creación de microorganismos (esporas, hongos, algas, moho, etc.) sobre superficies tratadas.
              </p>
              <div>
                <h3 class="text-mapla-dark-200 font-medium text-[22px]">Beneficios del producto</h3>
                <ul class="mt-3 pl-6 text-mapla-dark-100">
                  <li class="item__list-product">
                    Penetra por los poros de la superficie y crea un sistema de anclaje al substrato, garantizando su adherencia, barrera agresiva contra los microorganismos, garantizando su adherencia y protección a nuestros productos.
                  </li>
                  <li class="item__list-product">
                    Tapa la porosidad del muro o plafón haciendo que los aplanados no le quiten la humedad al acabado final.
                  </li>
                  <li class="item__list-product">
                    Protege de la alcalinidad del muro al acabado.
                  </li>
                  <li class="item__list-product">Aísla y protege la superficie.</li>
                  <li class="item__list-product">Ahorra y facilita la instalación de los acabados.</li>
                  <li class="item__list-product">Rápido y fácil en su instalación.</li>
                  <li class="item__list-product">Ni combustible, ni tóxico.</li>
                  <li class="item__list-product">
                    Especial para zonas tropicales donde el clima es agresivo para los recubrimientos por su alta concentración de humedad ambiental (97%) y salinidad.
                  </li>
                </ul>
              </div>
              <button class="mt-5 py-2 px-3 flex justify-center text-mapla-purple-200 bg-mapla-light-300 font-bold text-sm rounded-3xl">
                <span class="inline-block mr-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="19" fill="none"><path fill="#5600B9" fill-rule="evenodd" d="M21.9999 2.375a.7988.7988 0 0 0-.0668-.3198S21.1946 0 16.4757 0c-3.0862 0-4.7911.8622-5.5611 1.4068C10.0219.9081 8.0452 0 5.4774 0 1.8215 0 .2082 1.8383.2082 1.8383A.7932.7932 0 0 0 0 2.375v15.8332c0 .3254.198.6174.4981.7371a.782.782 0 0 0 .8627-.1979s1.2957-1.3308 4.137-1.3308c3.6159 0 4.924 1.3267 4.924 1.3267a.7791.7791 0 0 0 .5782.2566c.22 0 .4299-.0926.5791-.2557 0 0 1.3082-1.3276 4.924-1.3276 2.8412 0 4.1361 1.3308 4.1361 1.3308a.7821.7821 0 0 0 .8627.1979.7933.7933 0 0 0 .4981-.7371L21.9999 2.375ZM11.7815 16.7493V2.7315c.4972-.3602 1.9054-1.148 4.6937-1.148 2.57 0 3.6622.7988 3.953 1.0633v14.0577c-.8651-.4425-2.1585-.8708-3.9255-.8708-2.2456 0-3.7635.4575-4.7215.9159l.0003-.0003Zm-1.5714-.004V2.8233l.0001-.0002c-.6898-.3951-2.434-1.2398-4.7332-1.2398-2.1787 0-3.4397.7862-3.9057 1.1486v13.9722c.865-.4425 2.1591-.8708 3.9263-.8708 2.2382 0 3.7538.4545 4.7125.912Z" clip-rule="evenodd"/></svg>
                </span>
                <span>Descargar Ficha</span>
              </button>
            </div>

          </article>
        </div>
      </section>
    </main>
<?= $this->endSection() ?>
