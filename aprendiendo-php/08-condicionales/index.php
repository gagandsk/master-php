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

$color = "Verde";
if($color=="Rojo"){
    echo "El color ES rojo";
}else{
    echo "El color NO es rojo";
}

echo "<br/>";

$year = 2029;
if($year >= 2019){
    echo "Hemos pasado el 2019";
}else{
    echo "Es un año anterioir a 2019";
}

?>