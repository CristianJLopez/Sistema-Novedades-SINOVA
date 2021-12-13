<?php


include_once "../models/conexion.php";


$Nombre = $_POST['nombre'];
$Identificacion = $_POST['nidentificacion'];
$correo = $_POST['correo'];
$Ficha = 1;
$Celular = $_POST['celular'];
$rol = $_POST['rol'];
$passw= $_POST['passw'];
$securepassw= sha1($passw);

if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Conectado a la base de datos";

$sql= "INSERT INTO Usuarios VALUES('', '$Nombre', '$Identificacion', '$correo', '$Ficha', '$Celular', '$rol', '$securepassw')"; 

if (mysqli_query($conexion, $sql)) {
      echo "<script>alert('Usuario creado correctamente'); window.location= '../views/AreaAdministrativa.php';</script>";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);

?>
