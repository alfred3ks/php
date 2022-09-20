<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alcance de las variables y las funciones.</title>
</head>

<body>
  <h1>Alcance de las variables y las funciones.</h1>
  <?php
  /*

  Este tema es importante.
  Usaremos el fichero anterior para ver el tema del alcance, funciones-propiasBis.php

  Vamos a suponer que en ese fichero fuera de las funciones definimos una variable.

  Ahora imprimimos esa variable aqui: No muestra nada, eso es porque el alcance de esa variable se limita a su propio archivo o fichero.

  El alcance se limita al acceso que tendremos a ella en un momento concreto.

  Podemos definir variables locales para poder acceder a ellas de manera global. Esto no es recomendado. Se usa la palabra reservada global $variable;

  */

  // Variable fuera
  echo $inventada;

  // Esta variable tiene alcance global:
  // $cms = "WordPress";

  function ejemplo()
  {
    // Esta variable tiene alcance local solo en la funcion pero si le ponemos la palabra global siguiente se su nombre se hace global:
    global $cms;
    $cms = "WordPress";

    echo "<p><strong>Dentro de la función:</strong> Estoy en un curso de desarrollo de temas para: " . $cms . "</p>";
  }

  ejemplo();

  echo "<p><strong>Fuera de la función:</strong> Estoy en un curso de desarrollo de temas para: " . $cms . "</p>";

  ?>
</body>

</html>