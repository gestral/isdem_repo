<?php
// 8. Escribir un programa que almacene en un vector los números primos
// comprendidos entre 1 y 100. Mostrarlos.

$primos = [];
for ($i = 2; $i <= 100; $i++) {
	$esPrimo = true;
	for ($j = 2; $j <= sqrt($i); $j++) {
		if ($i % $j == 0) {
			$esPrimo = false;
			break;
		}
	}
	if ($esPrimo) {
		$primos[] = $i;
	}
}

foreach ($primos as $primo) {
	echo $primo . "<br>";
}
?>