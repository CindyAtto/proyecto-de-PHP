<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Curso</title>
</head>
<body>
<form action="" method="post">
    <label>Nombre:</label><input type="text" name="nombre">
    <label>Codigo:</label><input type="number" name="codigo">
    <label>Cantidad de Credito:</label><input type="number" name="CantCred">

    <button type="submit" name="enviar">Enviar</button>
</form>

<?php
include_once "../Logica/Curso.php";

if (isset($_POST['enviar'])) {
        $curso = new Curso();
        $curso->setNombre($_POST['nombre']);
        $curso->setCodigo($_POST['codigo']);
        $curso->setCantCred($_POST['CantCred']);
        $curso->AgregarCurso();
}

    if (isset($_SESSION['listaCurso'])){
        echo "<table border=1>
        <tr>
        <th> nombre </th>
        <th> codigo </th>
        <th> CantCred </th>
        </tr>";
    
    foreach($_SESSION['listaCurso'] as $curso ){
    if (count($_SESSION['listaCurso'])>0){
                echo "<tr>
              <td> ".$curso['codigo']."</td>
              <td> ".$curso['CantCred']."</td>
              <td> ".$curso['nombre']."</td>           
        </tr>";

    echo "</table>";
} else {
    echo "no hay cursos registrados";
}
    }
    }

?>

</body>