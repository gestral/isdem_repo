<?php
// 16. Desarrolle un programa que dada una matriz de 3x3 determine la posición en la que se 
// encuentra el valor máximo. Por ejemplo: para la siguiente matriz. 
// 23 24 68 
// 34 99 12 
// 25 78 89
	$a = [
		[23,24,68],
		[34,99,12],
		[25,78,89]
	];
	
	$mayor = 0;

	for ( $i = 0; $i <= 2; $i++){
		for ($j = 0; $j <= 2; $j++){
			if ( $a[$i][$j] > $mayor){
				$mayor = $a[$i][$j];
			}
		}
	}

	echo "En mayor es: $mayor"
	

	
?>

