
<?php
// 2. Escriba un programa que almacene y muestre en un vector sus nombres y
// apellido.
	$vector = [
        "Daniel" => "Gonzalez",
        "Maria" => "Lopez",
        "Juan" => "Perez",
        "Ana" => "Martinez",
    ];

    foreach ($vector as $nombre => $apellido) {
        echo $nombre . " " . $apellido . "<br>";
    }
	
?>

