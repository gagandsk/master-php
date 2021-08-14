<?php

//OPERADOR TERNIARIO (?)

if(isset($_POST['submit'])){
    //recojer los valores del formulario de registro
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;
  

    //array de errores
    $errores = array();

    //validar datos antes de guardar en la base de datos
    //VALIDAR CAMPO NOMBRE
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        echo "El nombre es valido";
        $nombre_validate = true;
    }else{
        $nombre_validate = false;
        $errores['nombre'] = "El nombre no es valido";
    }

    //VALIDAR CAMPO APELLIDO
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
        echo "Los Apellidos son validos";
        $apellido_validado = true;
    }else{
        $apellido_validado = false;
        $errores['apellidos'] = "Los Apellidos no son validos";
    }

    //VALIDAR CAMPO EMAIL
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validate = true;
    }else{
        $email_validate = false;
        $errores['email'] = "El email no es valido";
    }

    //VALIDAR CAMPO PASSWORD
    if(!empty($password)){
        $password_validate = true;
    }else{
        $password_validate = true;
        $errores['password'] = "La contrasenya esta vacia";
    }

    
    
    
    
}

//var_dump($_POST);

?>