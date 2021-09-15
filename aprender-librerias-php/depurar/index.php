<?php

//VAMO' A CARGAR/INCLUIR LAS LIBRERIAS ;-)
require_once '../vendor/autoload.php';

$frutas = array('Manzana', 'Platano', 'Naranjas');
echo "Hola Mundo";
//NECESSITAMOS INSTALAR UN PLUGIN EN CHROME 'FirePHP'
\FB::log($frutas); //MUESTRA UN LOG, COMO (CONSOLE.LOG()) EN JS