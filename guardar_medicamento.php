<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$uso_medicamento = $_POST['uso_medicamento'];
$ciudad = $_POST['ciudad'];

$sql = "INSERT INTO medicamentos (nombre, uso_medicamento, ciudad) 
        VALUES ('$nombre', '$uso_medicamento', '$ciudad')";

if(mysqli_query($conexion, $sql)){
    echo "Medicamento guardado. <a href='http://localhost/hospital/index.html'>Volver</a>";
} else {
    echo "Error: " . mysqli_error($conexion);
}
?>
