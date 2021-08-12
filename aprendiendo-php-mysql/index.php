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

//CONSULTA PARA CONFIGURAR LA CODIFICACION DE CARACTERES
$query = "SET NAMES 'utf8'";
mysqli_query($conexion, $query);

echo "<hr>";

//CONSULTA SELECT DESDE PHP
$notas_query = mysqli_query($conexion, "SELECT * FROM notas");
    //para mostrar todos los resultados
while($nota = mysqli_fetch_assoc($notas_query)){
    //var_dump($nota);
    echo "<h2>".$nota['titulo']."</h2>";
    echo $nota['descripcion'].'<br/>';
}
?>