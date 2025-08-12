<?php
// 8. Desarrolle un programa que permita ingresar un valor cualquiera A y
//         escribir si dicho número es múltiplo de Z = 7.

$valorA = $_POST["n1"];
$valorZ = 7;

if ( $valorA % $valorZ  == 0 ){
    echo "El número ingresado es múltiplo de Z.";
}
else{
    echo "El número ingresado no es múltiplo de Z.";
}
?>