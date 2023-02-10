<?= $this->extend('layouts/default') ?>

<?= $this->section('head') ?>
    <title>Preguntas Frecuentes | Pinturas Mapla</title>
    <meta name="description" content="Decora tu proyecto con los mejores productos especializados para las agresivas condiciones climatológicas del Caribe Mexicano"/>
<?= $this->endSection() ?>


<?= $this->section('javascript') ?>
    <script src="<?= base_url('js/components/navbar.js') ?>" defer type="module"></script>
<?= $this->endSection() ?>


<?= $this->section('content') ?>
    <main class="bg-white">
    <section class="grid place-content-center min-h-[350px] text-mapla-dark-200 bg-mapla-light-100">
          <div class="container text-center">
            <h1 class="text-5xl sm:text-6xl font-black">Preguntas Frecuentes</h1>
            <h2 class="mt-6 text-xl sm:text-2xl font-medium">Las mejores pinturas ecológicas para tus proyectos</h2>
            <p class="text-mapla-dark-100">Consulta toda la información necesaria para logar los mejores acabados en pintura y decoración.</p>
          </div>
    </section>

    <section class="my-16">
      <div class="container flex flex-col lg:flex-row gap-4">
        <aside class="w-full lg:w-1/5">
          <input type="text" placeholder="Buscar respuestas" class="inline-block w-full lg:w-auto py-2 px-3 border border-slate-200 rounded-full">
          <div class="hidden lg:block mt-5 mb-3">
            <h4 class=" text-mapla-dark-200 font-bold text-lg">Temas</h4>
            <ul class="grid gap-y-2">
              <li>Pinturas</li>
              <li>Aplicaciones</li>
              <li>Devoluciones</li>
              <li>Garantias</li>
              <li>Durabilidad</li>
            </ul>
          </div>
        </aside>
        <section class="mt-8 lg:mt-0 w-full lg:w-3/4 grid gap-y-5">
          <details class="details relative py-4 px-8 border border-slate-200 rounded-[20px]">
            <summary class="group flex justify-between cursor-pointer list-none">
              <span class="text-mapla-dark-200 font-bold text-lg">Pregunta frecuente 1</span>
              <div class="summary-chevron-up absolute top-4 right-4 pointer-events-none ">
               <svg xmlns="http://www.w3.org/2000/svg" width="25" height="26" viewBox="0 0 30 31" fill="none"><path fill="#5600B9" fill-rule="evenodd" d="M15 .17C6.7291.17 0 6.899 0 15.1698c0 8.2709 6.7291 15 15 15 8.2709 0 15-6.7291 15-15 0-8.2708-6.7291-15-15-15Zm0 27.9999c-7.168 0-13-5.832-13-13s5.832-13 13-13 13 5.832 13 13-5.832 13-13 13Zm7-12c.5529 0 1-.448 1-1s-.4471-1-1-1h-6v-6c0-.552-.4471-1-1-1s-1 .448-1 1v6H8c-.5529 0-1 .448-1 1s.4471 1 1 1h6v6c0 .552.4471 1 1 1s1-.448 1-1v-6h6Z" clip-rule="evenodd"/></svg>
              </div>
            </summary>
            <p class="mt-5 text-mapla-dark-100">
            Pellentesque felis lorem, vulputate in pellentesque ut, faucibus ut nibh. Proin convallis, tortor sit amet rhoncus ornare, velit ligula pretium ex, at ultrices sapien massa a sem. Sed accumsan blandit ligula, vitae volutpat odio vehicula id. Donec commodo molestie orci, at tempor purus iaculis vitae. Mauris eget est sit amet diam sodales vulputate sodales nec tellus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce pellentesque pretium leo nec commodo. Aliquam porttitor ullamcorper ipsum, in vulputate nisl mollis a. Fusce convallis massa id consectetur congue. Sed id ex lacus. Mauris at sem eget sem sodales pretium. Vestibulum nec maximus neque, ut ultrices libero.
            </p>
            <div class="summary-chevron-down absolute top-4 right-4 pointer-events-none ">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="26" viewBox="0 0 30 31" fill="none"><path fill="#5600B9" fill-rule="evenodd" d="M4.394 4.5636C7.2263 1.7304 10.9931.17 15 .17c4.0066 0 7.7734 1.5605 10.606 4.3941C28.4395 7.397 30 11.164 30 15.1701s-1.5604 7.7729-4.394 10.6061c-2.8323 2.8332-6.5994 4.3937-10.606 4.3937s-7.7734-1.5604-10.606-4.3941C1.5605 22.943 0 19.1758 0 15.1697c0-4.006 1.5604-7.773 4.394-10.606ZM15 28.2948c3.5057 0 6.8019-1.3655 9.2806-3.8447 2.4792-2.4787 3.8446-5.7744 3.8446-9.2802 0-3.5057-1.3655-6.8012-3.8446-9.2801C21.8019 3.4106 18.5057 2.045 15 2.045S8.1981 3.4106 5.7194 5.8898c-2.4792 2.4787-3.8446 5.7744-3.8446 9.2801 0 3.5058 1.3655 6.8013 3.8446 9.2802C8.198 26.9293 11.4943 28.2948 15 28.2948Z" clip-rule="evenodd"/><path fill="#5600B9" d="M23.4373 14.2324H6.5625c-.5175 0-.9375.42-.9375.9375 0 .5175.42.9375.9375.9375h16.8748c.5175 0 .9375-.42.9375-.9375 0-.5175-.42-.9375-.9375-.9375Z"/></svg>
            </div>
          </details>
          <details class="details relative py-4 px-8 border border-slate-200 rounded-[20px]">
            <summary class="group flex justify-between cursor-pointer list-none">
              <span class="text-mapla-dark-200 font-bold text-lg">Pregunta frecuente 1</span>
              <div class="summary-chevron-up absolute top-4 right-4 pointer-events-none ">
               <svg xmlns="http://www.w3.org/2000/svg" width="25" height="26" viewBox="0 0 30 31" fill="none"><path fill="#5600B9" fill-rule="evenodd" d="M15 .17C6.7291.17 0 6.899 0 15.1698c0 8.2709 6.7291 15 15 15 8.2709 0 15-6.7291 15-15 0-8.2708-6.7291-15-15-15Zm0 27.9999c-7.168 0-13-5.832-13-13s5.832-13 13-13 13 5.832 13 13-5.832 13-13 13Zm7-12c.5529 0 1-.448 1-1s-.4471-1-1-1h-6v-6c0-.552-.4471-1-1-1s-1 .448-1 1v6H8c-.5529 0-1 .448-1 1s.4471 1 1 1h6v6c0 .552.4471 1 1 1s1-.448 1-1v-6h6Z" clip-rule="evenodd"/></svg>
              </div>
            </summary>
            <p class="mt-5 text-mapla-dark-100">
            Pellentesque felis lorem, vulputate in pellentesque ut, faucibus ut nibh. Proin convallis, tortor sit amet rhoncus ornare, velit ligula pretium ex, at ultrices sapien massa a sem. Sed accumsan blandit ligula, vitae volutpat odio vehicula id. Donec commodo molestie orci, at tempor purus iaculis vitae. Mauris eget est sit amet diam sodales vulputate sodales nec tellus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce pellentesque pretium leo nec commodo. Aliquam porttitor ullamcorper ipsum, in vulputate nisl mollis a. Fusce convallis massa id consectetur congue. Sed id ex lacus. Mauris at sem eget sem sodales pretium. Vestibulum nec maximus neque, ut ultrices libero.
            </p>
            <div class="summary-chevron-down absolute top-4 right-4 pointer-events-none ">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="26" viewBox="0 0 30 31" fill="none"><path fill="#5600B9" fill-rule="evenodd" d="M4.394 4.5636C7.2263 1.7304 10.9931.17 15 .17c4.0066 0 7.7734 1.5605 10.606 4.3941C28.4395 7.397 30 11.164 30 15.1701s-1.5604 7.7729-4.394 10.6061c-2.8323 2.8332-6.5994 4.3937-10.606 4.3937s-7.7734-1.5604-10.606-4.3941C1.5605 22.943 0 19.1758 0 15.1697c0-4.006 1.5604-7.773 4.394-10.606ZM15 28.2948c3.5057 0 6.8019-1.3655 9.2806-3.8447 2.4792-2.4787 3.8446-5.7744 3.8446-9.2802 0-3.5057-1.3655-6.8012-3.8446-9.2801C21.8019 3.4106 18.5057 2.045 15 2.045S8.1981 3.4106 5.7194 5.8898c-2.4792 2.4787-3.8446 5.7744-3.8446 9.2801 0 3.5058 1.3655 6.8013 3.8446 9.2802C8.198 26.9293 11.4943 28.2948 15 28.2948Z" clip-rule="evenodd"/><path fill="#5600B9" d="M23.4373 14.2324H6.5625c-.5175 0-.9375.42-.9375.9375 0 .5175.42.9375.9375.9375h16.8748c.5175 0 .9375-.42.9375-.9375 0-.5175-.42-.9375-.9375-.9375Z"/></svg>
            </div>
          </details>
          <details class="details relative py-4 px-8 border border-slate-200 rounded-[20px]">
            <summary class="group flex justify-between cursor-pointer list-none">
              <span class="text-mapla-dark-200 font-bold text-lg">Pregunta frecuente 1</span>
              <div class="summary-chevron-up absolute top-4 right-4 pointer-events-none ">
               <svg xmlns="http://www.w3.org/2000/svg" width="25" height="26" viewBox="0 0 30 31" fill="none"><path fill="#5600B9" fill-rule="evenodd" d="M15 .17C6.7291.17 0 6.899 0 15.1698c0 8.2709 6.7291 15 15 15 8.2709 0 15-6.7291 15-15 0-8.2708-6.7291-15-15-15Zm0 27.9999c-7.168 0-13-5.832-13-13s5.832-13 13-13 13 5.832 13 13-5.832 13-13 13Zm7-12c.5529 0 1-.448 1-1s-.4471-1-1-1h-6v-6c0-.552-.4471-1-1-1s-1 .448-1 1v6H8c-.5529 0-1 .448-1 1s.4471 1 1 1h6v6c0 .552.4471 1 1 1s1-.448 1-1v-6h6Z" clip-rule="evenodd"/></svg>
              </div>
            </summary>
            <p class="mt-5 text-mapla-dark-100">
            Pellentesque felis lorem, vulputate in pellentesque ut, faucibus ut nibh. Proin convallis, tortor sit amet rhoncus ornare, velit ligula pretium ex, at ultrices sapien massa a sem. Sed accumsan blandit ligula, vitae volutpat odio vehicula id. Donec commodo molestie orci, at tempor purus iaculis vitae. Mauris eget est sit amet diam sodales vulputate sodales nec tellus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce pellentesque pretium leo nec commodo. Aliquam porttitor ullamcorper ipsum, in vulputate nisl mollis a. Fusce convallis massa id consectetur congue. Sed id ex lacus. Mauris at sem eget sem sodales pretium. Vestibulum nec maximus neque, ut ultrices libero.
            </p>
            <div class="summary-chevron-down absolute top-4 right-4 pointer-events-none ">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="26" viewBox="0 0 30 31" fill="none"><path fill="#5600B9" fill-rule="evenodd" d="M4.394 4.5636C7.2263 1.7304 10.9931.17 15 .17c4.0066 0 7.7734 1.5605 10.606 4.3941C28.4395 7.397 30 11.164 30 15.1701s-1.5604 7.7729-4.394 10.6061c-2.8323 2.8332-6.5994 4.3937-10.606 4.3937s-7.7734-1.5604-10.606-4.3941C1.5605 22.943 0 19.1758 0 15.1697c0-4.006 1.5604-7.773 4.394-10.606ZM15 28.2948c3.5057 0 6.8019-1.3655 9.2806-3.8447 2.4792-2.4787 3.8446-5.7744 3.8446-9.2802 0-3.5057-1.3655-6.8012-3.8446-9.2801C21.8019 3.4106 18.5057 2.045 15 2.045S8.1981 3.4106 5.7194 5.8898c-2.4792 2.4787-3.8446 5.7744-3.8446 9.2801 0 3.5058 1.3655 6.8013 3.8446 9.2802C8.198 26.9293 11.4943 28.2948 15 28.2948Z" clip-rule="evenodd"/><path fill="#5600B9" d="M23.4373 14.2324H6.5625c-.5175 0-.9375.42-.9375.9375 0 .5175.42.9375.9375.9375h16.8748c.5175 0 .9375-.42.9375-.9375 0-.5175-.42-.9375-.9375-.9375Z"/></svg>
            </div>
          </details>
          <details class="details relative py-4 px-8 border border-slate-200 rounded-[20px]">
            <summary class="group flex justify-between cursor-pointer list-none">
              <span class="text-mapla-dark-200 font-bold text-lg">Pregunta frecuente 1</span>
              <div class="summary-chevron-up absolute top-4 right-4 pointer-events-none ">
               <svg xmlns="http://www.w3.org/2000/svg" width="25" height="26" viewBox="0 0 30 31" fill="none"><path fill="#5600B9" fill-rule="evenodd" d="M15 .17C6.7291.17 0 6.899 0 15.1698c0 8.2709 6.7291 15 15 15 8.2709 0 15-6.7291 15-15 0-8.2708-6.7291-15-15-15Zm0 27.9999c-7.168 0-13-5.832-13-13s5.832-13 13-13 13 5.832 13 13-5.832 13-13 13Zm7-12c.5529 0 1-.448 1-1s-.4471-1-1-1h-6v-6c0-.552-.4471-1-1-1s-1 .448-1 1v6H8c-.5529 0-1 .448-1 1s.4471 1 1 1h6v6c0 .552.4471 1 1 1s1-.448 1-1v-6h6Z" clip-rule="evenodd"/></svg>
              </div>
            </summary>
            <p class="mt-5 text-mapla-dark-100">
            Pellentesque felis lorem, vulputate in pellentesque ut, faucibus ut nibh. Proin convallis, tortor sit amet rhoncus ornare, velit ligula pretium ex, at ultrices sapien massa a sem. Sed accumsan blandit ligula, vitae volutpat odio vehicula id. Donec commodo molestie orci, at tempor purus iaculis vitae. Mauris eget est sit amet diam sodales vulputate sodales nec tellus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce pellentesque pretium leo nec commodo. Aliquam porttitor ullamcorper ipsum, in vulputate nisl mollis a. Fusce convallis massa id consectetur congue. Sed id ex lacus. Mauris at sem eget sem sodales pretium. Vestibulum nec maximus neque, ut ultrices libero.
            </p>
            <div class="summary-chevron-down absolute top-4 right-4 pointer-events-none ">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="26" viewBox="0 0 30 31" fill="none"><path fill="#5600B9" fill-rule="evenodd" d="M4.394 4.5636C7.2263 1.7304 10.9931.17 15 .17c4.0066 0 7.7734 1.5605 10.606 4.3941C28.4395 7.397 30 11.164 30 15.1701s-1.5604 7.7729-4.394 10.6061c-2.8323 2.8332-6.5994 4.3937-10.606 4.3937s-7.7734-1.5604-10.606-4.3941C1.5605 22.943 0 19.1758 0 15.1697c0-4.006 1.5604-7.773 4.394-10.606ZM15 28.2948c3.5057 0 6.8019-1.3655 9.2806-3.8447 2.4792-2.4787 3.8446-5.7744 3.8446-9.2802 0-3.5057-1.3655-6.8012-3.8446-9.2801C21.8019 3.4106 18.5057 2.045 15 2.045S8.1981 3.4106 5.7194 5.8898c-2.4792 2.4787-3.8446 5.7744-3.8446 9.2801 0 3.5058 1.3655 6.8013 3.8446 9.2802C8.198 26.9293 11.4943 28.2948 15 28.2948Z" clip-rule="evenodd"/><path fill="#5600B9" d="M23.4373 14.2324H6.5625c-.5175 0-.9375.42-.9375.9375 0 .5175.42.9375.9375.9375h16.8748c.5175 0 .9375-.42.9375-.9375 0-.5175-.42-.9375-.9375-.9375Z"/></svg>
            </div>
          </details>
        </section>
      </div>
      </section>
    </main>
<?= $this->endSection() ?>
