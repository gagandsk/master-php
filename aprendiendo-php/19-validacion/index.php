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
    <form method="POST" action="procesar_formulario.php">
        <label for="nombre">Nombre</label><br />
        <input type="text" name="nombre" required="required" pattern="[A-Za-z]+"><br />

        <label for="apellido">Apellido</label><br />
        <input type="text" name="apellido" pattern="[A-Za-z]+"><br />

        <label for="edad">Edad</label><br />
        <input type="number" name="edad" pattern="[0-9]+"><br />

        <label for="email">Email</label><br />
        <input type="email" name="email" required="required"><br />

        <label for="pass">Contraseña</label><br />
        <input type="password" name="pass" required="required"><br />

        <input type="submit" name="Enviar">

    </form>
</body>

</html>