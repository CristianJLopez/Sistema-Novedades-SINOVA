<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>SINOVA |Restablecer contraseña</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
        <div class="container">
                <p class="navbar-brand">SISTEMA DE NOVEDADES DEL APRENDIZ</p>
                <img src="../images/logosena.png" alt="" >
        </div>
    </nav>
 
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center"> SINOVA <small>Restablecer contraseña</small></h1>
                </div>
            </div>
        </div>
    </header>
    <body>
    <section id="main">
        <div class="container">
            <div class="col-md-4 col-md-offset-4">
                <form id="login" name="formularioo" class="well">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" placeholder="Digite correo SENA" id="correoo">
                    </div>
                    <div class="form-group">
                        <label for="">Numero de identificacion</label>
                        <input type="number" class="form-control" placeholder="Tarjeta de identidad o cedula" id="identificacion" >
                    </div>
                    <input type="button" class="btn btn-warning btn-block" value="Restablecer contraseña" onclick="recuperar()">
                </form>
            </div>
        </div>
        </section>
        <footer id="footer">
            <p>Copyright SINAK, &copy; 2020</p>
        </footer>
    <script src="../js/indexlogin.js"></script>
</body>
