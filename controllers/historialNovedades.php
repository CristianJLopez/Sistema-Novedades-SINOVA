<?php

include_once"../models/conexion.php";


if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}

$idAprendiz=$_POST['btnidaprendiz'];
$sql= "SELECT * FROM  novedades WHERE id_aprendiz='$idAprendiz' "; 

if (mysqli_query($conexion, $sql)) {
    $resultado = $conexion->query($sql);
    
    while($fila = $resultado->fetch_assoc()) {
        
    }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);

?>

