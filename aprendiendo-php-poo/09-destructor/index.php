<?php

class User{
    public $nombre;
    public $email;

    public function __construct(){
        $this->nombre = "Gagan";
        $this->email = "email@gmail.com";
        echo "Creando el objeto"."<br/>";
    }

    //A destructor is called when the object is destructed or the script is stopped or exited.
    public function __destruct(){
        echo "<br/>Destruyendo el objeto";
    }

    public function __toString()
    {
        return "Hola, {$this->nombre}, estas registrado con este email {$this->email}";
    }
}

$user = new User();
echo $user; 