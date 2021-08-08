<?php

//Crear carpeta
$nombre_carpeta = 'mi_carpeta';
$permisos = 0777;
if(!is_dir($nombre_carpeta)){
    mkdir($nombre_carpeta, $permisos) or die("Error al crear al carpeta");
}else{
    echo "La carpeta ya existe";
}

//Borrar directorios
//rmdir($nombre_carpeta);

echo "<hr>";
echo "<h1>Contenido de la carpeta '$nombre_carpeta'</h1>";
if($gestor = opendir('./'.$nombre_carpeta)){
    while(false != ($archivo = readdir($gestor))){
        if($archivo != '.' && $archivo != '..'){
            echo $archivo."<br/>";
        }
    }
}

?>