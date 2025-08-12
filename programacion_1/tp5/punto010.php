<?php
// 10. Escribir un programa que permita ingresar dos valores A y B, y que
//         escriba cuál es el mayor.

$A = $_POST["n1"];
$B = $_POST["n2"];

if ($A > $B) {
    echo "El mayor es: " . $A;
} elseif ($B > $A) {
    echo "El mayor es: " . $B;
} else {
    echo "Los números son iguales";
}

?>