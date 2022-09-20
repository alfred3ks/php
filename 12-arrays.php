<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrays</title>
</head>

<body>
  <?php
  /*
  Los array en PHP o tambien llamados arreglos. []

  Un array, es un tipo de dato estructurado que permite almacenar variables. Podemos asiganarles distintos variables al mismo tiempo, cada variable como una posicion en dicho array. Podemos encontrar dentro del array valores de diferentes tipos.

  OJO En PHP tenemos una funcion bastante interesante que nos aporta la información de las variables.

  var_dump($variable): Mostrar informacion de una variable. Nos mostrara la salida por el navegador. Se le pasa por parametro la variable que deseemos conocer su tipo.

  Para los arrays exiten dos sintaxis en PHP.
  Los arrays comienzan en la posicion cero.

  */

  // Vemos como va var_dump():
  $nombre = "Tom";
  var_dump($nombre); // string(3) "Tom"

  echo "<br>";

  // Ahora vamos a trabajar con los arrays: Primera sintaxis:
  $frutas = ["Manzana", "Melon", "Pera"];
  var_dump($frutas); // array(3) { [0]=> string(7) "Manzana" [1]=> string(5) "Melon" [2]=> string(4) "Pera" }
  echo "<br>";

  // Para acceder a los valores, accedemos a sus indices:
  echo "La fruta en la posicion 0 es: " . $frutas[0];
  echo "<br>";
  echo "La fruta en la posicion 1 es: " . $frutas[1];
  echo "<br>";
  echo "La fruta en la posicion 2 es: " . $frutas[2];
  echo "<br>";

  // Vamos a ver la segunda sintaxis, se trata de utilizar el constructor array:
  $personas = array("Batman", "Robin", "Alfred");

  echo "La persona en el arrray de la posicion 0 : " . $personas[0];
  echo "<br>";
  echo "La persona en el arrray de la posicion 1 : " . $personas[1];
  echo "<br>";
  echo "La persona en el arrray de la posicion 2 : " . $personas[2];
  echo "<br>";

  $miscelaneos = array("David", "Gomez", 22, true, 49.80);
  echo "<br>";
  echo "nombre : " . $miscelaneos[0];
  echo "<br>";
  echo "apellido : " . $miscelaneos[1];
  echo "<br>";
  echo "edad : " . $miscelaneos[2];
  echo "<br>";
  echo "isDev : " . $miscelaneos[3];
  echo "<br>";
  echo "distancia : " . $miscelaneos[4];
  echo "<br>";

  echo "El ciudadano " . $miscelaneos[0] . " tiene " . $miscelaneos[2] . " años. Y ha recorrido el la ultima maraton la distancia de " . $miscelaneos[4] . "KM.";
  ?>
</body>

</html>