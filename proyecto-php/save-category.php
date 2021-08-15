<?php

if(isset($_POST)){
    //CONEXXION A LA BASE DE DATOS
    require_once 'includes/conexion.php';
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;

    //array de errores
    $errores = array();

    //validar datos antes de guardar en la base de datos
    //VALIDAR CAMPO NOMBRE-CATEGORIA
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        echo "El nombre de la categoria es valido";
        $nombre_validate = true;
    }else{
        $nombre_validate = false;
        $errores['nombre'] = "El nombre de la categoria no es valido";
    }

    if(count($errores) == 0){
        $sql = "INSERT INTO categorias VALUES(NULL, '$nombre');";
        
        $categoria = mysqli_query($db, $sql);
    }
    
}
header("Location:index.php");

?>