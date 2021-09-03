<?php
require_once 'coche.php';

$coche1 = new Coche("Rojo", "Renault", "Clio", 180, 200, 5);
$coche2 = new Coche("Verde", "Seat", "Panda", 280, 210, 2);
$coche3 = new Coche("Azul", "Citroen", "Xara", 140, 300, 4);
//$coche->color = "Azul";

$coche1->color = "CIAN";
#$coche1->marca = "Audi"; #ERROR-> PROTECTED PROPERTY
$coche1->setMarca("Audi");
#var_dump($coche1->modelo); #ERROR-> PRIVATE PROPERTY
var_dump($coche1->getModelo());

var_dump($coche1);
//var_dump($coche1);
//var_dump($coche2);
//var_dump($coche3);
