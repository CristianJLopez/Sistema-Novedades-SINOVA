<?php

include_once "../models/conexion.php";





if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}


$ficha=$_POST['btnficha'];
$sql= "SELECT * FROM  aprendices AS A INNER JOIN documentos AS D ON A.tipoDocumento = D.idTipoDocumento  WHERE id_ficha='$ficha'"; 

if (mysqli_query($conexion, $sql)) {
    $resultado = $conexion->query($sql);
    
    while($fila = $resultado->fetch_assoc()) {
        
    }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);





?>
