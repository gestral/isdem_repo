<?php
// 5. Un profesor desea saber el porcentaje varones y mujeres de su clase
//         sabiendo que tiene N alumnos en total, CV varones y CM mujeres. El
//         profesor tiene que poder ingresar al programa los valores de N, CV y CM.

$N = $_POST["n1"];
$CM = $_POST["n2"];
$CV = $_POST["n3"];

if (($CM + $CV) != $N){
    echo "El total de alumnos es incorrecto.";
}
else{
    $total_alumnos = ($CV * 100) / $N;
    $total_alumnas = ($CM * 100) / $N;

    echo "Porcentaje de alumnos: $total_alumnos% <br>";
    echo "Porcentaje de alumnas: $total_alumnas%";    
}

?>