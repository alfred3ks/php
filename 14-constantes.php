<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Las constantes</title>
</head>

<body>
  <?php

  /*

  Las constantes: Estas no pueden variar su contenido una ves definidad.
  Para declarar las contantes se usa la palabra reservada define(), recibe un primer parametro que es el primer valor en mayuscula, ese es el nombre de la constante, y el segundo parametro es el valor de la constante.

  */

  // Vamos a definir una ruta hacia una carpeta de imagenes:
  define('RUTA', '/assets/img/');
  echo RUTA;

  echo "<br>";

  define('PI', 3.1416);
  $num = 12.456;
  echo PI * $num;

  ?>
</body>

</html>