<?php

//UN TRAIT PERMITE DEFINIR UNA SERIE DE METODOS PARA COMPARTIR ENTRE DIFERENTES CLASES
//ESTO ES MUY UTIL CUANDO NO QUEREMOS UTILIZAR LA HERENCIA

trait Utilidades{
    public function mostrarNombre(){
        echo "<h1>El nombre es ".$this->nombre."</h1>";
    }
}


class Car{
    public $nombre;
    public $marca;

    use Utilidades;
}

class Person{
    public $nombre;
    public $apellidos;

    use Utilidades;
}

class VideoGame{
    public $nombre;
    public $year;

    use Utilidades;
}

$car = new Car();
$car->nombre = "Ferrari Aventador";

$person = new Person();
$person->nombre = "Antonio Machado";

$game = new VideoGame();
$game->nombre = "Red Dead Redemption 2";


$car->mostrarNombre();
$person->mostrarNombre();
$game->mostrarNombre();
