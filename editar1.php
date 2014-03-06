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
                            <!--inicio edição-->

                            <?php
                            include("config.php");
                            $id = $_GET['id'];



// Retrieve data from database 
                            $sql = "SELECT * FROM usuario WHERE id = '$id'";
                            $result = mysql_query($sql);
                            $rows = mysql_fetch_array($result);
                            ?>

                            <!----inicio form para edição-->
                            <div class="span10">
                                <!-- INICIO FORM -->
                                <form class="form-horizontal" action='editar2.php' method="POST">
                                    <fieldset>
                                        <div id="legend">
                                            <legend class="breadcrumb">Editar membro</legend>
                                        </div>



                                        <!-- nome --------------------------------------------------->
                                        <div class="control-group">
                                            <label class="control-label" for="nome">Nome:</label>
                                            <div class="controls">
                                                <input name="nome" type="text" id="nome" value="<?php echo $rows['nome']; ?>""/>
                                            </div>
                                        </div>


                                        <!-- email ----------------------------------------------------->
                                        <div class="control-group">
                                            <label class="control-label" for="email">Email:</label>
                                            <div class="controls">
                                                <input name="email" type="text" id="email" value="<?php echo $rows['email']; ?>"/>
                                            </div>
                                        </div>

                                        <!-- profissao ----------------------------------------------------->
                                        <div class="control-group">
                                            <label class="control-label" for="profissao">Profissão:</label>
                                            <div class="controls">
                                                <input name="profissao" type="text" id="profissao" value="<?php echo $rows['profissao']; ?>"/>
                                            </div>
                                        </div>


                                        <!-- nome mae -->
                                        <div class="control-group">
                                            <label class="control-label"  for="nome_mae">Nome Mãe:</label>
                                            <div class="controls">
                                                <input name="nome_mae" type="text" id="nome_mae" value="<?php echo $rows['nome_mae']; ?>"/>
                                            </div>
                                        </div>


                                        <!-- data nascimento -->
                                        <div class="control-group">
                                            <label class="control-label" for="data_nascimento">Data Nascimento  </label>
                                            <div class="controls">
                                                <input name="data_nascimento" type="date" id="data_nascimento" value="<?php echo $rows['data_nascimento']; ?>" />
                                            </div>
                                        </div>




                                        <!-- nome_pai -->
                                        <div class="control-group">
                                            <label class="control-label" for="nome_pai">Nome Pai:</label>
                                            <div class="controls">
                                                <input name="nome_pai" type="text" id="nome_pai" value="<?php echo $rows['nome_pai']; ?>"/>
                                            </div>
                                        </div>




                                        <!-- endereço -->
                                        <div class="control-group">
                                            <label class="control-label"  for="endereco">Endereco: </label>
                                            <div class="controls">
                                                <input name="endereco" type="text" id="endereco" value="<?php echo $rows['endereco']; ?>" /> Nº: 
                                                <input name="numero" type="text" id="numero" value="<?php echo $rows['numero']; ?>"class="input-mini"/> Bairro: 
                                                <input name="bairro" type="text" id="bairro" value="<?php echo $rows['bairro']; ?>"/><br />  

                                            </div>
                                        </div>


                                        <!-- cidade, estado -->
                                        <div class="control-group">
                                            <label class="control-label"  for="cidade">Cidade:</label>
                                            <div class="controls">
                                                <input name="cidade" type="text" id="cidade" value="<?php echo $rows['cidade']; ?>" /> Estado:
                                                <input name="estado" type="text" id="estado" value="<?php echo $rows['estado']; ?>"class="input-mini"/>
                                            </div>
                                        </div>

                                        <!-- telefones -->
                                        <div class="control-group">
                                            <label class="control-label"  for="residencial">Telefone residencial:</label>
                                            <div class="controls">
                                                <input name="residencial" type="text" id="residencial" value="<?php echo $rows['residencial']; ?>"/> Telefone celular:
                                                <input name="celular" type="text" id="celular" value="<?php echo $rows['celular']; ?>"/><br />  

                                            </div>
                                        </div>

                                        <!-- facebook -->
                                        <div class="control-group">
                                            <label class="control-label"  for="facebook">Facebook:</label>
                                            <div class="controls">
                                                <input name="facebook" type="url" id="facebook" value="<?php echo $rows['facebook']; ?>"class="input-xxlarge"/> 
                                            </div>
                                        </div>

                                        <!-- sacramento -->
                                        <div class="control-group">
                                            <label class="control-label"  for="sacramento">Sacramento:</label>
                                            <div class="controls">
                                                <input name="sacramento" type="text" id="facebook" value="<?php echo $rows['sacramento']; ?>"/> 
                                            </div>
                                        </div>

                                        <!-- estado civil -->
                                        <div class="control-group">
                                            <label class="control-label"  for="estado_civil">Estado civil:</label>
                                            <div class="controls">
                                                <input name="estado_civil" type="text" id="estado_civil" value="<?php echo $rows['estado_civil']; ?>"/> 
                                            </div>
                                        </div>

                                        <!-- qtd filhos -->
                                        <div class="control-group">
                                            <label class="control-label"  for="qtd_filhos">Quantidade de filhos:</label>
                                            <div class="controls">
                                                <input name="qtd_filhos" type="text" id="qtd_filhos" value="<?php echo $rows['qtd_filhos']; ?>"class="input-mini"/> 
                                            </div>
                                        </div>

                                        <!-- filho -->
                                        <div class="control-group">
                                            <label class="control-label"  for="filho">Filho</label>
                                            <div class="controls">
                                                <input name="filho" type="text" id="filho" value="<?php echo $rows['filho']; ?>"/> 
                                            </div>
                                        </div>

                                        <!-- tempo go -->
                                        <div class="control-group">
                                            <label class="control-label"  for="tempo_go">Tempo no G.O.:</label>
                                            <div class="controls">
                                                <input name="tempo_go" type="text" id="tempo_go" value="<?php echo $rows['tempo_go']; ?>"/> 
                                            </div>
                                        </div>

                                        <!-- imagem -->
                                        <div class="control-group">
                                            <label class="control-label"  for="tempo_go">Foto:</label>
                                            <div class="controls">
                                                <?php echo "<img src=http://localhost/CadastroComFoto/" . $row['arquivo_nome'] . " width='100' height='100'/><br><br>"; ?>
                                                <input type = "file" name = "arquivo">
                                            </div>
                                        </div>

                                        <!--8.Obs-->
                                        <div class="control-group">
                                            <label class="control-label"  for="obs">Observação:</label>
                                            <div class="span6">
                                                <textarea class="field span8" name="obs" rows="8"><?php echo $rows['obs']; ?> </textarea><br />     <br />                                            </div>
                                        </div>



                                        <!-- Button -->
                                        <div class="control-group">

                                            <div class="controls">
                                                <input name="id" type="hidden" id="id" value="<?php echo $rows['id']; ?>"/>
                                                <button type='submit' class='btn btn-info'>Salvar alterações</button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>

                                <!--fim edição-->


                            </div>
                            <div class="col-md-4 column">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </body>
</html>
