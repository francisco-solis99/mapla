<div class="modal__overlay hidden fixed z-20 inset-0 w-full h-full bg-black/70" ></div>
<div class="modal hidden w-[80vw] sm:w-[60vw] min-w-[300px] py-6 px-4 fixed z-20 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 max-w-xl bg-mapla-purple-200 text-white rounded-[33px]" aria-labelledby="dialog_title" aria-describedby="dialog_description">
  <img src="<?= base_url('images/catalogue/brushstroke-left.webp') ?>" alt="" class="absolute left-0">
  <img src="<?= base_url('images/catalogue/brushstroke-right.webp') ?>" alt="" class="absolute right-0 bottom-0">
  <div class="text-right">
      <button class="modal__btn-close p-2 inline-block bg-mapla-light-100 rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" fill="none"><path fill="#5600B9" d="M11.6569 11.828c-.3904.3903-1.0233.3909-1.4143 0L6 7.5853 1.7574 11.828c-.3904.3903-1.0233.3909-1.4143 0a.9998.9998 0 0 1 0-1.4142l4.2427-4.2427L.343 1.9285c-.391-.391-.3903-1.0239 0-1.4142.3904-.3904 1.0233-.391 1.4143 0L6 4.7569 10.2426.5143c.3904-.3904 1.0233-.391 1.4143 0 .3909.391.3903 1.0239 0 1.4142L7.4142 6.171l4.2427 4.2427c.3909.3909.3903 1.0239 0 1.4142Z"/></svg>
      </button>
  </div>
  <div class="relative w-4/5 mx-auto">
    <div class="mt-12 text-center">
      <p class="font-bold text-lg">Descarga nuestro catálogo</p>
      <h3 class="mb-3 font-ubuntu font-bold text-3xl sm:text-[38px]">Pinturas para exterior</h3>
      <p class="">Dejanos tus datos y  adquiere nuevas ideas para tus proyectos</p>
    </div>
    <form class="mt-7 mb-12 grid gap-y-3">
      <label for="name" class="visually__hidden">Nombre completo</label>
      <input type="text" id="name" name="name" placeholder="Nombre completo*" class="py-2 px-3 bg-white rounded-3xl" required>
      <label for="phone" class="visually__hidden">Teléfono</label>
      <input type="tel" id="phone" name="phone" placeholder="Teléfono" class="py-2 px-3 bg-white rounded-3xl">
      <label for="email" class="visually__hidden">Correo electronico</label>
      <input type="email" id="email" name="email" placeholder="Correo electronico*" class="py-2 px-3 bg-white rounded-3xl" required>
      <button type="submit" class="py-2 px-3 bg-mapla-orange-100 text-white rounded-3xl">Enviar</button>
    </form>
  </div>
</div>
