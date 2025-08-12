<?php
// 19. Desarrolle un programa que permita cargar con números enteros una
// matriz de NxM y muestre a continuación la suma de sus elementos. Por
// ejemplo, dada la matriz:
// 3 2 4
// 1 1 2
// 5 0 1


$matriz = [];

// for ($i = 1; $i <= 3; $i++){
// 	$arreglo = [];
// 	for ($j = 0; $j <= 2; $j++){
// 		$k = $i+$j;
// 		$arreglo[] = $_POST["n$k"];
// 	}
// 	$matriz[] = $arreglo;
// }

		$arreglo = [];	
		$arreglo[] = $_POST["n1"];
		$arreglo[] = $_POST["n2"];
		$arreglo[] = $_POST["n3"];
	$matriz[] = $arreglo;

		$arreglo = [];	
		$arreglo[] = $_POST["n4"];
		$arreglo[] = $_POST["n5"];
		$arreglo[] = $_POST["n6"];
	$matriz[] = $arreglo;

		$arreglo = [];	
		$arreglo[] = $_POST["n7"];
		$arreglo[] = $_POST["n8"];
		$arreglo[] = $_POST["n9"];
	$matriz[] = $arreglo;

	
	$suma = 0;

	for ( $i = 0; $i <= 2; $i++){
		for ($j = 0; $j <= 2; $j++){
				$suma += $matriz[$i][$j];
		}
	}

	echo "La suma es: $suma";
	
?>

