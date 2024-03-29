<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>SINOVA | Aprendices</title>
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
                    <h1 onclick="botonInicio()"><img src="../images/logoblanco.png" id="imglogo" alt="Logo SENA"> SINOVA <small>CEET</small></h1>
                </div>
                <div class="col-md-4 text-left">
                    <h5 id="funcionario">Funcionario(a): USER</h5>
                </div>
            </div>
        </div>
    </header>

    <section id="breadcrumb">
        <div class="container">
            <p class="breadcrumb">Gestión de novedades del aprendiz</p>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="well">
                        <a class="twitter-timeline" data-width="280" data-height="400" href="https://twitter.com/SENAComunica?ref_src=twsrc%5Etfw">Tweets by SENAComunica</a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
                
                <div class="col-md-9">
                
                    <div class="panel panel-default">
                        <div class="panel-heading main-color-bg">
                        
                            <h3 class="panel-title">Aprendices asociados a la ficha</h3>
                        </div>
                        <div class="panel-body" id="app">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Buscar...">
                                </div>
                            </div>
                            
                            
                            <form action="historial.php" method="post">
                            <table class="table table-striped table-hover">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Tipo de documento</th>
                                    <th>Numero de documento</th>
                                    <th>Correo Electronico</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <?php  include_once "../controllers/consultaAprendices.php"; foreach ($resultado as $clave => $valor): ?>
                                <tr>
                                    <td><?= $valor['nombreAprendiz'];?></td>
                                    <td><?= $valor['tipoDocumento'];?></td>
                                    <td><?= $valor['numeroDocumento'];?></td>
                                    <td><?= $valor['correo'];?></td>
                                    
                                    
                                    <td><a class="btn btn-success" href="Novedades.php"  >Agregar</a></td>
                                    <td><button type="submit" class="btn btn-primary" name="btnidaprendiz" value="<?= $valor['idAprendiz'];?>" >Ver historial</button></td>
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
    <script src="../js/vueaprendices.js"></script>
    <script src="../js/botones.js"></script>
</body>

</html>
