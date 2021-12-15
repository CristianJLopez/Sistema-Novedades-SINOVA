<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>SINOVA | Historial aprendiz</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

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
                    <h1 onclick="botonInicio()"><span><img src="../images/logoblanco.png" id="imglogo" alt="Logo SENA"></span> SINOVA <small>CEET</small></h1>
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
                            <h3 class="panel-title">Historial de novedades</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Buscar...">
                                </div>
                            </div>
                            <form action="descripcion.php" method="post">
                            <table class="table table-striped table-hover">
                                <tr>
                                    <th>Fecha </th>
                                    <th>Asunto</th>
                                    <th>Instructor</th>
                                    <th></th>
                                </tr>
                                <?php  include_once "../controllers/historialNovedades.php"; foreach ($resultado as $clave => $valor): ?>
                                <tr>
                                    <td><?= $valor['fecha'];?></td>
                                    <td><?= $valor['asunto'];?></td>
                                    <td><?= $valor['Nombre'];?></td>
                                    <td><button type="submit" class="btn btn-success" name="btnidnovedad" value="<?= $valor['idNovedad'];?>">Ver</button></td>
                                </tr>
                                <?php endforeach; ?>
                            </table>
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