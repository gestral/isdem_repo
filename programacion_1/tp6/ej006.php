<?php
	// Escribir un programa que permita cargar 20 números enteros en un
	// vector y que dado otro número entero M busque dicho número dentro del
	// vector. El programa debe mostrar la posición en la que se encuentra
	// dicho número M o un mensaje de error indicando que el elemento no se
	// encuentra en el vector.

	$arreglo = [];

	for($i = 1; $i <= 20; $i++){
		$arreglo[] = $_POST["n$i"];;
	}

	$m = $_POST["n21"];

	for($i = 0; $i < count($arreglo); $i++){
		if($arreglo[$i] == $m){
			echo "El número $m se encuentra en la posición $i";
			break;
		}
		else if($i == count($arreglo)-1){
			echo "El número $m no se encuentra en el vector";
		}
	
	}
?>