<?php
class Evaluaciones
{
    private $titulo;
    private $fecha;
    private $puntaje_maximo;

    public function gettitulo()
    {
        return $this->titulo;
    }

    public function settitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getfecha()
    {
        return $this->fecha;
    }

    public function setfecha($fecha)
    {
        $this->fecha = $fecha;
    }

    public function getpuntaje_maximo()
    {
        return $this->puntaje_maximo;
    }

    public function setpuntaje_maximo($puntaje_maximo)
    {
        $this->puntaje_maximo = $puntaje_maximo;
    }
}
