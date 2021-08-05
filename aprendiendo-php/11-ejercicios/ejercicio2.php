<?php

/*
Ejercicio 2: Escribir un script en php que nos muestre 
por pantalla todos los numeros pares que hay del 1 al 100
*/

echo "<h3>Ejercicio 2 </h3>";

for ($i = 1; $i <=100; $i++){
    if($i % 2 == 0){
        echo $i."<br/>";
    }
}

?>