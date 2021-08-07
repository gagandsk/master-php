<?php

$error = 'faltan_valores';

if (!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['pass'])){

    
    $error = 'ok';

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = (int) $_POST['edad'];
    $email = $_POST['email'];
    $password = $_POST['pass'];

    //Validar el nombre
    if (!is_string($nombre) || preg_match("/[0-9]/", $nombre)) {
        $error = 'error_nombre';
    }

    //Validar el apellidos
    if (!is_string($apellidos) ||  preg_match("/[0-9]/", $apellidos)) {
        $error = 'error_apellido';
    }

    //Validar la edad
    if (!is_integer($edad) || !filter_var($edad, FILTER_VALIDATE_INT)) {
        $error = 'error_edad';
    }

    //Validar email
    if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'error_email';
    }

    //Validar la password
    
    if (empty($password) || strlen($password) < 5) {
        $error = 'error_password';
    }

    /*
    var_dump($_POST);
    var_dump($error);
    die();
    */
    
} else {
    $error = 'faltan_valores';
}

if($error != 'ok'){
    header("Location:index.php?error=$error");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion de formularios PHP</title>
</head>

<body>
    <?php if ($error == 'ok') : ?>
        <h1>Datos validados Correctamente</h1>
        <h2>Bienvenido <?= $nombre ?></h2>
        <h4>Tus datos personales:</h4>
        <p><?= $nombre ?></p>
        <p><?= $apellidos ?></p>
        <p><?= $edad ?></p>
        <p><?= $email ?></p>
        <a href="index.php">Logout</a>
    <?php endif; ?>
</body>

</html>