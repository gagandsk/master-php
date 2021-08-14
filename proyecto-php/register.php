<?php
if(isset($_POST['submit'])){
    //CONEXXION A LA BASE DE DATOS
    require_once 'includes/conexion.php';

    //Iniciar sesión
    if(!isset($_SESSION)){
        session_start();
    }

    //OPERADOR TERNIARIO (?)

    /*SEGURIDAD AL INSERTAR DATOS EN LA BASE DE DATOS DESDE UN FORMULARIO USAREMOS LA FUNCION mysqli_real_escape_string() */

    //recojer los valores del formulario de registro
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;
  
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


    $save_user = false;
    if(count($errores) == 0){
        //INSERTAR USUARIO EN LA BASE DE DATOS
        $save_user = false;

        //CIFRAR CONTRASENÑA
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]); //el cost me cifra x veces la contraseña
        /*
        var_dump($password);
        var_dump($password_segura);
        var_dump(password_verify($password, $password_segura));
        die();
        */

        $sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$apellidos', '$email', '$password_segura', CURDATE())";
        $guardar_usuario = mysqli_query($db, $sql);
        /*
        var_dump(mysqli_errno($db));
        die();
        */
        if($guardar_usuario){
            $_SESSION['completado'] = "El usuario ha sido registrado con exito";
        }else{
            $_SESSION['errores']['general'] = "Hubo un error al registrar";
        }

    }else{
        $_SESSION['errores'] = $errores;
        
    }

}
header('Location:index.php');

//var_dump($_POST);
