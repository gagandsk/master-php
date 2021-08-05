<?php

//Debuggear
$nombre = "Goku";
var_dump($nombre);

//Fechas
echo date('d-M-y')."<br/>"; //leer documentacion
echo time()."<br/>";

//Matematicas
echo "Raiz cuadrada de 10: ".sqrt(10)."<br/>";

echo "Numero aleatorio entre 10 y 40:".rand(10,40)."<br/>";
echo "Numero Pi: ".pi()."<br/>";

echo "Redondear: ".round(15.897, 1)."<br/>";

//FUNCIONES GENERALES
echo gettype($nombre)."<br/>";

//Detectar tipado
if(is_string($nombre)){
    echo "Esta variable es un string"."<br/>";
}

if(!is_float($nombre)){
    echo "Esta variable no es un numero con decimales"."<br/>";
}

//Comprovar si existe una variable
if(isset($edad)){
    echo "Esta variable existe";
}else{
    echo "Esta variable no existe";
}


//Limpiar espacios
$frase = "          hey         "; 
var_dump(trim($frase)); 

//Eliminar variables / indices
$year = 2020;
unset($year);

//Comprovar variable vacia
$texto = "";

if(empty($texto)){
    echo "Esta variable esta vacia";
}else{
    echo "Esta variable NO esta vacia";
}
echo "<br/>";

//Contar caracteres de un string
$cadena = "123456789";
echo strlen($cadena);
echo "<br/>";

//Encontrar caracter/palabra
$frase = "Jo seré el futur rey del piratas!";
echo strpos($frase, "rey");
echo "<br/>";

//Reemplazar palabras de un string
$frase = str_replace("seré", "soc", $frase);
echo $frase;
echo "<br/>";

//MAYUSCULAS i minusculas
echo strtolower($frase)."<br/>";
echo strtoupper($frase)."<br/>";

?>