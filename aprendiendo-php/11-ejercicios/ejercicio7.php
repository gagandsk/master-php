<?php

/*
Ejercicio 7: Hacer un programa que muestre todos los numeros IMPARES
entre dos numeros que nos lleguen por la url ($_GET)
*/

if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    if($numero1 < $numero2){
        for($i=$numero1; $i<=$numero2; $i++){
            if($i%2 != 0){
                echo "$i - Impar <br/>";
            }else{
                echo "$i - Par <br/>";
            }
        }
    }else{
        echo "El numero 1 tiene que ser menor que el numero 2";    
    }
}else{
    echo "Introduce los numeros correctamente";
}


?>