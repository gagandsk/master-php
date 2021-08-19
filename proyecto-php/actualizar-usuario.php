<?php
if(isset($_POST['submit'])){
    //CONEXXION A LA BASE DE DATOS
    require_once 'includes/conexion.php';


    /*SEGURIDAD AL INSERTAR DATOS EN LA BASE DE DATOS DESDE UN FORMULARIO USAREMOS LA FUNCION mysqli_real_escape_string() */

    //recojer los valores del formulario de registro
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
    //$password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;
  
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

    $save_user = false;
    if(count($errores) == 0){

        //ACTUALIZAR USUARIO EN LA BASE DE DATOS
        $save_user = false;
        $usuario = $_SESSION['usuario']; //RECOJER USUARIO, MUY IMPORTANTE
        $sql = "UPDATE usuarios SET ".
               "nombre = '$nombre', ".
               "apellidos = '$apellidos', ".
               "email = '$email'
               WHERE id = ".$usuario['id'];
        $guardar_usuario = mysqli_query($db, $sql);

        if($guardar_usuario){
            $_SESSION['usuario']['nombre'] = $nombre;
            $_SESSION['usuario']['apellidos'] = $apellido;
            $_SESSION['usuario']['email'] = $email;
            
            $_SESSION['completado'] = "Tus datos se han actualizado con éxito";
        }else{
            $_SESSION['errores']['general'] = "Hubo un error al actualizar tus datos";
        }

    }else{
        $_SESSION['errores'] = $errores;
        
    }

}
header('Location:mis-datos.php');

//var_dump($_POST);
