<?php
// 17. Desarrolle un programa que dada una matriz de NxN realice y muestre la
// suma de cada una de las filas.
// 2 4 6 Suma= 12
// 3 9 1 Suma= 13
// 2 8 1 Suma= 11

$a = [
		[2,4,6],
		[3,9,1],
		[2,8,1]
	];

for($i = 0; $i <= 2; $i++){
	$suma = 0;
	for($j = 0; $j <= 2; $j++){
		$suma += $a[$i][$j];
	}
	echo "Suma de la fila " . $i+1 . ": $suma <br/>";
}

?>