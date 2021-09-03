<?php
//Programación Orientada a Objetos en PHP (POO)

//Definir una clase (molde para crear más objetos de tipo coche con caracteristicas parecidas)
class Coche
{
    //Atributos o propiedades (variables)
    public $color;
    public $marca;
    public $modelo;
    public $velocida;
    public $asientos;

    public function __construct($color, $marca, $modelo, $velocidad, $asientos)
    {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->asientos = $asientos;
    }

    // Métodos -> són acciones que hace el objeto (antes funciones)
    public function getColor(){
        //Estoy accediendo a la propiedad 'color'
        return $this->color;
    }

    public function setColor($nuevoColor){
        $this->color = $nuevoColor;
    }

    public function accelerar(){
        $this->velocida += 5;
    }

    public function frenar(){
        $this->velocida -= 5;
    }

    public function getVelocidad(){
        return $this->velocida;
    }

    public function setModelo($nuevoModelo){
        $this->modelo = $nuevoModelo;

    }

    public function getModelo(){
        return $this->modelo;
    }

}
