<?php

//CONECTAR A LA BASE DE DATOS
$host = "localhost"; 
$user = "root"; 
$password = ""; 
$database = "phpmysql";

$conexion = mysqli_connect($host, $user, $password, $database);

//COMPROVAR SI LA CONEXION ES CORRECTA
if(mysqli_connect_errno()){
    echo "La conexion a la base de datos MySql ha fallado: ".mysqli_connect_error();
}else{
    echo "Conexion realizada perfectamente!";
}


?>