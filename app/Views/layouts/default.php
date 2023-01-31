<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?= base_url('favicon.svg') ?>" type="image/svg+xml">
  <link href="<?= base_url('css/styles.css') ?>" rel="stylesheet">
  <!-- DYNAMIC HEAD -->
  <?= $this->renderSection('head') ?>
  <!-- JS -->
  <?= $this->renderSection('javascript') ?>
</head>

<body>
  <div class="wrapper-website">
    <!-- Header -->
    <?= $this->include('components/Header') ?>
    <!-- Slot content  -->
    <?= $this->renderSection('content') ?>
    <!-- Footer -->
    <?= $this->include('components/Footer') ?>
  </div>
</body>
</html>

