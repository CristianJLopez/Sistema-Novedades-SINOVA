<?php




if (!isset($_POST["correo"]) || !isset($_POST["nombre"]) || !isset($_POST["rol"])) {
    exit();
}



include_once "conexion.php";


$Nombre = $_POST["nombre"];
$Identificacion = $_POST["nidentificacion"];
$correo = $_POST["correo"];
$Ficha = 1;
$Celular = $_POST["celular"];
$rol = $_POST["rol"];
$passw= $_POST["passw"];
$securepassw= sha1($passw);



$sentencia = $base_de_datos->prepare("INSERT INTO Usuarios(Nombre, Identificacion, Correo, Ficha, Celular, TipoUsuario, Contraseña) VALUES (?, ?, ?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$Nombre, $Identificacion, $correo, $Ficha, $Celular, $rol, $securepassw]); 


if ($resultado === true) {
    echo "<script>alert('Usuario creado correctamente'); window.location= '../crearUsuario.php';</script>";
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista";
}

?>