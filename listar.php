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
                                <br><br><br>
                            </center>
                        </center>
                    </div>

                    <div id="legend">
                        <legend class="breadcrumb">Lista de Membros</legend>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-2 column">
                        </div>
                        <div class="col-md-6 column">
                            <?php
                            include("config.php");
                            $result = mysql_query("select * from usuario order by nome");
                            echo "<table width = 900 border = \'2\'>";
                            echo "<tr>";
                            echo "<td>Id</td>";
                            echo "<td>Nome</td>";
                            echo "</tr>";

                            while ($row = mysql_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['nome'] . "</td>";
                                echo "<td>";
                                echo "<a href = \"alterar.php?id=" . $row['id'] . "\">Alterar   </a>";
                                echo "<a href = \"deletar.php?id=" . $row['id'] . "\">Excluir  </a>";
                                echo "<a href = \"ver.php?id=" . $row['id'] . "\">Visualizar</a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                            ?>

                        </div>
                        <div class="col-md-4 column">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
