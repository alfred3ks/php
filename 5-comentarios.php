<!--


Vamos ver la forma de incluir comentarios en PHP:
Para comentarios de una sola linea usaremos las dobles barras inclinada:

Esto seria un comentario de una linea¨
// Comentario de una sola linea.


Para comentarios de varias lineas usaremos la barra con el asterisco:
/*
Esto es un comentario
de varias
lineas.
*/


-->

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Comentarios en PHP</title>
</head>

<body>
  <?php

  // Mostramos una cadena de texto:
  echo "Hola me llamo Pepito";

  // Mostramos una cadena de texto con codigo HTML:
  echo "<p>Esto es un texto dentro de etiquetas <strong>HTML</strong>.</p>";

  /*
  Aqui vemos como se ve
  el comentario dentro
  de PHP
  */

  ?>

</body>

</html>