<?php
// 6. Escribir un programa que permita ingresar la edad en años de una
//         persona y luego mostrar “Eres mayor de edad” (18 o más) o “Eres menor
//         de edad” (menor a 18) según la edad ingresada.

$edad = $_POST["n1"];

if ( $edad >= 18 ){
    echo "Es mayor de edad, puede ingresar.";
}
else{
    echo "Es menor de edad, no puede ingresar.";
}
?>