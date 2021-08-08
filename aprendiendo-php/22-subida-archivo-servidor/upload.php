<?php

$archivo = $_FILES['archivo'];
/*
var_dump($archivo);
die();
*/

$nombre = $archivo['name'];
$tipo = $archivo['type'];

if($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gif"){

    //si el formato es valido, guardamos la imagen en un directorio
    if(!is_dir('images')){
        mkdir('images',0777);
    }

    move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);

    header("Refresh:5; URL=index.php");
    echo "<h1>Imagen Subida correctamente</h1>";

}else{
    header("Refresh:5; URL=index.php"); // a los segundos que les paso por el "Refres" me redirecciona ala url especificada
    echo "<h1>Este formato de imagen no es valida</h1>";
}

?>