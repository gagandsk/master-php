<?php
//Programación Orientada a Objetos en PHP (POO)

//Definir una clase (molde para crear más objetos de tipo coche con caracteristicas parecidas)
class Coche
{
    //Atributos o propiedades (variables)

    /*
    PUBLIC: podemos acceder desde cualquier lugar, dentro de clase actual
    dentro de clases que hereden esta clase o fuera de la clase
    */
    public $color;
    //PROTECTED: podemos acceder desde la clase que los define y desde clases que hereden esta clase
    protected $marca;
    //PRIVATE: unicamente se puede acceder desde esta clase
    private $modelo;
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

    public function setMarca($nuevaMarca){
        $this->marca = $nuevaMarca;

    }

    public function getModelo(){
        return $this->modelo;
    }

}
