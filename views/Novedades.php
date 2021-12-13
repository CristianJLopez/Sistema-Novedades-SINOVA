<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>SINOVA | Novedades</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-right">
                <a href="../index.php" class="navbar-brand">Cerrar Sesion</a>
            </div>
        </div>
    </nav>

    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 onclick="botonInicio()"><img src="../images/logoblanco.png" id="imglogo" alt="Logo SENA"></span> SINOVA <small>CEET</small></h1>
                </div>
                <div class="col-md-4 text-left">
                    <h5 id="funcionario">Funcionario(a): USER</h5>
                </div>
            </div>
        </div>
    </header>

    <section id="breadcrumb">
        <div class="container">
           <p class="breadcrumb">Aca va el nombre del aprendiz (1964701)</p>

        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="well" >
                        <a class="twitter-timeline" data-width="280" data-height="400" href="https://twitter.com/SENAComunica?ref_src=twsrc%5Etfw">Tweets by SENAComunica</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div> 
                </div>
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-heading main-color-bg">
                            <h3 class="panel-title">Agregar Novedad</h3>
                        </div>
                        <div class="panel-body">
                            <form action="../controllers/agregarNovedad.php"  method="POST">
                                <div class="form-group">
                                    <label>Asunto novedad</label>
                                    <input type="text" class="form-control" name="asunto" id="asunto" placeholder="Describa la novedad en maximo 5 palabras">
                                </div>
                                <div class="form-group">
                                    <label>Descripción Novedad</label>
                                    <textarea type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Describa los hechos en maximo 500 palabras"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" value="1" name="tipoNovedad" id="tipoNovedad" > Académica  
                                        <input type="checkbox" value="2" name="tipoNovedad" id="tipoNovedad"  > Disciplinaria                                     
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="fecha" id="fecha" name="fecha">Fecha</label>
                                    <input type="date" id="fecha" name="fecha" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="adjuntarArchivo">Adjuntar archivo</label>
                                    <input type="file" id="archivo" name="archivo">
                                    <p class="help-block">Recomendado en formato PDF</p>
                                </div>
                                <button type="submit" class="btn btn-info" >He terminado!</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
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