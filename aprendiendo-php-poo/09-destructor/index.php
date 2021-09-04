<?php

class User{
    public $nombre;
    public $email;

    public function __construct(){
        echo "Creando el objeto"."<br/>";
    }

    //A destructor is called when the object is destructed or the script is stopped or exited.
    public function __destruct(){
        echo "Destruyendo el objeto";
    }
}

$user = new User();

for($i=0; $i<=200; $i++){
    echo $i."<br/>";
}