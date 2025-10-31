<?php
class Persona{
private $nombre;
private $cedula;
private $correo;

    public function getnombre()
    {
        return $this->nombre;
    }

    public function setnombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getcedula()
    {
        return $this->cedula;
    }

    public function setcedula($cedula)
    {
        $this->cedula = $cedula;
    }

    public function getcorreo()
    {
        return $this->correo;
    }

    public function setcorreo($correo)
    {
        $this->correo = $correo;
    }
}
