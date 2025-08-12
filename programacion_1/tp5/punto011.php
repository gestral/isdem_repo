<?php
// 11. Escribir un programa para ingresar la nota de un examen y luego
//         mostrar “Promocionado” (7 a 10), “Regular” (4 a 6) o “Libre” (menor a 4)
//         según la nota ingresada.
        
$nota = $_POST["n1"];

if ($nota < 4 && $nota > 0) {
    echo "Libre";
} elseif ($nota < 7 && $nota >= 4) {
    echo "Regular";
} elseif ($nota < 10 && $nota >= 7) {
    echo "Promocionado";
}

?>