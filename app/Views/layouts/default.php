<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="icon" href="/favicon.svg" type="image/svg+xml">
  <link href="/css/styles.css" rel="stylesheet">
  <?= $this->renderSection('head') ?>
</head>

<body>
   <!-- Slot  -->
   <main>
      <?= $this->renderSection('content') ?>
  </main>
    <!-- End slot -->
</body>
</html>

