<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog de negocios familiar</title>
</head>

<body>
  <!-- Header -->
  <header>
    <h1>Bienvenidos a negocios Corleone</h1>
    <?php $page = "blog";
    if ($page == "blog") : ?>
      <h3>Blog del sitio</h3>
    <?php else : ?>
      <h3>Home:</h3>
    <?php endif; ?>
  </header>