<?php
// 13. Escriba en un array asociativo los países de Sudamérica (todos) con su
// superficie. Luego muestre por pantalla:
// a. Listado completo de Países y superficie.
// b. Superficie total de Sudamérica.
// c. Promedio de Superficie.
// d. País de mayor superficie.
// e. País de menor superficie.
	
	$total = 0;

	$paises = array(
		"Brasil" => 8515767,
		"Argentina" => 2780400,
		"Perú" => 1285216,
		"Colombia" => 1141748,
		"Bolivia" => 1098581,
		"Venezuela" => 916445,
		"Chile" => 756102,
		"Paraguay" => 406752,
		"Ecuador" => 283561,
		"Guyana" => 214969,
		"Uruguay" => 176215,
		"Surinam" => 163820,
		"Guayana Francesa" => 83534

	);

	$pais_mayor = " ";
	$pais_menor = " ";
	$num_mayor = $paises["Brasil"];
	$num_menor = $paises["Brasil"];

	foreach( $paises as $pais => $sup){
		echo $pais . " tiene " . $sup . " metros cuadrados.<br>";

		$total += $sup;

		if ( $sup >= $num_mayor ){
			$pais_mayor = $pais;
			$num_mayor = $sup;
		}
		if ( $sup <= $num_menor ){
			$pais_menor = $pais;
			$num_menor = $sup;
		}
	}

	echo "<br><br>";

	echo "Superficie total: $total <br><br>";
	
	echo "Superfie promedio: " . ($total / count($paises)) . "<br><br>";

	echo "Pais con mayor superficie: $pais_mayor<br><br>";

	echo "Pais con menor superficie: $pais_menor<br><br>";


	
?>

