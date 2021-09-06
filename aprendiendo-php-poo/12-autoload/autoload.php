<?php

function app_autoloader($class) {
    $class = strtolower($class);
    require_once 'clases/MisClases/' . $class.'.php';
    var_dump($class);
}
 
spl_autoload_register('app_autoloader'); #busca todas las clases en el directorio indicado