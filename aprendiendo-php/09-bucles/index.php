<?php
/*BUCLE WHILE
Estructura de control que itera/repite la ejecucion de una serie de instrucciones 
tantas veces sea necesario, en base a una condicion

while(condición){
    bloque de instrucciones
    otra instruccion
}
*/
$numero = 0;
while($numero <= 10){
    echo $numero;
    if($numero != 10){
        echo ", ";
    }
    $numero++;
}

echo "<hr/>";

//Ejemplo

//issety ->comprueba si existe una variable/dato o no
if(isset($_GET['numero'])){
    //canviar tipo de dato
    $numero = (int)$_GET['numero'];
}else{
    $numero = 1;
}

echo "<h1>Tabla de multiplicar del numero $numero</h1>";
$contador = 0;
while($contador <=10){
    echo "$numero x $contador =".($numero * $contador)."<br>";
    $contador++;
}

?>