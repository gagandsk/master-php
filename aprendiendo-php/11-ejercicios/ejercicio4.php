<?php

/*
Ejercicio 4: Recojer dos numeros por la url (Parametros GET) y hacer
 todas las operaciones basicas de una calculadora
 (suma, resta, multiplicacion, division) de esos dos numeros
*/

///ejercicio4.php?numero1=30&numero2=20

if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    echo "<h1>Calculadora</h1>";
    echo "Suma: ".($numero1+$numero2)."<br/>";
    echo "Resta: ".($numero1-$numero2)."<br/>";
    echo "Multiplicacion: ".($numero1*$numero2)."<br/>";
    echo "Division: ".($numero1/$numero2)."<br/>";

}else{
    echo "Introduce correctamente los valores por la URL";
}
