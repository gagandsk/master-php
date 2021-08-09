<?php

/*
Ejercicio 2: Tiene que tener;
    1. Una función
    2. Validar un email con filter_var
    3. Recojer variable por get y validar
    4. Mostrar el resultado
*/

function validarEmail($email){
    $status = "Email NO Válido";
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $status = "Email Válido";
    }
    return $status;
}

if(isset($_GET["email"])){
    echo validarEmail($_GET["email"]);
}else{
    echo "Pasa un email por la URL";
}

?>