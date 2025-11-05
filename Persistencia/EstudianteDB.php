<?php
include_once 'conecion.php'; 

class EstudianteBD extends conecion{

    public function Agregar(
    $correo,
    $nombre,
    $cedula,
    $matricula,
    $generacion) {

    $this-> conectar();
      $sql = "INSERT INTO estudiante (cedula, correo, nombre, matricula, generacion) VALUES (?, ?, ?, ?, ?)";
      $stmt = $this->con->prepare($sql);
      $stmt->bind_param("isssi", $cedula, $correo, $nombre, $matricula, $generacion);
        
    if ($stmt->execute()){
        echo "nuevo registro creado con exito";
    } else {
        echo "error: " .$stmt->error;
    }
    $stmt->close();
    $this->desconectar();
    }

    public function ListarEstudiantes(){

    $this->conectar();
    $sql = "SELECT * FROM estudiante";
    $result = $this->con->query($sql);

    $estudiante =[];
    if ($result->num_rows > 0 ){
        while( $row = $result->fetch_assoc()){
            $estudiante[] = $row;
        }
    }
    $result->close();
    $this->desconectar();
    return $estudiante;
    }

    public function ActualizarEstudiante($cedula,$correo,$nombre,$matricula,$generacion){
        $this->conectar();
            
        $sql = "UPDATE estudiante SET correo = ?, nombre = ?, matricula = ?, generacion = ? WHERE cedula = ?";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("ssiii", $correo, $nombre, $matricula, $generacion, $cedula);


        
        if ($stmt->execute()){
           echo "Registro actualizado con exito"; 
        } else {
            echo "error". $stmt->error;
        }

          $stmt->close();
    $this->Desconectar();

}
}

?>