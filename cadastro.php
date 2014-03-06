<!DOCTYPE html>
<html lang="pt-br">

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

        <script type="text/javascript" src="http://cidades-estados-js.googlecode.com/files/cidades-estados-1.2-utf8.js"></script> 
        <script type="text/javascript">
            window.onload = function() {
                new dgCidadesEstados({
                    estado: document.getElementById('estado'),
                    cidade: document.getElementById('cidade'),
                    estadoVal: '<%=Request("estado") %>',
                    cidadeVal: '<%=Request("cidade") %>'
                });
            }
        </script>




    </head>
    <body>
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <div class="jumbotron">
                        <center>

                            <h2>Cadastro de Membros </h2>
                            <h6>Grupo de Oração Renascer no Espírito Santo</h6>
                        </center>



                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-2 column">
                    <center>
                        <!-- home-->
                        <a href="index.html" class="btn btn-info">
                            <i class="icon-home icon-white"></i> <span><strong>Home</strong></span>
                        </a>
                        <!--listar-->
                        <a href="listar.php" class="btn btn-info">
                            <i class="icon-list icon-white"></i> <span><strong>Listar</strong></span>
                        </a>
                        <br><br><br>
                    </center>

                    <form enctype="multipart/form-data" method="post" action="cadastrando.php">
                        <!-----------------------------------------------------------------------dados pessoais-->
                        <fieldset>
                            <div id="legend">
                                <legend class="breadcrumb">Dados Pessoais</legend>
                            </div>

                            <!-- nome completo-->
                            <div class="control-group">
                                <label class="control-label" for="nome">Nome Completo:</label>
                                <div class="controls">
                                    <input type="text" name="nome" required="" placeholder="campo obrigatório" autofocus="">
                                    <input type = "file" name = "arquivo" required="">

                                </div>
                            </div>

                            <!-- data nascimento-->
                            <div class="control-group">
                                <label class="control-label" for="data_nascimento">Data Nascimento:</label>
                                <div class="controls">
                                    <input type="date" name="data_nascimento"/>
                                </div>
                            </div>

                            <!-- nome mãe-->
                            <div class="control-group">
                                <label class="control-label" for="nome_mae">Nome mãe:</label>
                                <div class="controls">
                                    <input type="text" name="nome_mae">
                                </div>
                            </div>

                            <!-- nome pai-->
                            <div class="control-group">
                                <label class="control-label" for="nome_pai">Nome pai:</label>
                                <div class="controls">
                                    <input type="text" name="nome_pai" >
                                </div>
                            </div>

                            <!-- profissao-->
                            <div class="control-group">
                                <label class="control-label" for="profissao">Profissão:</label>
                                <div class="controls">
                                    <input type="text" name="profissao" >
                                </div>
                            </div>

                            <!-----------------------------------------------------------------------contatos-->
                            <div id="legend">
                                <legend class="breadcrumb">Contatos</legend>
                            </div>

                            <!-- endereço-->
                            <div class="control-group">
                                <label class="control-label" for="endereco">Endereço:</label>
                                <div class="controls">
                                    <input type="text" name="endereco" >
                                    Nº: <input class="input-mini" type="text" name="numero" >
                                    Bairro: <input type="text" name="bairro" >
                                </div>
                            </div>

                            <!-- cidade e estados-->
                            <div class="control-group">
                                <label>Estado:</label>
                                <div class="controls">
                                    <select id="estado" name="estado" ></select>
                                    <label>Cidade:</label>
                                    <select id="cidade" name="cidade"></select>
                                </div>
                            </div>

                            <!-- telefone residenscial-->
                            <div class="control-group">
                                <label class="control-label" for="residencial">Telefone Residencial:</label>
                                <div class="controls">
                                    <input type="text" name="residencial" >
                                </div>
                            </div>

                            <!-- telefone celular-->
                            <div class="control-group">
                                <label class="control-label" for="celular">Telefone Celular:</label>
                                <div class="controls">
                                    <input type="text" name="celular" >
                                </div>
                            </div>
                            <!-- Redes sociais-->
                            <div class="control-group">
                                <label class="control-label" for="facebook">Facebook:</label>
                                <div class="controls">
                                    <input class="input-large" type="url" name="facebook" >
                                </div>
                            </div>

                            <!-- email-->
                            <div class="control-group">
                                <label class="control-label" for="email">Email:</label>
                                <div class="controls">
                                    <input type="email" name="email" placeholder="campo obrigatório" required="">
                                </div>
                            </div>

                            <!-----------------------------------------------------------------------informações eclesiásticas-->
                            <div id="legend">
                                <legend class="breadcrumb">Informações Eclesiásticas</legend>
                            </div>

                            <!-- sacramento-->
                            <div class="control-group">
                                <label class="control-label" for="sacramento">Sacramentos:</label>
                                <div class="controls">
                                    <input type="checkbox" name="sacramento[]" value="Não informado" checked> Não informado
                                    <input type="checkbox" name="sacramento[]" value="Batismo" unchecked> Batismo
                                    <input type="checkbox" name="sacramento[]" value="Eucaristia" unchecked> Eucaristia
                                    <input type="checkbox" name="sacramento[]" value="Crisma" unchecked> Crisma
                                    <input type="checkbox" name="sacramento[]" value="Matrimonio" unchecked> Matrimonio

                                </div>
                            </div>


                            <!-- estado civil-->
                            <div class="control-group">
                                <label class="control-label" for="sacramento">Estado Civil:</label>
                                <div class="controls">
                                    <input type="radio" name="estado_civil" id="estado_civil" value="Não informado" checked> Não informado
                                    <input type="radio" name="estado_civil" id="estado_civil" value="Solteiro" unchecked> Solteiro(a)
                                    <input type="radio" name="estado_civil" id="estado_civil" value="Casado" unchecked> Casado(a)
                                    <input type="radio" name="estado_civil" id="divorciado" value="Divorciado" unchecked> Divórciado(a)
                                    <input type="radio" name="estado_civil" id="namorado" value="Namorado" unchecked> Divórciado(a)
                                    <input type="radio" name="estado_civil" id="namorado" value="Viuvo" unchecked> Viuvo(a)
                                </div>
                            </div>


                            <!-- estado civil-->
                            <div class="control-group">
                                <label class="control-label" for="sacramento">Tem filhos?</label>
                                <div class="controls">
                                    <input type="radio" name="filho" id="filho" value="Não informado" checked> Não informado
                                    <input type="radio" name="filho" id="filho" value="Sim" unchecked> Sim
                                    <input type="radio" name="filho" id="filho" value="Nao" unchecked> Não
                                </div>
                            </div>

                            <!-- qts filhos-->
                            <div class="control-group">
                                <label class="control-label" for="qtd_filhos"></label>
                                <div class="controls">
                                    Se sim para resposta anterior, quantos? <input class="input-mini" type="text" name="qtd_filhos" >
                                </div>
                            </div>

                            <!-- qts filhos-->
                            <div class="control-group">
                                <label class="control-label" for="tempo_go"></label>
                                <div class="controls">
                                    Tempo aproximado que participa do G.O. <input class="input-mini" type="text" name="tempo_go" >
                                </div>
                            </div>

                            <!-- observacoes-->
                            <div class="control-group">
                                <label class="control-label" for="tempo_go">Observações</label>
                                <div class="controls">
                                    <textarea name="obs" rows="7" cols="190">Anote aqui outras observações, se necessário.
                                    </textarea>
                                </div>
                            </div>

                            <!--botao gravar-->
                            <p><div class="control-group">
                                <div class="controls">
                                    <button class="btn btn-success">Gravar</button>
                                </div>
                            </div></p>
                        </fieldset>
                    </form>                    

                </div>
                <div class="col-md-6 column">
                    <center>
                        <br><br>

                    </center>

                </div>
                <div class="col-md-4 column">

                </div>
            </div>
        </div>

    </body>
</html>
