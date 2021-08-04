<?php

/*
//CONDICIONAL IF

    if(condicion){
        instrucciones
    }else{
        otras condiciones
    }

//OPERADORES DE COMPRARACION

== (IGUAL)
=== (IDENTICO(INCLUSO TIPO DE DATO))
!= (DIFERENTE)
<> (DIFERENTE)
!== (NO IDENTICO)
< (MENOR QUE)
> (MAYOR QUE)
<= (MENOR O IGUAL QUE)
>= (MAYOR O IGUAL QUE)

*/
//Ejemplo 1
$color = "Verde";
if($color=="Rojo"){
    echo "El color ES rojo";
}else{
    echo "El color NO es rojo";
}

echo "<br/>";

//Ejemplo 2
$year = 2029;
if($year >= 2019){
    echo "Hemos pasado el 2019";
}else{
    echo "Es un año anterioir a 2019";
}

//Ejemplo 3
$nombre = "Roronoa Zoro";
$edad = 21;
$mayor_edad = 18;
$ciudad = "Wano";
$continente = "Asia";
if($edad >= $mayor_edad){
    echo "<h1>$nombre es major de edad</h1>";
    if($continente == "Asia"){
        echo "<h2>Y es de $ciudad</h2>";
    }else{
        echo "No es asiatico";
    }
}else{ 
    echo "<h2>$nombre no es mayor de edad</h2>";
}

?>