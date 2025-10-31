<?php

class DocenteDB{

public function Agregar(
    $correo,
    $nombre,
    $cedula,
    $titulo,
    $especialidad
){
    if(isset($_SESSION['listaDocente'])){
        $_SESSION['listaDocente'] = [];
    }else{
        $docente=[
            'nombre'=>$nombre,
            'cedula'=>$cedula,
            'correo'=>$correo,
            'titulo'=>$titulo,
            'especialidad'=>$especialidad,
        ];
        $_SESSION['listaDocente'][] = $docente;
    }
}
}

?>