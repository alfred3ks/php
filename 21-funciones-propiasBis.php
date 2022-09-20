<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funciones Propias</title>
</head>

<body>
  <h1>Funciones Propias</h1>
  <?php

  // Definimos una variable:
  $inventada = 145;



  function azar($accion)
  {
    // Simulamos el cara o sello.
    $moneda = rand(0, 1);
    if ($moneda == 0) {
      echo "<d>$moneda</d>";
      echo "<p>No deberias: " . $accion . "</p>";
    } else {
      echo "<d>$moneda</d>";
      echo "<p>Ya estas tardando en: " . $accion . "</p>";
    }
  }

  azar("dormir");

  function calculadora($a, $b, $operacion)
  {
    switch ($operacion) {
      case 'suma':
        $result = $a + $b;
        break;
      case 'resta':
        $result = $a - $b;
        break;
      case 'producto':
        $result = $a * $b;
        break;
      case 'division':
        $result = $a / $b;
        break;
      default:
        echo "Numeros incorrectos";
        break;
    }
    return $result;
  }


  $calculo = "El resultado es: " . calculadora(3, 5, "suma");
  echo "$calculo";

  ?>

</body>

</html>