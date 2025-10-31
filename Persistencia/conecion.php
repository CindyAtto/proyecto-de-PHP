<?php
class conecion{
    private $nombreServidor = 'localhost';
    private $nombreUsuario = 'root';
    private $contrasena = '';
    private $bd = 'estudianteDB';
    protected $con;

    public function conectar(){
        $this-> con = new mysqli(
            $this->nombreServidor,
            $this->nombreUsuario,
            $this->contraseña,
            $this->bd
        );
        if($this->connect_error){
            die("error al conectarse: " .$this->con->connect_error);
        }

     $this->con->set_charset('utf8mb4');
     return $this->con;   
    }
public function desconectar(){
    if($this->con){
        $this->con->close();
    }
}
}
?>