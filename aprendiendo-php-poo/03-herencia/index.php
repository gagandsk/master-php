<?php
require_once 'clases.php';

$persona = new Persona();
$persona->setNombre("Gagan");
var_dump($persona);

//PRUEBA DE QUITAR EL EXTENDS DEL OTRO ARCHIVO Y MIRA EL RESULTADO
$informatico = new Informatico();
$informatico->setAltura(1.90);
$informatico->sabeLenguajes("HTML, CSS, Python...");
var_dump($informatico);

$tecnico = new Tecnico();
var_dump($tecnico);