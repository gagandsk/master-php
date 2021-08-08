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
/*$texto = "Texto insertado desde PHP";
fwrite($archivo, $texto);*/

//Cerrar archivo
fclose($archivo);


//Copiar archivo
//copy($file_name, 'fichero_copiado.txt') or die("Error al copiar");

//Renombrar Fichero
//rename('fichero_copiado.txt', 'fichero_copiado_renombrado.txt');

//Eliminar fitchero
//unlink('fichero_copiado_renombrado.txt') or die("Error al borrar");

//Comprobar si existe un fichero / archivo
if(file_exists($file_name)){
    echo "El fichero Existe";
}else{
    echo "El fichero NO Existe";
}
?>