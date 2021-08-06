<?php

/**
 * ARRAY: un array es una coleccion o conjunto de datos/valores, bajo un unico nombre. 
 * Para acceder a esos valores podemos utilizar un indice numerico o alfanumerico
 * 
*/

$animes = array('One Piece', 'Dragon ball Z', 'Attack on titans');
$juegos = ['The Witcher 3', 'Red Dead Redemprion 2', 'GTA V'];

//var_dump($animes[2]);
//var_dump($juegos);

/*echo $animes[0]."<br/>";
echo $juegos[1]."<br/>";*/

//Recorrer array con FOR
echo "<h1>Listado de animes</h1>";

echo "<ul>";
for($i = 0; $i< count($animes); $i++){
    echo "<li>".$animes[$i]."</li>";
}
echo "</ul>";


//Recorrer array con Foreach
echo "<ul>";
foreach($animes as $anime){
    echo "<li>".$anime."</li>";
}
echo "</ul>";

//ARRAY ASOCIATIVO
$piratas = array(
    'capitan'=> 'Monkey D. Luffy',
    'bandera'=>'Sombrero de paja',
    'tripulantes'=>10
);
/*var_dump($piratas);
var_dump($piratas['bandera']);*/
?>