<footer>
  <div class="grid place-items-center bg-newsletter-back min-h-[380px] bg-no-repeat bg-cover bg-center px-3">
    <div>
      <hgroup class="text-center text-white">
        <h3 class="font-bold text-3xl">¡Entérate de nuestras promos!</h3>
        <p class="text-lg font-bold mt-1">Suscríbete a nuestro newsletter</p>
      </hgroup>
      <form class="mt-3">
        <label for="newsletter" class="visually__hidden">Correo electronico</label>
        <div class="flex bg-white rounded-full">
          <input type="text" placeholder="Su correo electronico" id="newsletter" class="w-full p-2 rounded-tl-full rounded-bl-full">
          <button type="submit" class="w-1/2 max-w-[50px] inline-flex items-center justify-center bg-mapla-green-100 rounded-tr-full rounded-br-full">
            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="none"><path fill="#5600B9" d="M18.6081.3919a1.3281 1.3281 0 0 0-1.2544-.355L2.4327 3.6888A3.184 3.184 0 0 0 0 6.7886v1.9692c0 .7175.5685 1.3046 1.2787 1.3347l5.6125.9554a.371.371 0 0 0 .3247-.1035L13.83 4.3301a.594.594 0 0 1 .8398.8398l-6.6143 6.6143a.371.371 0 0 0-.1034.3246l.9553 5.6126c.03.7101.6172 1.2786 1.3347 1.2786h1.9692a3.184 3.184 0 0 0 3.0999-2.4327l3.6517-14.921.0015-.0062a1.328 1.328 0 0 0-.3564-1.2482Z"/></svg>
          </button>
        </div>
      </form>
    </div>
  </div>

  <div class="p-8 grid gap-5 sm:grid-cols-2 lg:grid-cols-[55%_15%_20%] lg:justify-items-start lg:items-center min-h-[350px]">
    <div class="sm:col-span-2 lg:col-span-1">
      <h4 class="font-bold text-3xl mb-4">Sucursales</h4>
      <div class="mt-2 flex flex-col sm:flex-row justify-between lg:w-full lg:gap-6">
        <ul class="text-mapla-dark-100">
          <li><strong class="text-mapla-purple-200">Cancún</strong> - Blvd. Luis Donaldo Colosio.</li>
          <li><strong class="text-mapla-purple-200">Cancún</strong> - Av. Puerto Juárez.</li>
          <li><strong class="text-mapla-purple-200">Cancún</strong> - Av. Cancún.</li>
          <li><strong class="text-mapla-purple-200">Conzumel</strong> - Av. 65  Sur.</li>
          <li><strong class="text-mapla-purple-200">Chetumal</strong> - Av. Benito Juárez.</li>
          <li><strong class="text-mapla-purple-200">Playa del Carmen</strong> - Col. Gonzalo Guerrero Norte.</li>
        </ul>
        <ul class="text-mapla-dark-100">
          <li><strong class="text-mapla-purple-200">Mérida</strong> - Col. Leandro Valle.</li>
          <li><strong class="text-mapla-purple-200">Petempich</strong> -  Col. Centro.</li>
          <li><strong class="text-mapla-purple-200">Valladolid </strong> - Col. Centro.</li>
          <li><strong class="text-mapla-purple-200">José María Morelos</strong> - Col. Vicente Guerrero.</li>
          <li><strong class="text-mapla-purple-200">Tulum</strong> - Calle Satélite Norte.</li>
        </ul>
      </div>
    </div>

    <div class="text-left lg:col-start-2">
      <h5 class="font-bold text-mapla-dark-200 lg:mb-4">Políticas</h5>
      <ul class="mt-2 text-mapla-dark-100">
        <li><a href="#">Bolsa de Trabajo</a></li>
        <li><a href="/politicas-de-uso">Politicas de Uso</a></li>
        <li><a href="/aviso-de-privacidad">Aviso de Privacidad</a></li>
      </ul>
    </div>

    <div class="row-start-1 sm:row-start-2 sm:col-start-2 lg:col-start-3 lg:row-start-1 flex gap-3 justify-between md:justify-end items-center">
      <figure class="inline-block">
        <img src="<?= base_url('images/home/mapla-low-voc.svg') ?>" alt="Mapla - Low Voc" class="w-full bg-cover">
      </figure>
      <figure class="inline-block">
        <img src="<?= base_url('images/home/mapla-servicio.svg') ?>" alt="Mapla - Servicio Personalizado" class="w-full bg-cover">
      </figure>
    </div>
  </div>

  <div class="px-8 py-4 flex justify-between items-center min-h-[80px] bg-gradient-to-b from-mapla-purple-100 to-mapla-purple-200 text-white">
    <div>
      <p class="">
        <small class="text-xs"> © 2022 Pinturas Mapla · Todos los derechos reservados </small>
      </p>
      <p>
        <small class="text-xs">Diseño y desarrollo web por: <a href="https://www.genotipo.com/" target="_blank" class="font-bold">Genotipo®</a></small>
      </p>
    </div>
    <?= $this->include('components/Social') ?>
  </div>
</footer>
