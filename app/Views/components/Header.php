

<!-- <div class="overlay fixed inset-0 z-10 bg-black opacity-80"></div> -->
<header class="relative overflow-x-clip">
  <!-- Promo -->
  <div class="grid grid-cols-2 sm:grid-cols-3 items-center py-4 px-8 min-h-[40px] bg-mapla-purple-200 text-white">
    <div class="flex items-center mr-auto">
      <span>
        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none"><path fill="#81DF3B" d="M2.8502.2139 2.018.17c-.2628 0-.5257.0877-.7009.263C.9227.7833.2657 1.4404.0904 2.3165-.2162 3.631.2657 5.208 1.4047 6.785c1.139 1.577 3.3293 4.1178 7.1843 5.213 1.2266.3505 2.1904.1314 2.979-.3504a2.5851 2.5851 0 0 0 1.139-1.6647l.1314-.6133c.0438-.1753-.0439-.3943-.2191-.4819L9.8594 7.6173c-.1752-.0877-.3942-.0438-.5256.1314L8.2386 9.1505c-.0877.0877-.219.1314-.3505.0877-.7447-.263-3.2417-1.3143-4.5998-3.9427-.0438-.1314-.0438-.2629.0439-.3504l1.0513-1.1828c.0877-.1314.1314-.3067.0877-.4381L3.2008.4767C3.1568.3453 3.0255.214 2.8502.214Z"/></svg>
      </span>
      <span class="text-bold text-center md:text-left text-xs sm:text-sm ml-1">¡Llámanos! 829 761 9317</span>
    </div>
    <p class="text-bold text-center md:text-left text-xs sm:text-sm justify-self-center hidden sm:inline">🔥30% de descuento en Barnices</p>
    <div class="justify-self-end">
      <!-- Social Bar -->
      <?= $this->include('components/Social') ?>
    </div>
  </div>
  <!-- Navbar -->
  <div class="flex justify-between items-center py-4 px-8 min-h-[140px]">
    <a href="/">
      <picture class="inline-block max-w-[80px]">
        <img src="/logo.svg" alt="Logotipo - Pinturas Mapla" class="w-full object-cover">
      </picture>
    </a>
    <button id="btn-menu-open" type="button" class="inline-flex lg:hidden p-2 rounded-full hover:bg-slate-200">
      <span>
        <svg xmlns="http://www.w3.org/2000/svg" role="img" class="icon icon-tabler icon-tabler-menu-2 stroke-mapla-purple-200" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
          <line x1="4" y1="6" x2="20" y2="6" />
          <line x1="4" y1="12" x2="20" y2="12" />
          <line x1="4" y1="18" x2="20" y2="18" />
        </svg>
      </span>
    </button>

    <nav class="navbar" aria-label="Main navigation">
      <button id="btn-menu-close" class="w-full mb-8 lg:hidden inline-flex justify-end">
        <span class="p-2 bg-mapla-purple-100 rounded-full">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x stroke-white" width="20" height="20" viewBox="0 0 24 24" stroke-width="3" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <line x1="18" y1="6" x2="6" y2="18" />
            <line x1="6" y1="6" x2="18" y2="18" />
          </svg>
        </span>
      </button>
      <ul class="flex flex-col lg:flex-row gap-x-5 gap-y-4 mx-auto">
        <li>
          <a href="/" class="transition-all delay-100 shadow__link text-xl font-bold lg:font-normal lg:text-base">Inicio</a>
        </li>
        <li>
          <button class="navbar__btn-dropdown transition-all delay-100 text-xl font-bold lg:font-normal lg:text-base shadow__link" data-dropdown-button
          aria-describedby="Productos"
          aria-expanded="false"
          aria-haspopup="true"
          aria-label="Lista de productos">Productos</button>
          <!-- Dropdown Productos -->
          <div class="navbar__dropdown opacity-0 max-h-0 scale-0 lg:absolute lg:bg-white lg:text-mapla-dark-200 lg:w-4/5 lg:top-full lg:left-1/2 lg:-translate-x-1/2 lg:p-8 lg:grid lg:grid-cols-4 lg:justify-items-center lg:shadow-md">
            <div class="my-2 px-4 lg:my-0 lg:px-0">
              <header>
                <span class="font-bold text-lg">Tipo</span>
              </header>
              <ul class="mt-2 px-4 lg:px-0 grid gap-y-1">
                <li><a href="#" class="shadow__link">Barnices</a></li>
                <li><a href="#" class="shadow__link">Impermeabilizantes</a></li>
                <li><a href="#" class="shadow__link">Selladores para Superficies</a></li>
                <li><a href="#" class="shadow__link">Productos en polvo</a></li>
                <li><a href="#" class="shadow__link">Pinturas Arquitectónicas</a></li>
                <li><a href="#" class="shadow__link">Pinturas Especiales</a></li>
                <li><a href="#" class="shadow__link">Recubrimientos Texturizados</a></li>
                <li><a href="#" class="shadow__link">Recubrimientos Especiales</a></li>
              </ul>
            </div>
            <div class="my-2 px-4 lg:my-0 lg:px-0">
              <header>
                <span class="font-bold text-lg">Linea</span>
              </header>
              <ul class="mt-2 px-4 lg:px-0 grid gap-y-1">
                <li><a href="#" class="shadow__link">Novatex</a></li>
                <li><a href="#" class="shadow__link">Impermeabilizantes</a></li>
                <li><a href="#" class="shadow__link">Eccelaris</a></li>
                <li><a href="#" class="shadow__link">Encanto</a></li>
              </ul>
            </div>
            <div class="my-2 px-4 lg:my-0 lg:px-0">
              <header>
                <span class="font-bold text-lg">Aplicación</span>
              </header>
              <ul class="mt-2 px-4 lg:px-0 grid gap-y-1">
                <li><a href="#" class="shadow__link">Pinturas para transito pesado</a></li>
                <li><a href="#" class="shadow__link">Barnices para madera</a></li>
                <li><a href="#" class="shadow__link">Pinturas para canchas deportivas</a></li>
              </ul>
            </div>

            <figure class="relative inline-block max-w-[220px] my-2 px-4 lg:my-0 lg:px-0">
              <img src="<?= base_url('images/home/promociones.webp') ?>" alt="Pinturas Mapla - Promociones" class="w-full bg-cover">
              <figcaption class="absolute left-1/2 bottom-5 -translate-x-1/2">
                <a href="#" class="p-2 bg-white text-mapla-dark-200 font-bold rounded-full border border-mapla-dark-200">Ver ahora</a>
              </figcaption>
            </figure>
          </div>
        </li>
        <li>
          <a href="#" class="transition-all delay-100 shadow__link text-xl font-bold lg:font-normal lg:text-base">¿Dónde comprar?</a>
        </li>
        <li>
          <a href="#" class="transition-all delay-100 shadow__link text-xl font-bold lg:font-normal lg:text-base">Herramientas</a>
        </li>
        <li>
          <button class="navbar__btn-dropdown transition-all delay-100 text-xl font-bold lg:font-normal lg:text-base shadow__link" aria-describedby="Nosotros"
          aria-expanded="false"
          aria-haspopup="true"
          aria-label="Nosotros menu" data-dropdown-button>
           Nosotros
          </button>
          <!-- Dropdown Nosotros -->
          <div class="navbar__dropdown opacity-0 max-h-0 scale-0 lg:absolute lg:bg-white lg:text-mapla-dark-200 lg:top-full lg:p-4 lg:shadow-md">
            <div class="px-4 my-2 lg:my-0 lg:px-0">
              <ul class="grid gap-y-1">
                <li><a href="#" class="shadow__link">Tecnologias</a></li>
                <li><a href="#" class="shadow__link">Acerca de Nosotros</a></li>
              </ul>
            </div>
        </li>
        <li>
          <a href="#" class="transition-all delay-100 shadow__link text-xl font-bold lg:font-normal lg:text-base">Blog</a>
        </li>
        <li class="lg:hidden">
          <a href="#" class="transition-all delay-100 shadow__link text-xl font-bold lg:font-normal lg:text-base">Contacto</a>
        </li>
      </ul>

      <div class="hidden lg:block">
        <a target="_blank" aria-label="Chat de WhatsApp" href="https://wa.me/528297619317" rel="nofollow" class="inline-block">
            <span class="inline-block bg-green-500 rounded-full p-1.5 align-middle">
              <svg xmlns="http://www.w3.org/2000/svg" class="align-middle icon icon-tabler icon-tabler-brand-whatsapp" width="32" height="32" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                <path d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1" />
              </svg>
            </span>
        </a>
        <a href="#" class="py-3 px-4 font-bold bg-mapla-orange-100 text-white rounded-full ml-2 min-w-max">Contacto</a>
      </div>
    </nav>
  </div>
</header>
