<?php
require_once 'clases.php';

$persona = new Persona();
var_dump($persona);

//PRUEBA DE QUITAR EL EXTENDS DEL OTRO ARCHIVO Y MIRA EL RESULTADO
$informatico = new Informatico();
var_dump($informatico);

$tecnico = new Tecnico();
var_dump($tecnico);