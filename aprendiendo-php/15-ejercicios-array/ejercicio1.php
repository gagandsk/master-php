<?php

/* 

Ejercicio 1: Hacer un programa en PHP que tenga un array con 8 numeros enteros y que 
haga lo siguiente:
    - Recorrerlo y mostrarlo
    - Ordenarlo y mostrarlo
    - Mostrar su longitud
    - Buscar algun elemento (por el parametro por URL (GET))
*/

function mostrarArray($numeros){
    $resultado = "";
    foreach($numeros as $numero){
        $resultado.= "<b> ".$numero."</b>"; //$resultado = $resultado.$numero
    }
    return $resultado;
}

$numeros = array(6,3,1,9,7,5,2,4);

echo "Recorrerlo y mostrarlo <br>";
echo mostrarArray($numeros);
echo "<hr>";

echo "Ordenarlo y mostrarlo<br>";
sort($numeros);
echo mostrarArray($numeros);
echo "<hr>";

echo "Mostrar su longitud<br>";
echo "La longirud del array es: ".count($numeros); //sizeof
echo "<hr>";

echo "Buscar algun elemento<br>";
$numero_a_buscar = 7;
$posicion_numero = array_search($numero_a_buscar,$numeros);

if(!empty($posicion_numero)){
    echo "El numero $numero_a_buscar existe y esta en la posicion $posicion_numero<br>";
}else{
    echo "El numero $numero_a_buscar no existe y no se encuentra en el array<br>";
}

/*
// Con GET por URL
if(isset($_GET['numero'])){
    $numero_a_buscar = $_GET['numero'];
    $posicion_numero = array_search($numero_a_buscar,$numeros);
    if(!empty($posicion_numero)){
        echo "El numero $numero_a_buscar existe y esta en la posicion $posicion_numero<br>";
    }else{
        echo "El numero $numero_a_buscar no existe y no se encuentra en el array<br>";
    }
}
*/
?>