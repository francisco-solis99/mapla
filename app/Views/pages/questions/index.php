<?= $this->extend('layouts/default') ?>

<?= $this->section('head') ?>
    <title>Preguntas Frecuentes | Pinturas Mapla</title>
    <meta name="description" content="Decora tu proyecto con los mejores productos especializados para las agresivas condiciones climatológicas del Caribe Mexicano"/>
<?= $this->endSection() ?>


<?= $this->section('javascript') ?>
    <script src="<?= base_url('js/components/navbar.js') ?>" defer type="module"></script>
    <script src="<?= base_url('js/components/questions.js') ?>" defer type="module"></script>
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
          <!-- Questions -->
          <?php foreach ($questions as $itr => $question): ?>
            <?= $this -> setVar('question', $question) ->include('components/Question') ?>
          <?php endforeach ?>
        </section>
      </div>
      </section>
    </main>
<?= $this->endSection() ?>
