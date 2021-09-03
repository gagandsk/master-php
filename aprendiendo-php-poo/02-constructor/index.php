<?php
require_once 'coche.php';

$coche1 = new Coche("Rojo", "Renault", "Clio", 180, 200, 5);
$coche2 = new Coche("Verde", "Seat", "Panda", 280, 210, 2);
$coche3 = new Coche("Azul", "Citroen", "Xara", 140, 300, 4);
//$coche->color = "Azul";

var_dump($coche1);
var_dump($coche2);
var_dump($coche3);
