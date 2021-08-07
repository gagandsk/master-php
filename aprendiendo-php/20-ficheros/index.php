<?php

$file_name = "fichero_texto.txt";
//$permisos = "r";
$permisos = "a+"; //permiten leer y escribir

//Abrir archivo
$archivo = fopen($file_name,$permisos);

//Leer Contenido
while(!feof($archivo )){
    $contenido = fgets($archivo);
    echo $contenido."<br/>";
}

//Escribir 
$texto = "Texto insertado desde PHP";
fwrite($archivo, $texto);

//Cerrar archivo
fclose($archivo);

?>