<?php
$hostDB = '127.0.0.1';
$nombreDB = 'id17645668_nueva';
$usuarioDB = 'root';
$password = '';
// Conecta con base de datos
$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
$miPDO = new PDO($hostPDO, $usuarioDB, $password);
// Prepara SELECT
$miConsulta = $miPDO->prepare('SELECT * FROM fichas');
// Ejecuta consulta
$miConsulta->execute();

?>
