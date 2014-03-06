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
                            $id = $_GET['id'];
                            include("config.php");
                            $result = mysql_query("select * from usuario where id='$id'");


                            while ($row = mysql_fetch_array($result)) {

                                echo "<img src=http://localhost/CadastroComFoto/" . $row['arquivo_nome'] . " width='100' height='100'/><br><br>";
                                echo "Nome: <span class='label label-info'>" . $row['nome'] . "</span><br>";
                                echo "Email: " . $row['email'] . "<br>";
                                //echo "<a href='" . $row['arquivo_nome'] . "'target='_blank'>Visualizar foto</a><br />";
                                echo "Nome Mãe: " . $row['nome_mae'] . "<br>";
                                echo "Nome Pai: " . $row['nome_pai'] . "<br>";
                                echo "Profissão: " . $row['profissao'] . "<br>";
                                echo "Data Nascimento: " . strftime("%d/%m/%Y ", strtotime($row['data_nascimento'])) . "<br>";
                                echo "Endereço: " . $row['endereco'] . ", ";
                                echo "Nº: " . $row['numero'] . ", ";
                                echo "Bairro: " . $row['bairro'] . "<br> ";
                                echo "Cidade: " . $row['cidade'] . ", ";
                                echo "" . $row['estado'] . "<br>";
                                echo "Residencial: " . $row['residencial'] . "<br>";
                                echo "Celular: " . $row['celular'] . "<br>";
                                echo "Facebook: <a href='" . $row['facebook'] . "'target='_blank'> Facebook</a><br />";
                                echo "Sacramento: " . $row['sacramento'] . "<br>";
                                echo "Estado Civil: " . $row['estado_civil'] . "<br>";
                                echo "Filhos: " . $row['filho'] . "<br>";
                                echo "Quantos filhos: " . $row['qtd_filhos'] . "<br>";
                                echo "Observações: " . $row['obs'] . "<br>";
                                echo "Tempo no G.O.: " . $row['tempo_go'] . "<br>";
                            }
                            ?>

                            <br><input class="btn btn-success" name="imprimir" value="Imprimir" onclick="window.print();">
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
