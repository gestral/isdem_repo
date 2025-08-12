<?php
// 10. Escriba un programa que solicite al usuario 20 valores enteros y los
// almacene en un vector y posteriormente los muestre en el orden inverso
// en el que fueron ingresados y además calcule y muestre el valor máximo,
// el valor mínimo y el promedio de los elementos del vector.

$arreglo = [];

for($i = 1; $i <= 20; $i++){
	$arreglo[] = $_POST["n$i"];;
}

for($i = count($arreglo) - 1; $i >= 0; $i--){
	echo $arreglo[$i] . "<br/>";
}


?>