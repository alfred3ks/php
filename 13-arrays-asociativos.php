<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrays asociativos.</title>
</head>

<body>
  <?php
  /*

  Arrays asociativos.
  Estos se construyen en la sintaxis clave valor.

  */

  // Un array con el constructor: Este tipo de array es dificil para acceder a la informacion sobre todo cuando es muy grande.
  $post = array(
    "Aprende a programar en PHP de forma facil.",
    "Silvia Martin",
    6,
    false
  );

  // Accedemos a los valores:
  echo 'Numero de comentarios: ' . $post[2];
  echo '<br>';

  // Arrays asociativo: clave - valor
  $newPost = array(
    'titulo' => 'Aprende a programar en PHP de forma facil.',
    'autor' => 'Silvia Martin',
    'numCom' => 6,
    'isAdmin' => false
  );

  echo '<br>';
  // Asi accedemos a los valores:
  echo "El titulo del post es: " . $newPost['titulo'] . " y tiene " . $newPost['numCom'] . " comentarios.";
  ?>
</body>

</html>