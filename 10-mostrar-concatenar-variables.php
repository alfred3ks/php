<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mostrar y concatenar variables</title>
</head>

<body>
  <?php
  /*
  Vamos a ver como mostrar las variables en la pagina web y veremos como concatenar variables con texto o html.
  */

  // Declaramos unas variables:
  $tituloPost = "Aprende volar con estos sencillos pasos";
  $autorPost = "Layka Sanz";
  $numComentarios = 15;

  // Vamos a mostrar la información en la página:
  ?>

  <?php /* Esta forma me parece mas facil: Asi se usa en WordPress. */ ?>
  <p>
    El post: <strong><?php echo $tituloPost; ?></strong> de la autora <?php echo $autorPost; ?> que ha recibido <?php echo $numComentarios; ?> comentarios.
  </p>
  <br>

  <?php
  /* Vamos a ver ahora con el operador de concatenacion: Osea el PHP el punto (.) ... Me parece un poco mas engorroza.*/

  echo "<p>El post: <strong>" . $tituloPost . "</strong> de la autora " . $autorPost . " que ha recibido " . $numComentarios . " comentarios.</p>";

  ?>
</body>

</html>