<?php

/*
Ejercicio 3: Programa que compruebe si una variable esta vacia o no, y si 
esta vacia rellenarla con texto en minuscula y mostrarlo en mayuscula y negrita
*/

$var = "";


if(empty($var)){
    $var = "laravel"; 
    $upperText = strtoupper($var);
    echo "<strong>".$upperText."</strong>";
}else{
    echo "La variable tiene este contenido dentro: $var";
}

?>