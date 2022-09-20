<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bucle while y operador ++</title>
</head>

<body>
  <h1>El secreto del éxito.</h1>
  <?php
  /*

  Llego la hora de los bucles.
  Un bucle es un mecanismo que tienen los lenguajes de programacion con el cual podemos repetir la ejecucion de un codigo las veces que queramos.
  En el caso de este bucle, while() -> mientras, podemos ejecutar una serie de instrucciones miestras una condicion se mantenga verdadera, cuando esa condicion sea falsa, el bucle dejara de ejecutarse. Se continuara ejecutando resto del codigo.

  */

  $fracaso = 0;

  while ($fracaso <= 10) {
    echo "<p>Fracaso núnero:" . $fracaso . "</p>";
    $fracaso++; // $fracaso = $fracaso + 1;
  }

  echo "Genial lo has logrado!!!";

  $contador = 0;
  while ($contador <= 5) {
    echo "<p>Núnero:" . $contador . "</p>";
    $contador++;
  }







  ?>
</body>

</html>