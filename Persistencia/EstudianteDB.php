<?php

class EstudianteBD extends conecion{

public function Agregar(
    $correo,
    $nombre,
    $cedula,
    $matricula,
    $generacion
){
    $this-> conectar();
    $sql= "INSERT INTO estudiante(cedula,correo,nombre,matricula,generacion) values (?,?,?,?,?)";    
    $stmt = $this->con->prepare($sql);
    $stmt->bind_param(" isssi ",$cedula,$nombre,$correo,$matricula,$generacion);
    
    if ($stmt->execute()){
        echo "nuevo registro creado con exito";
    } else {
        echo "error: " .$stmt->error;
    }
    $stmt->close();
    $this->desconectar();

    if(isset($_SESSION['listaEstudiente'])){
        $_SESSION['listaEstudiente'] = [];
    }else{
        $estudiante=[
            'nombre'=>$nombre,
            'cedula'=>$cedula,
            'correo'=>$correo,
            'matricula'=>$matricula,
            'generacion'=>$generacion,
        ];
        $_SESSION['listaEstudiente'][]=$estudiante;
    }
}
}

?>