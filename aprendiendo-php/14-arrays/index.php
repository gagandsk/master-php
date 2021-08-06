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
echo "<h5>Recorrer array con FOR</h5>";

echo "<ul>";
for($i = 0; $i< count($animes); $i++){
    echo "<li>".$animes[$i]."</li>";
}
echo "</ul>";


//Recorrer array con Foreach
echo "<h5>Recorrer array con Foreach</h5>";
echo "<ul>";
foreach($animes as $anime){
    echo "<li>".$anime."</li>";
}
echo "</ul>";
echo "<hr>";


//ARRAY ASOCIATIVO
echo "<h5>ARRAY ASOCIATIVO</h5>";
$piratas = array(
    'capitan'=> 'Monkey D. Luffy',
    'bandera'=>'Sombrero de paja',
    'tripulantes'=>10
);
var_dump($piratas);
var_dump($piratas['bandera']);
echo "<hr>";


//ARRAYS MULTIDIMENSIONALS
echo "<h5>ARRAYS MULTIDIMENSIONALS</h5>";
$contactos = array(
    array(
        'nombre' => 'Rononoa Zoro',
        'email' => 'rononoaZoro@gmail.com',
    ),
    array(
        'nombre' => 'Luffy',
        'email' => 'luffy19@gmail.com',
    ),
    array(
        'nombre' => 'Sanji',
        'email' => 'sanji@gmail.com',
    )
);
var_dump($contactos);
echo $contactos[0]['nombre']."<br/>"; //Rononoa Zoro
echo $contactos[0]['email']."<br/>"; //rononoaZoro@gmail.com

foreach ($contactos as $contacto) {
    var_dump($contacto['nombre']);
    //var_dump($contacto);
}
echo "<hr>";
?>