<?php
//Constante = Contenedor de informacion que no puede variar su contenido

define('nombre','Arthur Morgan');
define('juego', 'RDR2');

echo nombre.'<br/>';

//Constante predefinidas
echo PHP_OS.'<br/>';
echo PHP_VERSION.'<br/>';
echo PHP_EXTENSION_DIR.'<br/>';
echo __LINE__.'<br/>';
echo __FILE__.'<br/>';

/*
function holaMundo ()
{
    echo __FUNCTION__.'<br/>';
}

holaMundo();
*/
?>