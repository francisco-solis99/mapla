<?= $this->extend('layouts/default') ?>

<?= $this->section('head') ?>
    <title>Blog Mapla de Pintura y Decoración | Consejos y Tips</title>
    <meta name="description" content="Encuentra las mejores recomendaciones para lograr grandes resultados pintando y decorando tus espacios. Con Mapla ¡Dale color a tu proyecto!"/>
<?= $this->endSection() ?>


<?= $this->section('javascript') ?>
    <script src="<?= base_url('js/components/navbar.js') ?>" defer type="module"></script>
<?= $this->endSection() ?>


<?= $this->section('content') ?>
    <main>
      <section>
        <div class="container">
          <a href="<?= url_to('website.blog.index') ?>">< Atras</a>
          <p class="mt-5">
            <span class="inline-block">
              <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="none"><path fill="#9336FD" fill-rule="evenodd" d="M1.7188 15h11.5624C14.2294 15 15 14.2293 15 13.2812V2.9687c0-.9482-.7706-1.7187-1.7188-1.7187H1.7188C.7706 1.25 0 2.0205 0 2.9687v10.3125C0 14.2293.7706 15 1.7188 15ZM.9375 2.9687c0-.4307.3506-.7812.7813-.7812h11.5624c.4307 0 .7813.3505.7813.7812v10.3125c0 .4306-.3506.7813-.7813.7813H1.7188c-.4307 0-.7813-.3507-.7813-.7813V2.9687Z" clip-rule="evenodd"/><path fill="#9336FD" d="M14.5312 5.9375H.4687A.469.469 0 0 1 0 5.4687.469.469 0 0 1 .4688 5h14.0624A.469.469 0 0 1 15 5.4688a.469.469 0 0 1-.4688.4687ZM3.5938 3.75a.469.469 0 0 1-.4688-.4688V.4688A.469.469 0 0 1 3.5938 0a.469.469 0 0 1 .4687.4688v2.8125a.469.469 0 0 1-.4688.4687ZM11.4062 3.75a.469.469 0 0 1-.4687-.4688V.4688A.469.469 0 0 1 11.4062 0a.469.469 0 0 1 .4688.4688v2.8125a.469.469 0 0 1-.4688.4687Z"/></svg>
            </span>
            <span class="text-sm text-mapla-dark-100">00/Diciembre/00</span>
          </p>
        </div>
      </section>

      <!-- Post text -->
      <section class="mt-3 mb-6">
        <div class="container grid lg:grid-cols-[70%_20%] gap-x-8">
          <article>
            <header>
              <h1 class="text-mapla-dark-200 font-black text-[45px]">Pintura ecológica que cuida de tu salud y del medio ambiente</h1>
              <h2 class="my-4 text-mapla-purple-200 font-medium text-[25px]">Pellentesque felis lorem, vulputate in pellentesque ut, faucibus ut nibh.</h2>

              <!-- Categories of the blog -->
              <div class="flex">
                <button>
                  <span></span>
                  <span>Ecologia</span>
                </button>
                <button>
                  <span></span>
                  <span>Estilo de vida</span>
                </button>
                <button>
                  <span></span>
                  <span>Hogar</span>
                </button>
                <button>
                  <span></span>
                  <span>Tendencias</span>
                </button>
              </div>
            </header>

            <div class="mt-8 mb-9">
              <picture class="inline-block w-full">
                <img src="<?= base_url('images/blog/post.webp') ?>" alt="Pintura ecológica" class="w-full object-cover">
              </picture>
              <div class="mt-7 text-mapla-dark-100">
                <p class="mb-5">
                  Sabías que… la pintura también puede cuidar del medio ambiente. Si, lo que muchos no saben es que existen pinturas ecológicas que no cuentan con compuestos dañinos, como biocidas o elementos tóxicos y su impacto en el medio ambiente es muy inferior.
                </p>
                <p class="mb-5">
                  Uno de los elementos más contaminantes que muchas pinturas incluyen hoy en día son los VOC , es decir, el compuesto orgánico volátil. Los VOC se pierden por el recubrimientos durante el secado y se elevan en el aire. Se mezclan con otras sustancias químicas, tales como los óxidos de nitrógeno y azufre, que provienen de las emisiones de la industria y los escapes de los vehículos. Compuestos orgánicos volátiles de los revestimientos y otras fuentes, reaccionan con otros contaminantes en presencia de luz solar para formar ozono troposférico (O 3 ).
                </p>
                <p class="mb-5">
                  Cabe mencionar que al tener un porcentaje elevado en las pinturas tienen efectos negativos tanto en la salud como en el medio ambiente.
                </p>
                <h3 class="mt-6 mb-4 text-mapla-purple-200 font-bold text-4xl">¿Por qué debemos aplicar pinturas ecológicas?</h3>
                <p class="mb-5">
                  Pintar la casa con una pintura ecológica es el primer paso para lograr una casa más saludable ya que si cuenta con un bajo índice de VOC'S no desprenderá un olor fuerte y este no afectará a tus pulmones.
                </p>
                <p class="mb-5">
                  Las pinturas ecológicas crean una capa porosa que deja que las paredes transpiren, de manera que el vapor de agua y la humedad son evacuados al exterior y se evita la formación de condensaciones, además se evita también la aparición de hongos y bacterias, garantizando unas paredes más higiénicas y que la pintura dure más en buen estado.
                </p>
                <h4 class="mt-6 mb-4 font-bold text-[28px] text-mapla-dark-200">Beneficios de usar pinturas ecológicas</h4>
                <p class="mb-5">Usar pinturas ecológicas tienen grandes beneficios no solo para la salud sino también para tus espacios.</p>
                <ul class="mt-4 px-6">
                  <li class="item__list-product">Las pinturas ecológicas <strong class="font-bold text-mapla-purple-200">no huelen</strong>, mientras las convencionales sí. El mal olor de estas se debe a ingredientes volátiles.</li>
                  <li class="item__list-product"><span class="text-mapla-purple-200 font-bold">Son ignífugas</span> y gracias a su composición mineral <span class="text-mapla-purple-200 font-bold">no desprenden gases tóxicos en caso de incendio.</span></li>
                  <li class="item__list-product">
                    Son <strong class="text-mapla-purple-200 font-bold">mejores para la salud</strong> a diferencia de las plásticas, cuyos compuestos volátiles irritan la piel, los ojos y las vías respiratorias. Provocan dolores de cabeza y náuseas, dañan el sistema nervioso y son potencialmente cancerígenos.
                  </li>
                  <li class="item__list-product">
                    Las superficies pintadas con pinturas ecológicas <strong class="text-mapla-purple-200 font-bold">atraen menos polvo</strong>, no alteran el equilibrio de iones en el aire.
                  </li>
                  <li class="item__list-product">
                    Las pinturas ecológicas y naturales son más <strong class="text-mapla-purple-200 font-bold">respetuosas con el entorno</strong>, ya que no producen residuos nocivos para el ambiente, pues recurren a una “química blanda”, biodegradable y respetuosa con el entorno.
                  </li>
                  <li class="item__list-product">Fácil aplicación.</li>
                </ul>
                <picture class="my-7 inline-block">
                  <img src="<?= base_url('images/blog/room.webp') ?>" alt="Paredes de Sala" class="w-full object-cover">
                </picture>
                <p class="mb-5">
                  En Mapla estamos a favor de tu salud y del medio ambiente es por ello que fabricamos nuestras pinturas con bajos índices de VOC'S además de que tiene un olor agradable a diferencia de otras marcas y esto al momento de secarse no dañará tu salud. Recuerda que si deseas más información de nuestros productos puedes consultar las fichas técnicas para conocer más sobre los componentes que incluyen nuestras pinturas.
                </p>
              </div>
            </div>
          </article>

          <aside>
            <h4 class="mb-4 text-mapla-dark-200 font-bold text-lg">Otros Articulos que te pueden interesar</h4>
            <div class="grid grid-cols-[repeat(auto-fit,minmax(200px,1fr))] lg:grid-cols-1 gap-y-5 gap-x-6">
              <?= $this -> include('components/PostItem') ?>
              <?= $this -> include('components/PostItem') ?>
            </div>
          </aside>
        </div>
      </section>

      <section class="my-12">
        <div class="container">
          <p>Visita nuestra sección de blog para conocer más consejos del cuidado de tu hogar!</p>
          <a href="<?= url_to('website.blog.index') ?>" class="inline-block mt-4 bg-mapla-purple-100 text-white py-2 px-4 rounded-full">Visitar</a>
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
