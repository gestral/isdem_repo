<?php
// 18. Dado un número N ingresado por el usuario, mostrar los números pares
//         de 0 a N, con un ciclo FOR.

$N = $_POST["n1"];

for ($i = 1; $i <= $N; $i++) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
}
?>