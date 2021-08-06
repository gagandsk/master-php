<?php

/*
Sesion: Almacena y persiste datos del usuario mientras que navega en un sitio web
hasta que cierra sesion o cierra el navegador
*/

//INICIAR SESION
session_start();

//Variable local
$variable_normal = "Soy un string";

//Variable de sesion
$_SESSION['variable_persistente'] = "Hola, soy una sesion activa"; //esta sesion la puedo usar en cualquier parte de mi dominio actual

echo $variable_normal."<br/>";
echo $_SESSION['variable_persistente']."<br/>";

?>