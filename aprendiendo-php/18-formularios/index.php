<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios PHP y HTML</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="" method="POST" enctype="multipart/form-data">
    <label for="nombre">Nombre</label>
    <p><input type="text" name="nombre"><br/></p>
    <label for="apellido">Apellido</label>
    <!--Atributos mas importantes del input:
        - autofocus="autofocus" -> dar emfasis de un input
        - disabled="disabled" -> campo deshabilitado
        - maxlength="5"
        - minlength="5"
        - pattern[A-Z]+ -> expresiones irregulares
        - required="required" -> campo requerido
        - placeholder="algun texto"
        - value="2"
    -->
    <p><input type="text" name="apellido"><br/></p>
    <input type="submit" value="Enviar">
    </form>
</body>
</html>