<?php
// 17. Dado un X de una persona y un número X ingresados por el
//         usuario, mostrarlo X veces seguidas, utilizando el ciclo FOR.

$X = $_POST["n1"];
$nombre = $_POST["n2"];

for ($i = 1; $i <= $X; $i++) {
    echo $nombre . "<br>";
}

?>