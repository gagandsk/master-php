<?php

//CON LOS METODOS ESTATICOS NO HACE FALTA INSTANCIAR LA CLASSE

require_once 'configuracion.php';

Configuracion::setColor("Dark");
Configuracion::setEntorno("Localhost");
Configuracion::setNewsletter(true);

echo Configuracion::$color."<br/>";
echo Configuracion::$entorno."<br/>";
echo Configuracion::$newsletter."<br/>";

/*
$configuracion = new Configuracion();
$configuracion::$color = "Azul";
echo $configuracion::$color;
#echo $configuracion->$color; #DA ERROR, PORQUE ES ESTATICA Y DEBO ACCEDER CON LOS PUNTOS DOS '::'
var_dump($configuracion);
*/