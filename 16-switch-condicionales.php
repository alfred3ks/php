<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Multiples condicionales.</title>
</head>

<body>
  <?php
  /*
  Vamos a ver como hacer multiples condiciones a una situacion. Podemos usar la sentencia if() pero cuando tenemos que evaluar varias condiciones mejor hacerlo con un switch().

  */

  $precio_alquiler = 200;

  // Con el if()
  if ($precio_alquiler <= 100) {
    echo "Es demasiado barato.";
  } else if ($precio_alquiler <= 300) {
    echo "Es barato pero puede estar bien.";
  } else if ($precio_alquiler <= 500) {
    echo "Deberia tener 2 habitaciones";
  } else {
    echo "Por mas de 500, espero que incluyan parking.";
  }

  echo "<br>";


  // Con un switch()
  switch ($precio_alquiler) {
    case $precio_alquiler <= 100:
      echo "Es demasiado barato.";
      break;
    case $precio_alquiler <= 300:
      echo "Es barato pero puede estar bien.";
      break;
    case $precio_alquiler <= 500:
      echo "Deberia tener 2 habitaciones";
      break;
    default:
      echo "Por mas de 500, espero que incluyan parking.";
      break;
  }

  echo "<br>";

  // Ejemplo mas util:
  $comida = "sushi";

  if ($comida == "sushi") {
    echo "Me encanta.";
  } else if ($comida == "carpacho") {
    echo "Esta tremendo.";
  } else {
    echo "No es para tirar cohetes...";
  }

  echo "<br>";

  switch ($comida) {
    case "sushi":
      echo "Me encanta.";
      break;
    case "carpacho":
      echo "Esta tremendo.";
      break;
    default:
      echo "No es para tirar cohetes...";
      break;
  }

  ?>

</body>

</html>