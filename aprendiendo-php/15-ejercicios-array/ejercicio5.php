<?php

/*
Ejercicio 5: Crear un array con el contenido de la sihuiente tabla:
   |--------|------------|------------|
   | ACCION | AVENTURA   | DEPORTES   |
   |--------|------------|------------|
   | GTA    | ZELDA:BOTW | FIFA 20    | 
   | COD    | CRASH      | PES 20     |         
   | PUGB   | ASSASING   | MOTO GP 20 |         
   |--------|------------|------------|
   CADA FILA DEBE IR EN UN FICHERO SEPARADO (USAR EL 'INCLUDE')
*/

$tabla =array(
    'ACCION'=> array('GTA 5', 'Call of Duty', 'PUGB'),
    'AVENTURA'=> array('Assasins Creed', 'Crash Bandicoot', 'Prince of persia'),
    'DEPORTES'=> array('Fifa 20', 'PES 20', 'Moto GP 20'),
);

$categorias = array_keys($tabla) //para sacar el nombre de los indices
//var_dump($tabla);
?>

<table border="1">
    <?php require_once 'ejercicio5/header.php' ?>
    <?php require_once 'ejercicio5/first.php' ?>
    <?php require_once 'ejercicio5/second.php' ?>
    <?php require_once 'ejercicio5/third.php' ?>
</table>