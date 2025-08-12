<?php
// 13. Desarrolle un programa que permita leer tres valores A, B y C y luego
//         indique el menor de ellos.

$A = $_POST["n1"];
$B = $_POST["n2"];
$C = $_POST["n3"];

$menor = $A;
if ($B < $menor) {
    $menor = $B;
}
if ($C < $menor) {
    $menor = $C;
}
echo "El menor de los tres números es: $menor";
?>