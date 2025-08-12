<?php
// 14. Desarrolle un programa que posea una matriz de 4 filas por 4 columnas
// con números enteros y luego muestre el contenido de la misma.
	
	$a = [
		[1,2,3],
		[4,5,6],
		[7,8,9]
	];
	
	foreach( $a as $arreglo){
		foreach( $arreglo as $num){
			echo "$num <br>";
		}
	}
	

	
?>

