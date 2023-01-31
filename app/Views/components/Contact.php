<form class="md:max-w-lg grid gap-y-4">
  <input type="text" placeholder="Nombre completo*" id="name" class="w-full p-3 bg-white rounded-3xl" required aria-required="true">
  <div class="w-full flex flex-col sm:flex-row gap-x-2 gap-y-4">
    <label class="visually__hidden" for="phone">Teléfono</label>
    <input type="tel" placeholder="Telefono" id="phone" class="w-full p-3 bg-white rounded-3xl" maxlength="10" pattern="[0-9]{10}">
    <label class="visually__hidden" for="">Empresa*</label>
    <input type="text" placeholder="Empresa*" class="w-full p-3 bg-white rounded-3xl" required  aria-required="true">
  </div>
  <label class="visually__hidden" for="email">Correo electronico*</label>
  <input type="email" placeholder="Correo electronico*" id="email" class="w-full p-3 bg-white rounded-3xl" required  aria-required="true">
  <label for="message" class="visually__hidden">¿En qué podemos ayudarte?</label>
  <input type="name" id="message" placeholder="¿En qué podemos ayudarte?" class="w-full p-3 bg-white rounded-3xl" required  aria-required="true">
  <button type="submit" class="mt-5 min-w-[100px] p-2 text-white bg-mapla-orange-100 rounded-3xl justify-self-center">Enviar</button>
  <label class="visually__hidden" for="name">Nombre completo*</label>
</form>
