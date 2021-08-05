<?php

/*
FUNCIONES: Conjunto de instrucciones agrupadas bajo un nombre concreto y que 
pueden utilizarse solamente invocando a la funcion tantas veces como queramos
function nombreDeMiFuncion($parametro){
    //bloque de instrucciones
}

nombreDeMiFuncion($mi_parametro);
*/

//Ejemplo 1
function holaMundo(){
    echo "<h1>1</h1>";
    echo "<h1>2</h1>";
    echo "<h1>3</h1>";
    echo "<hr/>";
}
//Invocar funcion
holaMundo();
/*holaMundo();
holaMundo();*/


//Ejemplo 2
function tabla ($numero){
    echo "<h3>Tabla de multiplicar del numero: $numero</h3>";
    for($i=1;$i<=10;$i++){
        $operacion = $numero*$i;
        echo "$numero x $i = ".$operacion."<br/>";
    }
}

//tabla(5);

echo "<hr/>";

if(isset($_GET['numero'])){
    tabla($_GET["numero"]);
    //tabla(2);
}else{
    echo "No hay numero para hacer la multiplicacion";
}
/*
echo "<hr/>";
echo "<hr/>";
echo "Todas las tablas de multiplicar del 1-10";
for($i=1;$i<=10;$i++){
    tabla($i);
}
*/
echo "<hr/>";

//Ejemplo 3
function calculadora($numero1, $numero2, $color = false){
    //conjunto de instrucciones a ejecutar
    $suma = $numero1+$numero2;
    $resta = $numero1-$numero2;
    $multiplicacion = $numero1*$numero2;
    $division = $numero1/$numero2;

    if($color){
        echo "<h1>";
    }

    echo "Suma: $suma <br/>";
    echo "Resta: $resta <br/>";
    echo "Multiplicacion: $multiplicacion <br/>";
    echo "Division: $division <br/>";

    if($color){
        echo "</h1>";
    }

    echo "<hr/>";
}

calculadora(40,30, false);
calculadora(40,30,true);

?>