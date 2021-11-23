<?php
require('../models/conexion.php');
    
    
    if(isset($_POST['ingresar'])){

    // 3. Variables $_POST[]
    $u = $_POST['correo'];
    $c = $_POST['passw']; 
    $securepassw = sha1($c);

    if($u == "" || $_POST['passw'] == null){ // Validamos que ningún campo quede vacío
        echo "<script>alert('Error: usuario y/o clave vacios!!');</script>"; // Se utiliza Javascript dentro de PHP
    }else{
        // 4. Cadena de SQL
        $sql = "SELECT * FROM Usuarios WHERE Correo = '$u' AND Password = '$securepassw'";

        // 5. Ejecuto cadena query()
        if(!$consulta = $conexion->query($sql)){
            echo "ERROR: no se pudo ejecutar la consulta!";
        }else{

            // 6. Cuento registros obtenidos del select. 
            
            $filas = mysqli_num_rows($consulta);
            $fila = mysqli_fetch_assoc($consulta);
            // 7. Comparo cantidad de registros encontrados
           /* if($filas == 0){
                
                echo "<script>
                        alert('Error: usuario y/o clave incorrectos!!');
                        window.location.href ='../index.php';
                        </script>";
                
                
            }else{
                header('location:../views/inicio.php'); // Si está todo correcto redirigimos a otra página
            }*/


            if ($filas >= 1){
    
        	$_SESSION['TipoUsuario'] = $fila['TipoUsuario'];
        	if ($_SESSION['TipoUsuario']==3){
        		header('Location:../views/AreaAdministrativa.php');	
        	}
        	else if ($_SESSION['TipoUsuario']==2){
        		header('Location:../views/inicio.php');	
        	}
        	else if ($_SESSION['TipoUsuario']==1){
        		header('Location:../views/inicio.php');	
        	}
        }
        else{
        	 echo 
              "<script>alert('Error: usuario y/o clave incorrectos!!');
                        window.location.href ='../index.php';
                        </script>";
        }
        }
    }
}
?>