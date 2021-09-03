<?php

class Usuario{

    const URL_COMPLETA = "http://localhost";
    public $email;
    public $password;


    public function getEmail()
    {
        //self::URL_COMPLETA -> HACE REFERENCIA A NIVEL GLOBAL
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

}

$usuario = new Usuario();
echo $usuario::URL_COMPLETA;
#echo $usuario->URL_COMPLETA; #DA ERROR, PORQUE ES UNA CONSTANTE, NO VARIO Y ES 'ESTATICA'
/*var_dump($usuario);*/