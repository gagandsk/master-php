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
$string = "Master en PHP";
$decimal = 10.10;
$verdadero = true;

//gettype() = nos devuelte el tipo de dato

echo $nula.' - '.gettype($nula).'<br/>';
echo $falso.' - '.gettype($falso).'<br/>';
echo $string.' - '.gettype($string).'<br/>';
echo $numero.' - '.gettype($numero).'<br/>';
echo $decimal.' - '.gettype($decimal).'<br/>';
echo $verdadero.' - '.gettype($verdadero).'<br/>';
?>