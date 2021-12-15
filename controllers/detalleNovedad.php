<?php

include_once"../models/conexion.php";


if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}

$idNovedad=$_POST['btnidnovedad'];
$sql= "SELECT * FROM novedades inner join aprendices ON novedades.id_aprendiz = aprendices.idAprendiz inner join fichas ON aprendices.id_ficha = fichas.id_ficha inner join tipoNovedad on novedades.tipoNovedad = tipoNovedad.idTipoNovedad WHERE novedades.idNovedad='$idNovedad'";

if (mysqli_query($conexion, $sql)) {
    $resultado = $conexion->query($sql);
    
    while($fila = $resultado->fetch_assoc()) {
        
    }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);

?>