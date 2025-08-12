<?php
// 2. Calcular el producto de dos valores ingresados por el usuario.

$valor1 = $_POST["n1"];
$valor2 = $_POST["n2"];
$producto = $valor1 * $valor2;

echo "El producto de los dos valores ingresados por el usuario ($valor1 y $valor2) es: $producto.";
?>