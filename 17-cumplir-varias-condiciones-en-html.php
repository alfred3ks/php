<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Condicionales en HTML: que debo hacer</title>
</head>

<body>
  <h1>Que debo hacer?</h1>
  <?php
  /*

  Vamos a ver como podemos hacer un test que cumpla varias condiciones.
  En funcion del dia de la semana haremos algo.
  Veremos como combinar el php junto con el HTML.

  Operadores logicos: OR = ||
  (condicion1) OR (condicion1)
  true OR true : true
  true OR false : true
  false OR true : true
  false OR false : false

  Operadores logicos: AND = &&
  (condicion1) AND (condicion1)
  true AND true : true
  true AND false : false
  false AND true : false
  false AND false : false

  */

  $diaDeLaSemana = "sabado";
  $noche = true;

  if (($diaDeLaSemana == "sabado" || $diaDeLaSemana == "domingo")  && ($noche)) :
  ?>
    <p>Toca ver series de fin de semana.</p>
  <?php
  else :
  ?>
    <p>Toca grabar videos...</p>
  <?php
  endif;
  ?>

</body>

</html>