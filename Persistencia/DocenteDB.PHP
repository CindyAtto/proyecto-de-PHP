<?php
include_once  'conecion.php';

class DocenteDB{

public function Agregar(
    $correo,
    $nombre,
    $cedula,
    $titulo,
    $especialidad)
    {
    $this-> conectar();
    $sql = "INSERT INTO docente(correo,nombre,cedula,titulo,especialidad)VALUES(?,?,?,?,?)";
    $stmt = $this->con->prepare($sql);
    $stmt->bind_param("ssiss,$correo,$nombre,$cedula,$titulo,$especialidad");

 if ($stmt->execute()) {
            echo "Nuevo registro creado con éxito";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $this->desconectar();
    }
    
    public function listaDocente() {
        $this-> conectar();
        $sql = "SELECT * FROM docentes";
        $result = $this->con->query($sql);

        $docente = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $docente[] = $row;
            }
        }

        $result->close();
        $this->desconectar();
        return $docente;

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