<?php

/*
Ejercicio 4: Crea un script en php que tenga 4 variables (array, string, int, boolean) y
que imprima un mensaje segun el tipo de variable que sea.
*/

$animes = array('One Piece', 'Dragon ball Z', 'Attack on titans', 21, 'Naruto', 'Bleach');
$bandera = "Pirates del Barret de palla";
$tripulantes = 10;
$estado = true;

if(is_array($animes)){
    echo "<h1>El array es array</h1>";
}

if(is_string($bandera)){
    echo "<h1>$bandera</h1>";
}

if(is_integer($tripulantes)){
    echo "<h1>$tripulantes</h1>";
}

if(is_bool($estado)){
    echo "<h1>$bandera</h1>";
}




?>