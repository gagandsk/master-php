<?php
//Programación Orientada a Objetos en PHP (POO)

//Definir una clase (molde para crear más objetos de tipo coche con caracteristicas parecidas)
class Coche
{
    //Atributos o propiedades (variables)
    public $color = "Rojo";
    public $marca = "Ferrari";
    public $modelo = "Aventador";
    public $velocida = 300;
    public $asientos = 2;


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

//Crear objeto/instanciar la clase
$coche = new Coche();

//Usar los metodos
//echo $coche->getVelocidad();
echo $coche->setColor("Azul");
echo "El color del coche 1 es: ".$coche->getColor()."<br>";
$coche->accelerar();
$coche->accelerar();
$coche->accelerar();
$coche->accelerar();
$coche->accelerar();
$coche->frenar();
echo "velocidad del coche: ".$coche->getVelocidad()."<br>";

$coche2 = new Coche();
echo $coche2->setColor("Amarillo");
echo "El color del coche 2 es: ".$coche2->getColor()."<br>";
echo $coche2->setModelo("Gallardo");
echo "El Modelo del coche 2 es: ".$coche2->getModelo()."<br>";