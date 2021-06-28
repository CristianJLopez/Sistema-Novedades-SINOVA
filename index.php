<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>SINOVA | Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
        <div class="container">
                <p class="navbar-brand">SISTEMA DE NOVEDADES DEL APRENDIZ</p>
                <img src="images/logosena.png" alt="" >
        </div>
    </nav>

    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center"> SINOVA <small>Login</small></h1>
                </div>
            </div>
        </div>
    </header>

    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="php/login.php" id="login" name="formulario" class="well" method="POST">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" placeholder="Digite correo SENA" id="correo" name="correo" required>
                        </div>
                        <div class="form-group">
                            <label for="">Contraseña</label>
                            <input type="password" class="form-control" placeholder="Digite contraseña"  name="passw" required>
                        </div>
                        <button type="submit" class="btn btn-warning btn-block"  name="ingresar"> Ingresar </button>
                    </form>
                    <div class="form-group text-center">
                    <a href="recuperar.html" class="link-primary">¿Olvidaste tu contraseña?</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <p>Copyright SINAK, &copy; 2020</p>
    </footer>
    <script type="text/javascript" src="indexlogin.js"></script>
</body>

</html>