<?php
// 7. Desarrolle un programa que permita ingresar un valor cualquiera X y
//         escribir si dicho número es par o impar.

$X = $_POST["n1"];

if ( $X % 2 == 0 ){
    echo "El número ingresado es par.";
}
else{
    echo "El número ingresado es impar.";
}
?>