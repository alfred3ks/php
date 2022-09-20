<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Los condicionales.</title>
</head>

<body>
  <?php
  /*

  Veremos las sentencias condicionales:
  Veremos como dejar que un usuario este logeado y sea administrador y pieda hacer cierta accion. Se deben cumplir ambas condiciones.
  Usaremos el condicional if()

  Aqui podemos ver que podemos usar operadores logicos:
  > -> mayor que,
  < -> menor que,
  >= -> mayor o igual que,
  <= -> menor o igual que,
  == -> igual que,
  != -> diferente que.

  */

  $logueado = false;
  $user = "Michael";

  // Primera sintaxis:
  if ($logueado) {
    echo "<p>Bienvenido <em>" . $user . "</em></p>";
  } else {
    echo "<p>El usuario no esta logueado.</p>";
  }

  // Segunda sintasis: La mas usada en WordPress:
  if ($logueado) :
    echo "<p>Bienvenido <em>" . $user . "</em></p>";
  else :
    echo "<p>El usuario no esta logueado.</p>";
  endif;

  // Comparacion defiendo valores:
  define('MAX', '100');
  $numeroAmigos = 5;

  if ($numeroAmigos < MAX) :
    echo "Tienes menos de " . MAX . " Amigos.";
  endif;

  echo "<br>";

  // Ahora con una cadena de texto:
  $nombre = 'Juana';

  if ($nombre == 'Juana') :
    echo "El nombre es correcto.";
  else :
    echo "El nombre no es igual.";
  endif;

  ?>
</body>

</html>