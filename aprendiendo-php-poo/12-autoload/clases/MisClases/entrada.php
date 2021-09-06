<?php

namespace MisClases; #es un paquete

class Entrada{
    public $titulo;
    public $fecha;

    public function __construct()
    {
        $this->titulo = "Review del Red Dead Redemption 2";
        $this->fecha = "4 de septiembre del 2021";
    }
}