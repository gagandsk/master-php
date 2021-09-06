<?php

//DEFINO QUÉ METODOS VA A TENER MI CLASE
interface Ordenador{
    public function encender();
    public function apager();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUSB();
}

class iMac implements Ordenador{
    public $modelo;

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    public function encender(){
        return "Encendido";
    }

    public function apager(){

    }

    public function reiniciar(){

    }

    public function desfragmentar(){

    }

    public function detectarUSB(){

    }


}

$maquintosh = new iMac();
$maquintosh->setModelo("Mackbook PRO 2019");
var_dump($maquintosh);