<?php
class Modulos
{
    private $unidad_tematica;
    private $nombre;
    private $descripcion;

    public function getnombre()
    {
        return $this->nombre;
    }

    public function setnombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getunidad_tematica()
    {
        return $this->unidad_tematica;
    }

    public function setunidad_tematica($unidad_tematica)
    {
        $this->unidad_tematica = $unidad_tematica;
    }

    public function getdescripcion()
    {
        return $this->descripcion;
    }

    public function setdescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }
}
