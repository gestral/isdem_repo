<?php

// Intregantes: 
// Colque, Daniel 
// Velazquez, Matias
// Olmos, Victor
// Estol, Tomas


$dias = array('lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado', 'domingo'); 
foreach ($dias as $dias) { echo $dias.' ';
}

//vector que muerstre nombres y apellido
echo "<br><br>";
$nombre= array('Carlos', 'Matias', 'Thomas', 'PatoLucas');
$apellido= array('caolque', 'Tastis', 'Sufies', 'Estoy');
  
foreach ($nombre as $item) {
     echo $item. '<br>';

}

echo '<br>';
foreach ($apellido as $valor){
    echo $valor. '<br>';
}

//almacene y muestre en un vector los numeros pares del 1 al 10
$num_pares= array();
for($i=1; $i>=10)
?>