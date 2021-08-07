<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion de formularios PHP</title>
</head>

<body>
    <h1>Validar formularios en PHP</h1>


    <?php if (isset($_GET['error'])) {

        $error = $_GET['error'];

        if ($error == 'faltan_valores') {
            echo '<strong style="color:red">Introduce bien todos los valores</strong>';
        }

        if ($error == 'error_nombre') {
            echo '<strong style="color:red">Introduce bien el nombre</strong>';
        }

        if ($error == 'error_apellido') {
            echo '<strong style="color:red">Introduce bien el apellido</strong>';
        }

        if ($error == 'error_edad') {
            echo '<strong style="color:red">Introduce bien la edad</strong>';
        }

        if ($error == 'error_email') {
            echo '<strong style="color:red">Introduce bien el email</strong>';
        }

        if ($error == 'error_password') {
            echo '<strong style="color:red">Introduce una contrasenya que tengas mas de 5 caracteres</strong>';
        }
    } ?>


    <form method="POST" action="procesar_formulario.php">

        <!--VALIDAR CON HTML Y DEL LADO DEL SERVIDOR A LA VEZ :D-->
        <label for="nombre">Nombre</label><br />
        <input type="text" name="nombre" required="required" pattern="[A-Za-z]+"><br />

        <label for="apellido">Apellido</label><br />
        <input type="text" name="apellidos" pattern="[A-Za-z]+"><br />

        <label for="edad">Edad</label><br />
        <input type="number" name="edad" pattern="[0-9]+"><br />

        <label for="email">Email</label><br />
        <input type="email" name="email" required="required"><br />

        <label for="pass">Contraseña</label><br />
        <input type="password" name="pass" required="required"><br />

        <input type="submit" name="Enviar">


        <!--VALIDAR DESDE EL LADO DEL SERVIDOR   -->
    <!--
        <label for="nombre">Nombre</label><br />
        <input type="text" name="nombre"><br />

        <label for="apellido">Apellido</label><br />
        <input type="text" name="apellidos"><br />

        <label for="edad">Edad</label><br />
        <input type="number" name="edad"><br />

        <label for="email">Email</label><br />
        <input type="text" name="email"><br />

        <label for="pass">Contraseña</label><br />
        <input type="password" name="pass"><br />

        <input type="submit" name="Enviar">
    -->
    </form>
</body>

</html>