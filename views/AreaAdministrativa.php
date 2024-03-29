<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <title>SINOVA | SUPERADMIN</title>

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
                <div class="col-md-8">
                    <h1 onclick="botonInicio()"><span><img src="../images/logoblanco.png" id="imglogo" alt="Logo SENA"></span> SINOVA <small>Administrar Software</small></h1>
                </div>
                <div class="col-md-4 text-left">
                    <h5 id="funcionario">Funcionario(a): SUPERADMIN</h5>
                </div>
            </div>
        </div>
    </header>
    <section id="breadcrumb">
        <div class="container">
            <p class="breadcrumb">Creacion de nuevos usuarios</p>
        </div>
    </section>
    <section id="main">
        <div class="container" >
            <div class="image-upload">
                <label>
                <a href="crearUsuario.php"><img id="imguser" src="../images/usuario.png"/><p>Crear Usuario</p></a> 
                </label>
                
            </div>
        </div>
    </section>



    <section id="breadcrumb">
        <div class="container">
            <p class="breadcrumb">Migracion de datos</p>
        </div>
    </section>
    <section id="main">
        <div class="container" >
            <div class="image-upload">
                <label for="file-input">
                    <img id="imgcsv" src="../images/upload.png"/> <a href=""><input id="file-input" type="file"/></a>
                </label>
                    
            </div>
        </div>
    </section>

    

    

    <footer id="footer">
        <p>Copyright SINAK, &copy; 2020</p>
    </footer>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/botones.js"></script>
</body>

</html>