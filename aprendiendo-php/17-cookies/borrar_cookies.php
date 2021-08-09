<?php

//para borar un cookie debemos de caducarla

if(isset($_COOKIE['micookie'])){
    unset($_COOKIE['micookie']);
    setcookie('micookie','',time()-100);
    echo "Se ha borrado tu cookie";
}


header('Location:ver_cookies.php');

?>

