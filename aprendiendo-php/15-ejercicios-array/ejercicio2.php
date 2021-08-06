<?php

/*
Ejercicio 2: Escribir un programa en PHP que añada valores a un array mientras 
que su longitud sea menor a 120 y luego mostrarlo por pantalla
*/

$coleccion = array();

for($i=0;$i<120;$i++){
    array_push($coleccion,"Elemento:".$i);
}

//var_dump($coleccion);
foreach($coleccion as $collection){
    echo $collection."<br>";
}

//echo $coleccion[45];

?>