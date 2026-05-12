<?php
include("conexion.php");

$nombre_paciente = $_POST['nombre_paciente'];
$motivo_consulta = $_POST['motivo_consulta'];
$ciudad = $_POST['ciudad'];

$sql = "INSERT INTO consultas (nombre_paciente, motivo_consulta, ciudad) 
        VALUES ('$nombre_paciente', '$motivo_consulta', '$ciudad')";

if(mysqli_query($conexion, $sql)){
    echo "Consulta registrada. <a href='formulario.html'>Volver</a>";
} else {
    echo "Error: " . mysqli_error($conexion);
}
?>