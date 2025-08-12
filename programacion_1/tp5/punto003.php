<?php
// 3. Calcular y mostrar el promedio de dos números ingresados por el
//         usuario.

$valor1 = $_POST["n1"];
$valor2 = $_POST["n2"];

    $prom = ( $valor1 + $valor2 ) / 2;
    echo "El promedio de los dos valores ingresados por el usuario ($valor1 y $valor2) es: $prom.";

?>