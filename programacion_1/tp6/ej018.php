<?php
// 18. Desarrolle un programa que dada una matriz de NxN realice y muestre la
// suma de cada una de las columnas.
// 2 2 4
// 3 3 1
// 2 1 3

$a = [
		[2,2,4],
		[3,3,1],
		[2,1,3]
	];

for($i = 0; $i <= 2; $i++){
	$suma = 0;
	for($j = 0; $j <= 2; $j++){
		$suma += $a[$j][$i];
	}
	echo "Suma de la columna " . $i+1 . ": $suma <br/>";
}

?>