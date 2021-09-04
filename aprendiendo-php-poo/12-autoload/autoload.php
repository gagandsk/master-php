<?php

function autoCargar_clases($class){
    require_once 'clases/' . $class . '.php';
}

spl_autoload_register('autoCargar_clases'); #busca todas las clases en el directorio indicado