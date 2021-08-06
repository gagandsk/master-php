<?php

/* 

Ejercicio 1: Hacer un programa en PHP que tenga un array con 8 numeros enteros y que 
haga lo siguiente:
    - Recorrerlo y mostrarlo
    - Ordenarlo y mostrarlo
    - Mostrar su longitud
    - Buscar algun elemento
*/

$numeros = [6,3,1,9,7,5,2,4];

echo "Array original: ";
foreach($numeros as $numero){
    echo "<b> ".$numero."</b>";
}
echo "<hr>";

/*
for($i=1; $i<=8; $i++){
    $randoms = rand(1,8);
    if($randoms[$i] == $i){
        $randoms = rand(1,8);
    }
    array_push($numeros, $randoms);
}
*/
    // 
echo "Recorrerlo y mostrarlo <br>";
foreach($numeros as $numero){
    echo "<b> ".$numero."</b>";
}
echo "<hr>";

echo "Ordenarlo y mostrarlo<br>";
asort($numeros);
foreach($numeros as $numero){
    echo "<b> ".$numero."</b>";
}
echo "<hr>";

echo "Mostrar su longitud<br>";
echo "La longirud del array es: ".sizeof($numeros);
echo "<hr>";

echo "Buscar algun elemento<br>";
$numero_a_buscar = 12;
$posicion_numero = array_search($numero_a_buscar,$numeros);
if($posicion_numero){
    echo "El numero $numero_a_buscar esta en la posicion $posicion_numero<br>";
}else{
    echo "El numero $numero_a_buscar no se encuentra en el array<br>";
}
?>