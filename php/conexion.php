<?php

$contraseña = "ninguna"; 
$usuario = "sa";
$nombreBaseDeDatos = "ProyectoSinova";
$rutaServidor = "DESKTOP-Q3DK25T";
try {
    $base_de_datos = new PDO("sqlsrv:server=$rutaServidor;database=$nombreBaseDeDatos", $usuario, $contraseña);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conectado a la BD";
} catch (Exception $e) {
    echo "Ocurrió un error con la base de datos: " . $e->getMessage();
}
