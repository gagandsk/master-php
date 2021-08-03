<?php
/*TIPOS DE DATOS

    - int = 10;
    - float  = 10.10;
    - string = "cadena d texto";
    - boolean = true/false;
    - null
    - array (coleccion de datos)
    - objetos

*/

$falso = false;
$nula = null;
$numero = 1;
$string = "Imprimimos una variable: $numero";
//$string = "Imprimimos una variable: \"$numero\"";
$decimal = 10.10;
$verdadero = true;

//gettype() = nos devuelte el tipo de dato

/*
Trucos en consola
    - \n = salto de linia
    - \t = taulador
*/

echo $nula.' - '.gettype($nula).'<br/>';
echo $falso.' - '.gettype($falso).'<br/>';
echo $string.' - '.gettype($string).'<br/>';
echo $numero.' - '.gettype($numero).'<br/>';
echo $decimal.' - '.gettype($decimal).'<br/>';
echo $verdadero.' - '.gettype($verdadero).'<br/>';


//Debugear
$mi_nombre = "Gagan";
var_dump($mi_nombre);


?>