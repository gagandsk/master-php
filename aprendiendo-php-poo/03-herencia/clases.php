<?php
//HERENCIA: la possibilidad de compartir atributos y metodos entre clases

class Persona{
    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;
    
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    public function hablar(){
        return "Estoy Hablando";
    }

    public function caminar(){
        return "Estoy caminando";
    }
}

class Informatico extends Persona{

    public $lenguajes;
    public $experienciaProgramador;

    public function __construct(){
        $this->lenguajes = "HTML, CSS, JS";
        $this->experienciaProgramador = 10;
        
    }

    public function sabeLenguajes($lenguajes){
        $this->lenguajes = $lenguajes;

        return $this->lenguajes;

    }
    public function programar(){
        return "Soy programador";
    }

    public function repararOrdenador(){
        return "Reparar ordenadores";
    }

    public function hacerOfimatica(){
        return "Domino la ofimática";
    }
}

class Tecnico extends Informatico{
    
    public $auditarRedes;
    public $experienciaEnRedes;

    public function __construct()
    {
        parent::__construct(); //ES COMO EL SUPER() EN JS
        $this->auditarRedes = "Experto";
        $this->experienciaEnRedes = 5;
    }

    public function auditoria(){
        return "Estoy auditando una red";
    }
}