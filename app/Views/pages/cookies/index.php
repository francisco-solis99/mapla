<?= $this->extend('layouts/default') ?>

<?= $this->section('head') ?>
    <title>Uso de Cookies | Mapla Pinturas y Soluciones</title>
    <meta name="description" content="Nuestra página web utiliza herramientas conocidas “cookies”. Estos son generados automáticamente y graban datos personales."/>

    <style>
      .shadow__link:hover {
        text-shadow: 0 0 .65px #333, 0 0 .65px #333;
      }
    </style>
<?= $this->endSection() ?>


<?= $this->section('javascript') ?>
    <script src="<?= base_url('js/components/navbar.js') ?>" defer type="module"></script>
<?= $this->endSection() ?>


<?= $this->section('content') ?>
  <main class="my-10">
    <div class="container min-h-[500px]">
      <hgroup class="mb-7 text-mapla-dark-200">
        <h1 class="font-black text-5xl">Politica de Cookies</h1>
        <p class="font-medium text-2xl">Integral</p>
      </hgroup>

      <section class="text-mapla-dark-100">
        <h2 class="my-5 text-3xl text-mapla-purple-200 font-bold">Uso de cookies y web beacons.</h2>
        <p>
        Es nuestro deber informarle que la página de Internet, utiliza herramientas conocidas “cookies” (Archivo de datos que se almacena en el disco duro del equipo de cómputo o del dispositivo de comunicaciones electrónicas de un usuario al navegar en un sitio de internet específico, el cual permite intercambiar información de estado entre dicho sitio y el navegador del usuario. La información de estado puede revelar medios de identificación de sesión, autenticación o preferencias del usuario, así como cualquier dato almacenado por el navegador respecto al sitio de internet; y “beacons” (Imagen visible u oculta insertada dentro de un sitio web o correo electrónico, que se utiliza para monitorear el comportamiento del usuario en estos medios. A través de éstos se puede obtener información como la dirección IP de origen, navegador utilizada, sistema operativo, momento en que se accedió a la página, y en el caso del correo electrónico, la asociación de los datos). Estos son generados automáticamente y graban lo que podría ser datos personales cuando se genera una conexión al sitio, así como también la recopilación de los siguientes datos: Tipo de navegador y sistema operativo; Dirección de IP y Fecha, hora y lugar de su visita.
  Cada usuario puede cambiar la configuración de las denominadas cookies, mediante la realización de los ajustes necesarios del navegador de Internet que utilice. Para mayor información favor de consultar la sección de Ayuda del navegador.
        </p>
      </section>
    </div>
  </main>
<?= $this->endSection() ?>
