<?php
// 16. Dado un número N ingresado por el usuario, mostrar los números: 1 2 3
//         4 5 6 7 8 9 10 11 y así hasta N con un ciclo FOR.

$N = $_POST["n1"];

for ($i = 1; $i <= $N; $i++) {
    echo $i . "<br>";
}

?>