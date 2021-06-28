<?php

/*include_once "conexion.php";
    
    if(!empty($_POST)){
        $correo= $_POST["correo"];
        $passw= $_POST["passw"];
        $securepassw= sha1($passw);

        $sql= "SELECT idUser FROM users WHERE correo = '$correo' AND passw = '$securepassw'";

        $resultado= $base_de_datos->query($sql);
        $rows= $resultado->num_rows;

        if($rows > 0){
            $row= $resultado->fetch_assoc();
            $_SESSION['id_user'] = $row['idUser'];
            header("Location: ../inicio.html");
        }else{
            echo "<script>alert('Datos incorrectos, intente de nuevo');
                    window.location= '../index.php';
                    </script>";
        }
    }
 */

    if($_POST){
        session_start();
        
        require('conexion.php');
        $correo= $_POST['correo'];
        $passw= $_POST['passw'];
        $securepassw= sha1($passw);
        $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query= $base_de_datos->prepare("SELECT * FROM users WHERE correo = :correo AND passw = :passw");
        $query->bindParam(":correo", $correo);
        $query->bindParam(":passw", $securepassw);
        $query->execute();
        $usuario = $query->fetch(PDO::FETCH_ASSOC);

        /*if($usuario==true){
            $_SESSION["usuario"] = $usuario["correo"];
            header("Location: ../inicio.html" );
        }else{
            echo"<script>alert('Datos incorrectos, intente de nuevo');
                 window.location= '../index.php';
                 </script>";
        }*/
        if ($usuario['rol'] == 'SuperAdmin') {
            $_SESSION['usuario'] = $usuario;

            header("Location:../AreaAdministrativa.html");

        } else if($usuario['rol'] == 'Instructor'){

            $_SESSION['usuario'] = $usuario;
            header("Location:../inicio.html");
        }else if($usuario['rol'] == 'Administrativo'){
            $_SESSION['usuario'] = $usuario;
            header("Location:../inicio.html");
        }else{
            echo"<script>alert('Datos incorrectos, intente de nuevo');
                 window.location= '../index.php';
                 </script>";
        }
        session_destroy();
    }
?>