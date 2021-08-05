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
echo "<hr>";


//Ejemplo 2
$year = 2029;
if($year >= 2019){
    echo "Hemos pasado el 2019";
}else{
    echo "Es un año anterioir a 2019";
}

echo "<hr>";

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

echo "<hr>";

//Ejemplo 4
$dia = 1;
if($dia == 1){
    echo "LUNES";
}elseif($dia == 2){
    echo "MARTES";
}elseif($dia == 3){
    echo "MIERCOLES";
}elseif($dia == 4){
    echo "JUEVES";
}elseif($dia == 5){
    echo "VIERNES";
}else{
    echo "FIN DE SEMANA";
}

echo "<hr>";

/*OPERADORES LOGICOS
    && AND Y
    || OR O
    !  NOT NO
*/
$edad1 = 18;
$edad2 = 64;
$edad_oficial = 20;

if($edad_oficial >= $edad1 && $edad_oficial <= $edad2){
    echo "Esta en edad de trabajar";
}else{
    echo "no esta en edad de trabajar";
}

echo "<br>";

$pais = "Francia";
if($pais == "Mexico" || $pais == "Espanña" || $pais == "Colombia"){
    echo "En este pais se habla español";
}else{
    echo "En este pais no se habla español";
}

?>