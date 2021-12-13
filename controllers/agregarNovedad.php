<?php
include_once "../models/conexion.php";

$asunto=$_POST['asunto'];
$descripcion=$_POST['descripcion'];
$tipoNovedad=$_POST['tipoNovedad'];
$fecha=$_POST['fecha'];
$archivo=$_POST['archivo'];


if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Conectado a la base de datos";
$idAprendiz=$_POST['btnidaprendiz'];
$sql= "INSERT INTO novedades VALUES('', '$asunto', '$descripcion', '$tipoNovedad', '$fecha', '$archivo', '$idAprendiz')"; 

if (mysqli_query($conexion, $sql)) {
    echo "<script>alert('Novedad creada correctamente'); window.location= '../views/inicio.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);

?>