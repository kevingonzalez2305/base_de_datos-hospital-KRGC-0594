<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$especialidad = $_POST['especialidad'];
$ciudad = $_POST['ciudad'];

$sql = "INSERT INTO doctores (nombre, especialidad, ciudad) 
        VALUES ('$nombre', '$especialidad', '$ciudad')";

if(mysqli_query($conexion, $sql)){
    echo "Doctor guardado con éxito. <a href='formulario.html'>Volver</a>";
} else {
    echo "Error: " . mysqli_error($conexion);
}
?>