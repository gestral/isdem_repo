<?php
// 20.Dado el nombre de una persona y un número N ingresados por el
//         usuario, mostrarlo N veces seguidas, tanto el nombre como su repetición.
//         Por Ej: Ana 1, Ana 2, Ana 3…; con un ciclo WHILE.

$nombre = $_POST["n1"];
$N = $_POST["n2"];
$i = 1;

while ($i <= $N) {

    echo $nombre . " " . $i . "<br>";
    $i++;

}
?>