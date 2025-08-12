<?php
echo "<b>Consigna N°1</b> <br>";
echo "Escribir un programa que, dada la edad en años de una persona, muestre: “Eres mayor de edad” o “No eres mayor de edad” según la edad
ingresada (18 años cumplidos para ser mayor de edad). <br>";

$edad = 19;

echo "Edad: ". $edad. "<br>";
echo "Salida: ";
if ($edad >= 18) {
    echo "Eres mayor de edad";
} else {
    echo "No eres mayor de edad";
}

// -------------------------------------------------------------------------------------------

echo "<br><br><b>Consigna N°2</b> <br>";
echo "Escribir un programa que permita leer dos valores A y B y que escriba cuál es el mayor. <br>";

$A = 10;
$B = 20;
echo "Valor A: ". $A. "<br>";
echo "Valor B: ". $B. "<br>";
if ($A > $B) {
    echo "El mayor es: ". $A;
} elseif ($B > $A) {
    echo "El mayor es: ". $B;
} else {
    echo "Ambos son iguales";
}

// -------------------------------------------------------------------------------------------

echo "<br><br><b>Consigna N°3</b> <br>";
echo "Escribir un algoritmo que lea los Nombres y Edades de 2 personas e imprima cuál de ellas tiene más edad o si son de la misma edad. El
mensaje de salida tiene que ser como por ej.: “Ana tiene mayor edad que Carolina”; “Carolina tiene mayor edad que Ana”; “Ana y Carolina tienen
la misma edad”. <br>";

$nombre1 = "Ana";
$edad1 = 20;
$nombre2 = "Carolina";
$edad2 = 20;

echo "Nombre 1: ". $nombre1. "<br>";
echo "Edad 1: ". $edad1. "<br>";
echo "Nombre 2: ". $nombre2. "<br>";
echo "Edad 2: ". $edad2. "<br>";
echo "Salida: ";

if ($edad1 > $edad2) {
    echo "$nombre1 tiene mayor edad que $nombre2";
} elseif ($edad2 > $edad1) {
    echo "$nombre2 tiene mayor edad que $nombre1";
} else {
    echo "$nombre1 y $nombre2 tienen la misma edad";
}

// -------------------------------------------------------------------------------------------

echo "<br><br><b>Consigna N°4</b> <br>";
echo "Escribir un programa que dadas tres variables nombre (por ej. Carlos), apellido (por ej. Gómez) y dni (por ej. 32234134) de una persona,
muestre por pantalla el siguiente mensaje: “Bienvenido Sr/a. Gómez DNI 32234134!! Un gusto recibirlo/a Carlos.” <br>";

$nombre = "Carlos";
$apellido = "Gómez";
$dni = 32234134;

echo "Nombre: ". $nombre. "<br>";
echo "Apellido: ". $apellido. "<br>";
echo "DNI: ". $dni. "<br>";

echo "Salida: ";

echo "Bienvenido Sr/a. $apellido DNI $dni!! Un gusto recibirlo/a $nombre.";

// -------------------------------------------------------------------------------------------

echo "<br><br><b>Consigna N°5</b> <br>";
echo "Escribir un programa que dada la nota de un examen muestre “Promocionado” (7 a 10), “Regular” (4 a 6) o “Libre” (0 a 3) según la nota
ingresada. <br>";

$nota = 8;

echo "Nota: ". $nota. "<br>";

echo "Salida: ";
if ($nota >= 7 && $nota <= 10) {
    echo "Promocionado";
} else if ($nota >= 4 && $nota < 7) {
    echo "Regular";
} else if ($nota >= 0 && $nota < 4) {
    echo "Libre";
} else {
    echo "Nota inválida";
}

// -------------------------------------------------------------------------------------------

echo "<br><br><b>Consigna N°6</b> <br>";
echo "Escribir un programa que dada la edad de una persona y una variable booleana si tiene entrada o no, valide si la persona es mayor o igual a 16
años y si tiene entrada. Caso afirmativo muestre el cartel “Usted SI puede entrar a la sala de cine, que disfrute la película!”. Si cualquiera de los dos
requisitos no se cumple muestra el cartel “Usted NO puede entrar a la sala de cine, lo siento mucho!”. <br>";

$edad = 17;
$entrada = true;

echo "Edad: ". $edad. "<br>";
echo "Entrada: ". $entrada . "<br>";

echo "Salida: ";
if ($edad >= 16 && $entrada) {
    echo "Usted SI puede entrar a la sala de cine, que disfrute la película!";
} else {
    echo "Usted NO puede entrar a la sala de cine, lo siento mucho!";
}

// -------------------------------------------------------------------------------------------

echo "<br><br><b>Consigna N°7</b> <br>";
echo "Escribir un programa que, dados dos nombres, valide en una misma instrucción si alguno de ellos es “Franco”. Si cualquiera de los nombres lo
es, muestre “Inicio de sesión válido”, caso contrario “Inicio de sesión inválido”. <br>";

$nombre1 = "Franco";
$nombre2 = "Juan";

echo "Nombre 1: ". $nombre1. "<br>";
echo "Nombre 2: ". $nombre2. "<br>";

echo "Salida: ";

if ($nombre1 == "Franco" || $nombre2 == "Franco") {
    echo "Inicio de sesión válido";
} else {
    echo "Inicio de sesión inválido";
}
?>
