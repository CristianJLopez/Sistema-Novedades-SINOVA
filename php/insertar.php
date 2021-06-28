<?php
/*
================================
Este archivo inserta los datos 
enviados a través de formulario.php
================================
*/
?>
<?php
#Salir si alguno de los datos no está presente
if (!isset($_POST["correo"]) || !isset($_POST["nombre"]) || !isset($_POST["rol"])) {
    exit();
}

#Si todo va bien, se ejecuta esta parte del código...

include_once "conexion.php";
$correo = $_POST["correo"];
$nombre = $_POST["nombre"];
$rol = $_POST["rol"];
$passw= $_POST["passw"];
$securepassw= sha1($passw);


/*
Al incluir el archivo "base_de_datos.php", todas sus variables están
a nuestra disposición. Por lo que podemos acceder a ellas tal como si hubiéramos
copiado y pegado el código
 */
$sentencia = $base_de_datos->prepare("INSERT INTO users(correo, nombre, rol, passw) VALUES (?, ?, ?, ?);");
$resultado = $sentencia->execute([$correo, $nombre, $rol, $securepassw]); # Pasar en el mismo orden de los ?

#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar

if ($resultado === true) {
    # Redireccionar a la lista
	header("Location: ../crearUsuario.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista";
}
