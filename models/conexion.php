
/*


$servidor="localhost";
$usuario="id17645668_root";
$pass="@#Ninguna22#";
$base_datos="id17645668_nueva";
$conexion=mysqli_connect($servidor,$usuario,$pass,$base_datos);
if(mysqli_connect_errno()){
    echo "ERROR DE CONEXIÓN:".mysqli_connect_errno();
}

*/

 

<?php
$servidor="localhost";
$usuario="root";
$pass="";
$base_datos="id17645668_nueva";
$conexion=mysqli_connect($servidor,$usuario,$pass,$base_datos);
if(mysqli_connect_errno()){
    echo "ERROR DE CONEXIÓN:".mysqli_connect_errno();
}
?>