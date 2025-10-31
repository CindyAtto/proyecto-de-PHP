<?php

class CursoDB{

public function Agregar(
    $nombre,
    $codigo,
    $CantCred
){
    if(isset($_SESSION['listaCurso'])){
        $_SESSION['listaCurso'] = [];
    }else{
        $curso=[
            'nombre'=>$nombre,
            'codigo'=>$codigo,
            'CantCred'=>$CantCred,
        ];
        $_SESSION['listaCurso'][] = $curso;
    }
}
}

?>