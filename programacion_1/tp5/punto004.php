<?php
// 4. Calcular el área de un triángulo dada su base y altura, que son ingresadas
//         por el usuario. Fórmula a aplicar: sup=(base*altura)/2.

$base = $_POST["n1"];
$altura = $_POST["n2"];
$area = ($base * $altura) / 2;

echo "El area del triangulo con los valores ingresados por el usuario ($base y $altura) es: $area.";
?>