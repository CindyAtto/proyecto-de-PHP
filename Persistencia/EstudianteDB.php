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
    $sql= "INSERT INTO estudiante(cedula,correo,nombre,matricula,generacion) values (?,?,?,?,?)";    
    $stmt = $this->con->prepare($sql);
    $stmt->bind_param(" isssi ",$cedula,$correo,$nombre,$matricula,$generacion);
    
    if ($stmt->execute()){
        echo "nuevo registro creado con exito";
    } else {
        echo "error: " .$stmt->error;
    }
    $stmt->close();
    $this->desconectar();
    }

    public function Cargarestudiante(){

    $this->conectar();
    $sql = "SELECT * FROM estudiante";
    $resuly = $this->con->query($sql);

    $estudiante =[];
    if ($result->num_rows > 0 ){
        while( $row = $result->fetch_assoc()){
            $estudiante[] = $row;
        }
    }
    $result->close();
    $this->desconectar();
    return $estudiante;

    public function actualizarEstudiantes($nombre,$cedula,$correo,$matricula,$generacion){
        $this->conectar();
            
        $sql = "UPDATE estudiante SET nombre = ?, cedula = ?, correo = ?, generacion = ? WHERE matricula = ?";
        $stmt = $this ->con->prepare($sql);
        $stmt->bind_param( "isssi")
        
        if ($stmt->execute()){}
    }

 if(isset($_SESSION['listaEstudiante'])){
        $_SESSION['listaEstudiante'] = [];
    }else{
        $docente=[
            'nombre'=>$nombre,
            'cedula'=>$cedula,
            'correo'=>$correo,
            'matricula'=>$matricula,
            'generacion'=>$generacion,
        ];
        $_SESSION['listaEstudiante'][] = $estudiante;
    }

}
}

?>