<?php
class Curso{

private $nombre;
private $codigo;
private $CantCred;

public function getNombre(){
    return $this->nombre;
}

public function setNombre($nombre){
    $this->nombre = $nombre;    
}

public function getCodigo(){
    return $this->codigo;
}

public function setCodigo($codigo){
    $this->codigo = $codigo;
}

public function getCantCred(){
    return $this->CantCred;
}

public function setCantCred($CantCred){
    $this->CantCred = $CantCred;
}

public function AgregarCurso(){
    include_once "../Persistencia/CursoDB.php";
        $cursoDB = new CursoDB();
        $cursoDB->Agregar(
        $this->nombre,
        $this->codigo,
        $this->CantCred);   
    }
}
