<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Usuario</title>
</head>
<body>
<form action="" method="post">
    <label>Cédula:</label><input type="text" name="cedula">
    <label>Nombre:</label><input type="text" name="nombre">
    <label>Correo:</label><input type="email" name="correo">

    <fieldset>
        <legend>Seleccione</legend>
        <input type="radio" name="opcion" value="estudiante" onclick="MostrarCampo(this.value)"> Estudiante
        <input type="radio" name="opcion" value="docente" onclick="MostrarCampo(this.value)"> Docente
    </fieldset>

    <div id="CampoEstudiantes" style="display: none;">
        <label>Matrícula:</label><input type="text" name="matricula">
        <label>Generación:</label><input type="text" name="generacion">
    </div>

    <div id="CampoDocente" style="display: none;">
        <label>Título:</label><input type="text" name="titulo">
        <label>Especialidad:</label><input type="text" name="especialidad">
    </div>

    <input type="submit" name="Enviar">
    <input type="submit"value= "ListarEstudiante"name="ListarEstudiante">

</form>

<script>
function MostrarCampo(value) {
    document.getElementById("CampoEstudiantes").style.display = "none";
    document.getElementById("CampoDocente").style.display = "none";

    if (value === "estudiante") {
        document.getElementById("CampoEstudiantes").style.display = "block";
    } else if (value === "docente") {
        document.getElementById("CampoDocente").style.display = "block";
    }
}
</script>

<?php
include_once "../Logica/Docente.php" ;
include_once "../Logica/Estudiante.php";

if (isset($_POST['enviar'])) {
    if ($_POST['opcion'] == "estudiante") {
        $estudiante = new Estudiante();
        $estudiante->setCedula($_POST['cedula']);
        $estudiante->setNombre($_POST['nombre']);
        $estudiante->setCorreo($_POST['correo']);
        $estudiante->setMatricula($_POST['matricula']);
        $estudiante->setGeneracion($_POST['generacion']);
        $estudiante->AgregarEstudiante();
}
 if($_POST ['opcion'] == "docente"){
        echo "click en docente";
    }

}

    if (isset($_SESSION['listaEstudiente'])){
        echo "<table border=1>
        <tr>
        <th> nombre </th>
        <th> cedula </th>
        <th> correo </th>
        <th> matricula </th>
        <th> generacion </th>
        </tr>";
    
    foreach($_SESSION['listaEstudiente'] as $estudiante ){
    if (count($_SESSION['listaEstudiente'])>0){
                echo "<tr>
              <td> ".$estudiante['cedula']."</td>
              <td> ".$estudiante['correo']."</td>
              <td> ".$estudiante['nombre']."</td>
              <td> ".$estudiante['matricula']."</td>
              <td> ".$estudiante['generacion']."</td>            
        </tr>";

    echo "</table>";
} else {
    echo "no hay estudiantes registrados";
}
    }
    }
if (isset($_POST['enviar'])){
    if($_POST['opcion'] == 'docente'){
    $docente = new docente();
    $docente->setCedula($_POST['cedula']);
    $docente->setNombre($_POST['nombre']);
    $docente->setCorreo($_POST['correo']);
    $docente->settitulo($_POST['titulo']);
    $docente->setespecialidad($_POST['especialidad']);
    $docente->agregarDocente();    
    }
}
if (isset($_SESSION['listaDocente'])){

    echo '<table border=1>
    <tr>
    <th> nombre </th>
    <th> cedula </th>
    <th> correo </th>
    <th> titulo </th>
    <th> especialidad </th>
    </tr>'; 
 
 

foreach($_SESSION['listaDocente'] as $docente){
    if (count($_SESSION['listaDocente'])>0){
        echo"<tr>
        <td> ".$estudiante['cedula']."</td>
        <td> ".$estudiante['correo']."</td>
        <td> ".$estudiante['nombre']."</td>
        <td> ".$docente['titulo']."</td>
        <td> ".$docente['especialidad']."</td>
       </tr> ";
    }
}

echo "</table>";
}
?>

</body>