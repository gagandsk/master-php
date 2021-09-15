<?php

    require_once '../vendor/autoload.php';

    //Conexion a bd
    $conexion = new mysqli("localhost", "root", "", "blog_master");
    $conexion->query("SET NAMES 'utf8'"); //codificacion al español

    //Consulta para contar elementos totales
    $consulta = $conexion->query("SELECT COUNT(id) as 'total' FROM entradas");
    $numero_elementos = $consulta->fetch_object()->total;
    $numero_elementos_pagina = 2; 
    //var_dump($numero_elementos);

    //Hacer paginacion
    $pagination = new Zebra_Pagination();
    
    //Numero total elementos a paginar
    $pagination->records($numero_elementos);

    //Numero de elementos por pagina
    $pagination->records_per_page($numero_elementos_pagina);

    $page = $pagination->get_page();
    
    $empieza_aqui = (($page - 1)* $numero_elementos_pagina);
    $sql = "SELECT * FROM entradas LIMIT $empieza_aqui, $numero_elementos_pagina";
    $entradas = $conexion->query($sql);

    echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">';
    while ($entrada = $entradas->fetch_object()){
        echo "<h1>{$entrada->titulo}</h1>";
        echo "<h2>{$entrada->descripcion}</h2>"."<br/>";
    }

    $pagination->render();