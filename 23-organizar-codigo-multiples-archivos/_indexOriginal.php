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

  <!-- Body -->
  <article class="post-content">
    <div class="post-meta">
      <?php
      $autor = "Don Corleone";
      $category = "Negocios";
      ?>
      <span>Autor: <?php echo $autor; ?></span>
      |
      <span>Categoria: <?php echo $category; ?></span>
    </div><!-- .post-meta -->
    <div class="post-content">
      <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
      </p>
    </div><!-- .post-content -->
  </article><!-- .post-content -->

  <!-- footer -->
  <footer>
    <h5>Todos los derechos reservados a la Familia Corleone &copy;</h5>
  </footer>
</body>

</html>