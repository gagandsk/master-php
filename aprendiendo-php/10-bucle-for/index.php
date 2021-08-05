<?php

/*FOR
for(expresion_inicial, condicion, incremento_contador){
    bloque de instrucciones
}
*/

$resultado = 0;

for ($i=0; $i <= 100 ; $i++) { 
    $resultado += $i;
}

echo "<p>El resultado es: $resultado<p/>";

echo "<hr/>";

//tabla de multiplicar con el bucle 'for'

if(isset($_GET['numero'])){
    //canviar tipo de dato
    $numero = (int)$_GET['numero'];
}else{
    $numero = 1;
}

echo "<h1>Tabla de multiplicar del numero $numero  (bucle for)</h1>";
for ($contador = 0; $contador <= 10 ; $contador++){
    
    if($numero == 45){
        echo "No te quiero mostrar esta operacion";
        break;
    }
    echo "$numero x $contador =".($numero * $contador)."<br>";
}

