<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variables de texto</title>
</head>

<body>
  <?php

  /*

Ahora vamos a ver cada una de las variables, comenzamos con las variables de texto o string.
Vamos a ver como es la sintaxis para declarar varaibles.

Sea del tipo que sea de variable siempre debemos empezar a declararlas usando el simbolo de dolar.

OJO PHP distingue de mayusculas y minusculas.

Tambien debemos saber que una variable puede cambiar su valor a lo largo de la ejecucion del programa si asi lo queremos.

*/

  // Declaramos nuestra variable de texto:
  $serie = "Stranger Things";

  // Otra variable: YA que distingue mayusculas y minusculas.
  $SERIE = "Fargo";

  // Cuando una variable es de mas de una palabra:
  // Dos opciones, 1-camalcase:
  $seriePreferida = "Lost";

  // Segunda opcion: Guiones bajos:
  $serie_preferida = "Lost";

  // Tambien podemos usar comillas simples:
  $actor = 'Al Pacino';
  $actor = "Al Pacino";

  // Ahora veamos como combinar dentro de una cadena las comillas: Necesitamos barra invertida:
  $fraseUno = "Mi actor favorito es: \"Tom Cruise\"";

  $fraseDos = 'Mi actor favorito es: \'Tom Cruise\'';

  // Mezclando ambas comillas:
  $fraseTres = "Mi actor favorito es: 'Tom Cruise'";
  $fraseCuatro = 'Mi perra se llama "Layka"';

  // Veamos un ejemplo con la funcion echo: Cambiaremos el valor:
  $ejemplo = "Haciendo negocios, bien fresco.";
  echo $ejemplo;
  echo "<br>";

  $ejemplo = "We have to go back.";
  echo $ejemplo;

  ?>

</body>

</html>