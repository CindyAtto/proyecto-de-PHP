<?php
class Nota
{
    private $puntaje;
    private $comentario;

    public function getpuntaje()
    {
        return $this->puntaje;
    }

    public function setpuntaje($puntaje)
    {
        $this->puntaje = $puntaje;
    }

    public function getcomentario()
    {
        return $this->comentario;
    }

    public function setcomentario($comentario)
    {
        $this->comentario = $comentario;
    }
}
