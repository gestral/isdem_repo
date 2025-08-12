
<?php
// 5. Escriba un programa que solicite 5 números, los almacene en un array y
// luego calcule y muestre el promedio de esos números.

    $arreglo = [];

    $arreglo[] = $_POST["n1"];
	$arreglo[] = $_POST["n2"];
	$arreglo[] = $_POST["n3"];
    $arreglo[] = $_POST["n4"];
    $arreglo[] = $_POST["n5"];

    $prom = 0;

    for ($i = 0; $i < count($arreglo); $i++) {
        $prom += $arreglo[$i];
    }

    $prom /= count($arreglo);

    echo "El promedio de los números es: " . $prom;

	
?>

