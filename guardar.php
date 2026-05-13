<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$motivo_consulta = $_POST['motivo_consulta'];
$ciudad = $_POST['ciudad'];

$sql = "INSERT INTO pacientes (nombre, motivo_consulta, ciudad) 
        VALUES ('$nombre', '$motivo_consulta', '$ciudad')";

if(mysqli_query($conexion, $sql)){
    echo "Paciente guardado con éxito. <a href='http://localhost/hospital/index.html'>Volver</a>";
} else {
    echo "Error: " . mysqli_error($conexion);
}
?>
