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




                                $sql = "UPDATE usuario SET nome='" . $_POST['nome'] . "',
                                                              email='" . $_POST['email'] . "',
                                                              nome_mae='" . $_POST['nome_mae'] . "',
                                                              nome_pai='" . $_POST['nome_pai'] . "',
                                                              profissao='" . $_POST['profissao'] . "',
                                                              data_nascimento='" . $_POST['data_nascimento'] . "',
                                                              endereco='" . $_POST['endereco'] . "',
                                                              numero='" . $_POST['numero'] . "',
                                                              bairro='" . $_POST['bairro'] . "',
                                                              estado='" . $_POST['estado'] . "',
                                                              cidade='" . $_POST['cidade'] . "',
                                                              residencial='" . $_POST['residencial'] . "',
                                                              celular='" . $_POST['celular'] . "',
                                                              facebook='" . $_POST['facebook'] . "',
                                                              sacramento='" . $_POST['sacramento'] . "',   
                                                              estado_civil='" . $_POST['estado_civil'] . "',
                                                              filho='" . $_POST['filho'] . "',
                                                              qtd_filhos='" . $_POST['qtd_filhos'] . "',
                                                              tempo_go='" . $_POST['tempo_go'] . "',
                                                              arquivo_nome='" . $_POST['arquivo_nome'] . "',
                                                              obs='" . $_POST['obs'] . "' WHERE id='" . $_POST['id'] . "'";

                                $result = mysql_query($sql) or
                                        die("this stuffedup");


// if successfully updated. 
                                if ($result) {
                                    echo "<span class='label label-info'>Dados atualizados com sucesso'</span>";
                                } else {
                                    echo "ERROR";
                                }
                                ?>
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
