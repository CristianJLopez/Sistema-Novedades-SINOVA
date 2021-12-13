
<html>

<head>
    <meta charset="utf-8">
    <title>Inicio | SINOVA</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-right">
                <a href="../index.php" class="navbar-brand">Cerrar sesion</a>
            </div>
        </div>
    </nav>

    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1><span><img src="../images/logoblanco.png" id="imglogo" alt="Logo SENA"></span> SINOVA <small> CEET</small></h1>
                </div>
                    <div class="col-md-4 text-left">
                        <h5 id="funcionario">Funcionario(a): USER</h5>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="breadcrumb">
        <div class="container">
                <p class="breadcrumb"> Gestión de novedades del aprendiz</p>
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
                <div class="col-md-9" id="app">
                    <div class="panel panel-default">
                        <div class="panel-heading main-color-bg">
                            <h3 class="panel-title">Fichas asignadas</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Buscar...">
                                </div>
                            </div>
                             <form method="post" action="Aprendices.php">
                            <table class="table table-striped table-hover">
                                        <th>Número de ficha</th>
                                        <th>Nombre del Programa</th>
                                        <th>Ingresar</th>
                                <?php  include_once "../controllers/consultaFichas.php"; foreach ($miConsulta as $clave => $valor): ?>
                                <tr>
                                    <td><?= $valor['numero_ficha'];?></td>
                                    <td><?= $valor['nombre_programa'];?></td>
                                    <td><button class="btn btn-success" type="submit" value="<?=$valor['id_ficha'];?>" name="btnficha">Ver</button></td>
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
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="../js/vuefichas.js"></script>
    <script src="../js/botones.js"></script>
</body>

</html>
