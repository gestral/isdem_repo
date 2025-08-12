<?php
	// 12. Escriba en un array asociativo las Provincias Argentinas (todas) con su
	// cantidad de habitantes. Luego muestre por pantalla:
	// a. Listado completo de las provincias y habitantes.
	// b. Cantidad total de habitantes del País.
	// c. Promedio de habitantes.
	// d. Provincia con mayor cantidad de habitantes.
	// e. Provincia con menor cantidad de habitantes.
	
	$total = 0;

	$provincias = array(
		"Buenos Aires" => 17569053,
		"Ciudad Autónoma de Buenos Aires" => 3120612,
		"Córdoba" => 3978984,
		"Santa Fe" => 3556522,
		"Mendoza" => 2014533,
		"Tucumán" => 1703186,
		"Salta" => 1440672,
		"Entre Ríos" => 1426426,
		"Misiones" => 1280960,
		"Corrientes" => 1197553,
		"Chaco" => 1142963,
		"Santiago del Estero" => 1054028,
		"San Juan" => 818234,
		"Jujuy" => 797955,
		"Río Negro" => 762067,
		"Neuquén" => 726590,
		"Formosa" => 606041,
		"Chubut" => 603120,
		"San Luis" => 540905,
		"Catamarca" => 429556,
		"La Rioja" => 384607,
		"La Pampa" => 366022,
		"Santa Cruz" => 333473,
		"Tierra del Fuego, Antártida e Islas del Atlántico Sur" => 190641
	);
	$prov_mayor = " ";
	$prov_menor = " ";
	$num_mayor = $provincias["Buenos Aires"];
	$num_menor = $provincias["Buenos Aires"];
	
	foreach( $provincias as $prov => $hab ){
		echo $prov . " tiene " . $hab . " habitantes.<br>";

		$total += $hab;

		if ( $hab >= $num_mayor ){
			$prov_mayor = $prov;
			$num_mayor = $hab;
		}
		if ( $hab <= $num_menor ){
			$prov_menor = $prov;
			$num_menor = $hab;
		}

	}

	echo "<br><br>";

	echo "Total de habitantes: $total <br><br>";
	
	echo "Promedio de habitantes: " . ($total / count($provincias)) . "<br><br>";

	echo "Provincia con mayor cantidad de habitantes: $prov_mayor<br><br>";

	echo "Provincia con menor cantidad de habitantes: $prov_menor<br><br>";

?>

