<header>
  <div class="grid grid-cols-3 items-center p-4 min-h-[40px] bg-mapla-purple-200 text-white">
    <div class="flex items-center mr-auto">
      <span>
        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none"><path fill="#81DF3B" d="M2.8502.2139 2.018.17c-.2628 0-.5257.0877-.7009.263C.9227.7833.2657 1.4404.0904 2.3165-.2162 3.631.2657 5.208 1.4047 6.785c1.139 1.577 3.3293 4.1178 7.1843 5.213 1.2266.3505 2.1904.1314 2.979-.3504a2.5851 2.5851 0 0 0 1.139-1.6647l.1314-.6133c.0438-.1753-.0439-.3943-.2191-.4819L9.8594 7.6173c-.1752-.0877-.3942-.0438-.5256.1314L8.2386 9.1505c-.0877.0877-.219.1314-.3505.0877-.7447-.263-3.2417-1.3143-4.5998-3.9427-.0438-.1314-.0438-.2629.0439-.3504l1.0513-1.1828c.0877-.1314.1314-.3067.0877-.4381L3.2008.4767C3.1568.3453 3.0255.214 2.8502.214Z"/></svg>
      </span>
      <span class="text-bold text-sm ml-1">¡Llámanos! 829 761 9317</span>
    </div>
    <p class="text-bold text-sm justify-self-center">🔥30% de descuento en Barnices</p>
    <div class="justify-self-end">
      <!-- Social Bar -->
      <?= $this->include('components/Social') ?>
    </div>
  </div>
  <div class="flex justify-between items-center p-4 min-h-[140px]">
    <picture class="inline-block max-w-[80px]">
      <img src="/logo.svg" alt="Logotipo - Pinturas Mapla" class="w-full object-cover">
    </picture>
    <nav>
      <ul class="flex gap-x-5">
        <li>
          <a href="/" class="transition-all delay-100 shadow__link">Inicio</a>
        </li>
        <li>
          <a href="#" class="transition-all delay-100 shadow__link">Productos</a>
        </li>
        <li>
          <a href="#" class="transition-all delay-100 shadow__link">¿Dónde comprar?</a>
        </li>
        <li>
          <a href="#" class="transition-all delay-100 shadow__link">Herramientas</a>
        </li>
        <li>
          <a href="#" class="transition-all delay-100 shadow__link">Nosotros</a>
        </li>
        <li>
          <a href="#" class="transition-all delay-100 shadow__link">Blog</a>
        </li>
      </ul>
    </nav>
    <div>
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
  </div>
</header>
