<?php
// 7. Escribir un programa que permita cargar 10 números en un vector y
// determine la posición en la que se encuentra en máximo valor y la
// posición en la que se encuentra el mínimo valor.

	$arreglo = [];

	for($i = 1; $i <= 10; $i++){
		$arreglo[] = $_POST["n$i"];
	}
	$max = $arreglo[0];
	$min = $arreglo[0];

	for($i = 0; $i < count($arreglo); $i++){
		if($arreglo[$i] > $max){
			$max = $arreglo[$i];
			$posMax = $i;
		}
		if($arreglo[$i] < $min){
			$min = $arreglo[$i];
			$posMin = $i;
		}
	}
	echo "El número máximo es $max y se encuentra en la posición $posMax.<br>";
	echo "El número mínimo es $min y se encuentra en la posición $posMin.";
?>