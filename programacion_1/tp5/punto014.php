<?php
// 14. Escribir un programa que lea los nombres y edades de dos personas e
//         imprima cuál de ellas tiene más edad o si son de la misma edad.

$nombreA = $_POST["n1"];
$edadA = $_POST["n2"];
$nombreB = $_POST["n3"];
$edadB = $_POST["n4"];	

if ($edadA > $edadB) {
    echo "$nombreA es mayor que $nombreB";
}
elseif ($edadA == $edadB) {
    echo "Ambos tienen la misma edad";
}
else {
    echo "$nombreA es menor que $nombreB";
}

?>