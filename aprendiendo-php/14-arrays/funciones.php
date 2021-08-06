<?php

$animes = ['One Piece', 'Dragon ball Z', 'Attack on titans', 'My Hero Academia', 'Naruto', 'Bleach'];
$numeros = [1,50,76,90,23,2,41,48,57,1000,4];

asort($animes); //orden alfabetico
echo "Orden alfabetico";
var_dump($animes);

echo "<hr>";

echo "Orden inverso";
arsort($animes); //orden inverso
var_dump($animes);

echo "<hr>";

echo "Orden alfabetico (metodo 2)";
sort($animes); //orden alfabetico
sort($numeros);
var_dump($numeros);
var_dump($animes);

echo "<hr>";

//Añadir elementos a un array
echo "Añadir elementos a un array";
$animes[] = 'Fairy Tail';
array_push($animes, 'One Punch Man');
var_dump($animes);

echo "<hr>";

//Eliminar elementos de un array
echo "Eliminar elementos de un array";
array_pop($animes); //elimina el ultimo elemento del array
unset($animes[6]);
var_dump($animes);

echo "<hr>";

//Sacar elemento aleatorio de un array
echo "Sacar elemento aleatorio de un array";
$indice =  array_rand($animes);
echo "Random Anime generator: "."<b>".$animes[$indice]."</b>";

echo "<hr>";

//Dar la vuelta a un array
echo "Dar la vuelta a un array";
var_dump(array_reverse($numeros));

echo "<hr>";

//Buscar dentro de un array
echo "Buscar dentro de un array";
    //nos devuelve el indice
$resultado = array_search('One Piece', $animes); //si no existe devuelve false
var_dump($resultado);

echo "<hr>";

//Contar numero de elementos
echo "Contar numero de elementos (Hay 2 metodos)</br>";
echo count($animes)." (count)</br>";
echo sizeof($animes)." (sizeof)</br>";

echo "<hr>";
?>