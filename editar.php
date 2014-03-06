<!DOCTYPE html>
<html>


    <head>
        <meta charset="utf-8">
        <!-- JQUERY --> 
        <link type="text/css"href="jquery-ui-1.10.3.custom/css/ui-lightness/jquery-ui-1.10.3.custom.css" rel="stylesheet" />
        <script type="text/javascript" src="jquery-ui-1.10.3.custom/js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.js"></script>
        <script type="text/javascript" src="jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js"></script>

        <!-- TWITTER BOOTSTRAP CSS --> 
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" /> 

        <!-- TWITTER BOOTSTRAP JS --> 
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- ESTILO -->
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <link rel="stylesheet" type="text/css" href="estiloForm.css">

    </head>

    <body>
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <div class="jumbotron">
                        <center>
                            <br><img src="" width="141" height="32">
                            <h2>Cadastro de Membros </h2>
                            <h6>Grupo de Oração Renascer no Espírito Santo</h6>
                            <center>
                                <!-- home-->
                                <a href="index.html" class="btn btn-info">
                                    <i class="icon-home icon-white"></i> <span><strong>Home</strong></span>
                                </a>
                                <!--cadastro-->
                                <a href="cadastro.php" class="btn btn-info">
                                    <i class="icon-pencil icon-white"></i> <span><strong>Cadastrar</strong></span>
                                </a>
                                <!--cadastro-->
                                <a href="listar.php" class="btn btn-info">
                                    <i class="icon-list icon-white"></i> <span><strong>Listar</strong></span>
                                </a>
                                <br><br><br>
                            </center>
                        </center>
                    </div>

                    <div id="legend">
                        <legend class="breadcrumb">Informações sobre o membro</legend>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-2 column">
                        </div>
                        <div class="col-md-6 column">
                            <center>

                                <?php
                                // Connect to server and select database.
                                include("config.php");



                                $sql = "SELECT * FROM usuario";
                                $result = mysql_query($sql);
                                ?>


                                <table class='table table-condensed'>


                                    <tr>
                                        <td align="center"><strong>Titulo</strong></td>
                                        <td align="center"><strong>Autor</strong></td>

                                    </tr>

                                    <?php
                                    while ($rows = mysql_fetch_array($result)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $rows['nome']; ?></td>
                                            <td><?php echo $rows['email']; ?></td>
                                            <td align="center"><a href="editar1.php?id=<?php echo $rows['id']; ?>">Editar</a></td>
                                        </tr>

                                        <?php
                                    }
                                    ?>

                                </table>
                            </center>
                        </div>
                        <div class="col-md-4 column">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
