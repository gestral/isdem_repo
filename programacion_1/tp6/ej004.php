
<?php
// 4. Escribir un programa que cargue un vector con los primeros veinte
// números pares y calcule su suma. Mostrarlo.

    $vector = [];
    $suma = 0;

    for ($i = 1; $i <= 20; $i++) {
        if ($i % 2 == 0) {
            $vector[] = $i;
            $suma += $i; 
        }
    }

    foreach ($vector as $numero) {
        echo $numero . "<br>";
    }

    echo "La suma de los primeros veinte números pares es: " . $suma;

	
?>

