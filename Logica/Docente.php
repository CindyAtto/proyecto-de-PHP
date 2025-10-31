<?php
include_once "persona.php";
class Docente extends Persona
{
    private $titulo;
    private $especialidad;

    public function gettitulo()
    {
        return $this->titulo;
    }

    public function settitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getespecialidad()
    {
        return $this->especialidad;
    }

    public function setespecialidad($especialidad)
    {
        $this->especialidad = $especialidad;
    }

    public function AgregarDocente(){
        include_once "../Persistencia/DocenteDB.php";
        $DocenteDB = new DocenteDB();
        $DocenteDB->Agregar(
        $this->getcedula(),
        $this->getnombre(),
        $this->getcorreo(),
        $this->titulo,
        $this->especialidad);    
    }

}
