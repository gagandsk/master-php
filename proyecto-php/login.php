<?php 
// $_SESSION['nombreVariable] (es la variable de sesión)

//Iniciar sesión y la conexion a la bd
require_once 'includes/conexion.php';

//Recojer datos del formulario
if(isset($_POST)){
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    //Consulta para comprovar las credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE email ='$email';";
    $login = mysqli_query($db, $sql); //hacemos la consulta
    if($login && mysqli_num_rows($login) == 1){
        $usuario = mysqli_fetch_assoc($login); //nos devuelve un array con todos los datos del usuario con dicho email

        //comprovar la contraseña / cifrar
        $verify = password_verify($password, $usuario['password']);

        if($verify){
            //Utilizar una sesión para guardar los datos del usuario logeado
            $_SESSION['usuario'] = $usuario;

            if(isset($_SESSION['error_login'])){
                session_unset($_SESSION['error_login']);
            }
        }else{
            //Si algo falla enviar una sesión con el fallo
            $_SESSION['error_login'] = "El usuario no esta registrado";
        }
    }else{
        //mensaje de error
        $_SESSION['error_login'] = "El usuario no esta registrado";
    }

}
//Redirigir al index.php
header('Location:index.php');