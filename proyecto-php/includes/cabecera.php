<?php require_once 'conexion.php'; ?>
<?php require_once 'includes/helpers.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Blog de One Piece</title>
</head>

<body>
    <!--CABECERA-->
    <header id="cabecera">
        <!--LOGO-->
        <div id="logo">
            <a href="index.php">
                One Piece
            </a>
        </div>

        <!--MENU-->

        <nav id="menu">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <?php
                    $categorias = conseguirCategorias($db);
                    if(!empty($categorias)):
                        while ($categoria = mysqli_fetch_assoc($categorias)) :
                ?>
                            <li><a href="categoria.pgp?id=<?= $categoria['id'] ?>"><?= $categoria['nombre'] ?></a></li>
                <?php 
                        endwhile; 
                    endif;
                ?>
                <li><a href="">Sobre mi</a></li>
                <li><a href="">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <div class="clearfix"></div>
    <div id="contenedor">