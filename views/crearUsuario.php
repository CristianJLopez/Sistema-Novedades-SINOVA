<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <title>Crear Usuario</title>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            
                <div class="navbar-right">
                    <a href="../index.php" class="navbar-brand">Cerrar sesion</a>
                </div>
            </div>
        </div>
    </nav>
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h1 class="text-center"> SINOVA <small>Crear Usuario</small></h1>
                </div>
            </div>
        </div>
    </header>
    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form name="formulario" class="well" action="../controllers/insertar.php" method="POST">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" placeholder="Digite correo SENA" id="correo" name="correo" required>
                        </div>
                        <div class="form-group">
                            <label for="">Nombre y apellido</label>
                            <input type="text" class="form-control" placeholder="" id="nombre" name="nombre" required>
                            <label for="">Numero de identificacion</label>
                            <input type="number" class="form-control" placeholder="" id="nidentificacion" name="nidentificacion" required>
                            <label for="">Celular</label>
                            <input type="number" class="form-control" placeholder="" id="celular" name="celular" required>
                        </div>
                        <div class="form-group">
                            <label >Rol</label><br>
                            <select name="rol" required >
                                <option value="" disabled="disabled" selected="true">Elija Uno</option>
                                <option value=1>Instructor</option>
                                <option value=2>Administrativo</option>
                                <option value=3>SuperAdmin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Contraseña</label>
                            <input type="password" class="form-control"name="passw" required>
                            <label for="">Repita contraseña</label>
                            <input type="password" class="form-control"name="passw2" required>
                        </div>
                        <button type="submit" class="btn btn-success btn-block" value="Crear" id="crear" onclick="comprobarClave()" >Crear</button>
                        <input type="button" class="btn btn-danger btn-block" value="Cancelar" onclick="botonCancelarCrearUsuario()">
                        
                    </form>
                    
                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <p>Copyright SINAK, &copy; 2020</p>
    </footer>
    <script src="../js/botones.js"></script>
    <script src="../js/comprobarPw.js"></script>
</body>
</html>