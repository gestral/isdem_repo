<?php

echo "<b>Consigna N°1</b> <br>";
echo "Crear 2 variables númericas, calcular y mostrar la suma de los 2 valores. <br>";

$a = 52;
$b = 43;

echo "Número 1: ". $a. "<br>";
echo "Número 2: ". $b. "<br>";
echo "Suma: ". $a + $b. "<br>";

// -------------------------------------------------------------------------------------------

echo "<br><b>Consigna N°2</b> <br>";
echo "Crear 2 variables númericas, calcular y mostrar el producto de los 2 valores. <br>";

$a = 5;
$b = 4;

echo "Número 1: ". $a. "<br>";
echo "Número 2: ". $b. "<br>";
echo "Producto: ". $a * $b. "<br>";

// -------------------------------------------------------------------------------------------

echo "<br><b>Consigna N°3</b> <br>";
echo "Crear 2 variables númericas, calcular y mostrar el promedio de ambos valores. <br>";

$a = 25;
$b = 14;

echo "Número 1: ". $a. "<br>";
echo "Número 2: ". $b. "<br>";
echo "Promedio: ". ($a + $b) / 2 . "<br>";

// -------------------------------------------------------------------------------------------

echo "<br><b>Consigna N°4</b> <br>";
echo "Crear 1 variable $ base y otra $ altura, calcular y mostrar el area de un triangulo. <br>";

$base = 2;
$altura = 23;

echo "Base: ". $base. "<br>";
echo "Altura: ". $altura. "<br>";
echo "Area de un triangulo: ". ($base * $altura) / 2 . "<br>";

// -------------------------------------------------------------------------------------------

echo "<br><b>Consigna N°5</b> <br>";
echo "En el curso hay 50 alumnos, 20 varones y 30 mujeres. Calcular y mostrar el porcentaje 
de varones y mujeres en el curso. <br>";

$total = 50;
$varones = 20;
$mujeres = 30;

echo "Total: ". $total. "<br>";
echo "Varones: ". $varones. "<br>";
echo "Mujeres: ". $mujeres. "<br>";
echo "Porcentaje de varones: ". ($varones * 100) / $total . "<br>";
echo "Porcentaje de mujeres: ". ($mujeres * 100) / $total . "<br>";
?>
