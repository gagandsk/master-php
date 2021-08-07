<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios PHP y HTML</title>
</head>

<body>

    <!--Atributos mas importantes del input:
        - autofocus="autofocus" -> dar emfasis de un input
        - disabled="disabled" -> campo deshabilitado
        - maxlength="5"
        - minlength="5"
        - pattern[A-Z]+ -> expresiones irregulares
        - required="required" -> campo requerido
        - placeholder="algun texto"
        - value="2"
        - checkbox
            - checked="checked"
        - file
            - multiple="multiple" -> subir varios archivos a la vez    
    -->

    <h1>Formulario</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="nombre">Nombre</label>
        <p><input type="text" name="nombre"></p>

        <label for="apellido">Apellido</label>
        <p><input type="text" name="apellido"></p>

        <label for="boton">Boton</label>
        <p><input type="button" name="boton" value="Haz click aqui"></p>

        <label for="sexo">Sexo</label>
        <p>
           Hombre <input type="checkbox" name="sexo" value="hombre">
           Mujer <input type="checkbox" name="sexo" value="mujer" checked="checked">
        </p>

        <label for="color">Campo color</label>
        <p><input type="color" name="color"></p>

        <label for="fecha">Fecha</label>
        <p><input type="date" name="fecha"></p>

        <label for="correo">Correo</label>
        <p><input type="email" name="correo"></p>

        <label for="archivo">Archivo</label>
        <p><input type="file" name="archivo" multiple="multiple"></p>

        <label for="hidden">Hidden</label>
        <p><input type="hidden" name="hidden"></p>

        <label for="numero">Numero</label>
        <p><input type="number" name="numero"></p>

        <label for="pass">Contraseña</label>
        <p><input type="password" name="pass"></p>

        <label for="continente">Continente</label>
        <p>
            America<input type="radio" name="continente" value="America">
            Europa<input type="radio" name="continente" value="Europa">
            Asia<input type="radio" name="continente" value="Asia">
        </p>

        <label for="telefono">Telefono</label>
        <p><input type="tel" name="telefono"></p>

        
        <label for="web">Pagina Web</label>
        <p><input type="url" name="web"></p>

        <input type="submit" value="Enviar">
    </form>
</body>

</html>