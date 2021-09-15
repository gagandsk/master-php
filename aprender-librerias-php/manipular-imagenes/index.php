<?php
//MANIPULAR UNA IMAGEN GUARDADA EN EL DIRECTORIO

require_once '../vendor/autoload.php';

$foto_original = 'one_piece.jpg';
$guardar_en = 'one_piece_modificado.jpg';

$tumb = new PHPThumb\GD($foto_original);
$tumb->resize(250,150);
#$tumb->crop(50, 50, 120, 180);
$tumb->cropFromCenter(250, 100);
$tumb->save($guardar_en);
$tumb->show();