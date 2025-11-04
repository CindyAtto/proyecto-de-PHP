<?php
include_once "persona.php";
class Estudiante extends Persona
{
    private $matricula;
    private $generacion;

    public function getmatricula()
    {
        return $this->matricula;
    }

    public function setmatricula($matricula)
    {
        $this->matricula = $matricula;
    }

    public function getgeneracion()
    {
        return $this->generacion;
    }

    public function setgeneracion($generacion)
    {
        $this->generacion = $generacion;
    }

    public function AgregarEstudiante(){
        include_once "../Persistencia/EstudianteDB.php";
        $esudianteBD = new EstudianteBD();
        $esudianteBD->Agregar(
        $this->getcedula(),
        $this->getnombre(),
        $this->getcorreo(),
        $this->matricula,
        $this->generacion);    
    }
    public function ListarEstudiantes(){
        
    }
}
