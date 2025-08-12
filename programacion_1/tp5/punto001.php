<?php
//1) Calcular la suma de dos valores ingresados por el usuario.
$valor1 = $_POST["n1"];
$valor2 = $_POST["n2"];
$suma = $valor1 + $valor2;

echo "La suma de los dos valores ingresados por el usuario ($valor1 y $valor2) es: $suma.";
?>