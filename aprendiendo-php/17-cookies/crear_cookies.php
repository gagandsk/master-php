<?php

/*
Cookies: Fichero que se almacena en el ordenador del usuario que visita
la web, con el fin de recordar datos o rastrear el comportamiento del mismo en la web
*/

//Crear Cookie

//setcookie("nombre", "valor que solo puede ser texto", caducidad);
setcookie("micookie", "valor de mi galleta");

//Cookie con expiracion 
setcookie("unyear", "una cookie que dura 365 dias", time()+(60*60*24*365)); 

header('Location:ver_cookies.php');

?>
