<?php

/*
Variables locales: Son las que se definen dentro de una funcion 
y no pueden ser usadas fuera de la funcion, solo estan disponibles dentro. 
A no ser que hagamos un return

Variables globales: Son las que se declaran fuera de una funcion 
y estan disponibles dentro y fuera de las funciones
*/

$framework = "Laravel";

echo $framework;

function holaMundo(){
    global $framework;
    echo "<h1>$framework</h1>";
    $year = 2019;
    echo "<h1>$year</h1>";

    return $year;
}

holaMundo();

?>