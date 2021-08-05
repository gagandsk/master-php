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

echo "<h1>Tabla de multiplicar del numero $numero  (bucle while)</h1>";
$contador = 0;
while($contador <=10){
    echo "$numero x $contador =".($numero * $contador)."<br>";
    $contador++;
}

echo "<hr/>";

/*BUCLE DO-WHILE
Estructura de control que itera/repite la ejecucion de una serie de instrucciones 
tantas veces sea necesario, en base a una condicion

do{
    //bloque de instrucciones
}while(condicion);

*/

$edad = 17;

$contador = 1;
do{
    echo "Tienes acceso al local privado $contador <br/>";
    $contador++;
}while($edad >= 18 && $contador <=10);



?>