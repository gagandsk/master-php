<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Archivos al Servidor</title>
</head>

<body>
    <h1>Subir Imagenes con PHP</h1>
    <!--PARA SUBIR UN ARCHIVO AL SERVIDOR NECESSITAMOS LA ETIQUETA ' enctype="multipart/form-data" '-->
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="archivo">
        <input type="submit" value="Enviar">
    </form>

    <h1>Listado de imagenes</h1>
    <?php

    $gestor = opendir('./images');

    if ($gestor):
        while (($image = readdir($gestor)) !== false):
            if ($image != '.' && $image != '..'):
                echo "<img src='images/$image' width='200' style='border:1px solid red;'><br/>";
            endif;
        endwhile;
    endif;
    ?>
</body>

</html>