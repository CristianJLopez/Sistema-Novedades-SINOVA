<?php




if (!isset($_POST["correo"]) || !isset($_POST["nombre"]) || !isset($_POST["rol"])) {
    exit();
}



include_once "conexion.php";
$correo = $_POST["correo"];
$nombre = $_POST["nombre"];
$rol = $_POST["rol"];
$passw= $_POST["passw"];
$securepassw= sha1($passw);



$sentencia = $base_de_datos->prepare("INSERT INTO users(correo, nombre, rol, passw) VALUES (?, ?, ?, ?);");
$resultado = $sentencia->execute([$correo, $nombre, $rol, $securepassw]); 


if ($resultado === true) {
    echo "<script>alert('Usuario creado correctamente'); window.location= '../crearUsuario.php';</script>";
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista";
}

?>