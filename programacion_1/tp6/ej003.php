
<?php
// 3. Escriba un programa que almacene y muestre en un vector los números
// pares del 1 al 10.

	$vector = [];

    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            $vector[] = $i;
        }
    }

    foreach ($vector as $numero) {
        echo $numero . "<br>";
    }
	
?>

