<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>SINOVA| Descripción Novedad</title>
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
            <p class="breadcrumb">Gestion de novedades del aprendiz</p>
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
                <?php  include_once "../controllers/detalleNovedad.php"; foreach ($resultado as $clave => $valor): ?>
                    <div class="panel panel-default">
                        <div class="panel-heading main-color-bg">
                            <h3 class="panel-title">Descripción de la Novedad (<?= $valor['nombreAprendiz'];?>)(<?= $valor['numero_ficha'];?>)</h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                  <tr>
                                      <td> <strong>Tipo de novedad</strong></td>
                                      <td><?= $valor['nombreNovedad'];?></td>
                                  </tr>
                                  <tr>
                                    <td><strong>Nombre del aprendiz</strong></td>
                                    <td><?= $valor['nombreAprendiz'];?></td>
                                </tr>
                                <tr>
                                    <td><strong>Numero de documento</strong></td>
                                    <td><?= $valor['numeroDocumento'];?></td>
                                </tr>
                                <tr>
                                    <td><strong>Correo electronico</strong></td>
                                    <td><?= $valor['correo'];?></td>
                                </tr>
                                <tr>
                                    <td><strong>Numero de ficha</strong></td>
                                    <td><?= $valor['numero_ficha'];?></td>
                                </tr>
                                <tr>
                                    <td><strong>Nombre del programa</strong></td>
                                    <td><?= $valor['nombre_programa'];?></td>
                                </tr>
                                <tr>
                                    <td><strong>Modalidad</strong></td>
                                    <td>Presencial</td>
                                </tr>
                                <tr>
                                    <td><strong>Nombre del instructor</strong></td>
                                    <td>Nubia Marcela Benitez</td>
                                </tr>
                                <tr>
                                    <td><strong>Fecha de la novedad</strong></td>
                                    <td><?= $valor['fecha'];?></td>
                                </tr>
                                <tr>
                                    <td><strong>Novedad</strong></td>
                                    <td><?= $valor['asunto'];?></td>
                                </tr>
                                <tr>
                                    <td><strong>Documentos adjuntos</strong></td>
                                    <td><a href="">No hay documentos adjuntos</a> </td>
                                </tr>
                               
                                <tr>
                                    <td></td>
                                    <td><img  src="../images/imgpdf.png" alt="descargar" > <a href="../lib/reporte.php" onclick="descargar()">Descargar PDF</a>  </td>
                                </tr>
                                </table>
                                <?php endforeach; ?>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <p>Copyright SINAK, &copy; 2020</p>
    </footer>
    <script src="../js/botones.js"></script>
</body>

</html>