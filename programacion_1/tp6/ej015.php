<?php
// 15. Usando el ejercicio anterior recorra la matriz por filas y luego por
// columnas.
	$a = [
		[1,2,3],
		[4,5,6],
		[7,8,9]
	];
	

	for ( $i = 0; $i <= 2; $i++){
		foreach( $a as $arreglo){
			echo $arreglo[$i] . "<br>";
		}
	}
	
	

	
?>

