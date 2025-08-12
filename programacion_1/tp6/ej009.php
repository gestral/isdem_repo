<?php
// 9. Calcular la estatura promedio de una clase de 10 alumnos y determinar
// cuántos alumnos son más altos que el promedio y cuántos son más bajos
// que dicho promedio.

$alumnos = array(1.80, 2.40, 1.10, 2.16, 1.50, 1.20, 1.15, 1.12, 0.50, 1.67);
$suma = 0;
$cont = 0;

foreach($alumnos as $valor){
	$suma += $valor;
	$cont++;
	$prom= $suma/$cont;
}

echo"Altura promedio: $prom<br/>";

?>