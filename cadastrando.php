<meta charset="utf-8">
<?php
include("config.php");

$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$dataFormatoMySQL = implode("-", array_reverse(explode("/", $data_nascimento)));
$profissao = $_POST['profissao'];
$nome_mae = $_POST['nome_mae'];
$nome_pai = $_POST['nome_pai'];

$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$residencial = $_POST['residencial'];
$celular = $_POST['celular'];
$facebook = $_POST['facebook'];
$email = $_POST['email'];

$sacramento = implode(',', $_POST['sacramento']);
$estado_civil = $_POST['estado_civil'];
$filho = $_POST['filho'];
$qtd_filhos = $_POST['qtd_filhos'];
$tempo_go = $_POST['tempo_go'];
$obs = $_POST['obs'];

//----------------------------
//-----------------------------
#//retirando espaços
$nome = trim($nome);
$email = trim($email);

$erro = 0;

$sqlquery = ("SELECT * FROM usuario WHERE email='$email'");
$sqlresult = mysql_query($sqlquery);
$sqlnum = mysql_num_rows($sqlresult);

if ($sqlnum == 1) {
    echo '<center><font color="#FF0000">E-mail já cadastro em nosso banco de dados!</font>';
    $erro++;
}
//upload---------------------------------------------
//se existir o arquivo

if (!isset($_FILES["arquivo"])) {
    echo 'arquivo de imagem não existe';
    exit();
}


$arquivo = $_FILES["arquivo"];

$pasta_dir = "arquivos/"; //diretorio dos arquivos
//se nao existir a pasta ele cria uma
if (!file_exists($pasta_dir)) {
    mkdir($pasta_dir);
}

$arquivo_nome = $pasta_dir . $arquivo["name"];

// Faz o upload da imagem
move_uploaded_file($arquivo["tmp_name"], $arquivo_nome);



//fim upload-----------------------------------------
#//se não encontrar @
if ($email == null) {
    echo '<center><font color="#FF0000">E-mail incorreto!</font>';
    $erro++;
}

#//encontrar números
if ($nome == null) {
    echo '<center><font color="#FF0000">Nome incorreto!</font>';
    $erro++;
}

#//verificar se campo nome foi setado
if (empty($nome)) {
    echo '<center><font color="#FF0000">Campo nome em branco!</font>';
    $erro++;
}


if ($erro == 0) {
    #//inseri no banco de dados se tudo for OK
    $i = mysql_query("INSERT INTO usuario (nome,
                    data_nascimento, 
                    nome_mae, 
                    nome_pai, 
                    profissao, 
                    endereco,
                    numero,
                    bairro,
                    estado,
                    cidade,
                    residencial,
                    celular,
                    facebook,
                    email,
                    sacramento,
                    estado_civil,
                    filho,
                    qtd_filhos,
                    tempo_go,
                    obs,
                    arquivo_nome,
                    datetime
                    ) 
                    VALUES ('$nome',
                    '$dataFormatoMySQL',
                    '$nome_mae',
                    '$nome_pai',
                    '$profissao',
                    '$endereco',
                    '$numero',
                    '$bairro',
                    '$estado',
                    '$cidade',
                    '$residencial',
                    '$celular',
                    '$facebook',
                    '$email',
                    '$sacramento',
                    '$estado_civil',
                    '$filho',
                    '$qtd_filhos',
                    '$tempo_go',
                    '$obs',
                    '$arquivo_nome',
                    now()
                    )");

    echo '<center>Cadastro efetuado com sucesso!<br><br>
                        <b>Nome:</b> ' . $nome . '<br>
                        <b>Nome Mae: </b> ' . $nome_mae . '<br>
                        <b>Nome Pai: </b> ' . $nome_mae . '<br>
                        <b>Nome Profissão: </b> ' . $nome_mae . '<br>
                        <b>Endereço: </b> ' . $endereco . '<br>
                        <b>Numero: </b> ' . $numero . '<br>
                        <b>Bairro: </b> ' . $bairro . '<br>    
                        <b>Estado: </b> ' . $estado . '<br>
                        <b>Cidade: </b> ' . $cidade . '<br>
                        <b>Telefone residencial: </b> ' . $residencial . '<br>
                        <b>Telefone celular: </b> ' . $celular . '<br>
                        <b>Facebook: </b> ' . $facebook . '<br>
                        <b>Sacramento: </b> ' . $sacramento . '<br>
                        <b>Estado Civil: </b> ' . $estado_civil . '<br>
                        <b>Tem filho? </b> ' . $filho . '<br>
                        <b>Quantidade de filhos: </b> ' . $qtd_filhos . '<br>
                        <b>Tempo aproximado que participa do G.O.: </b> ' . $tempo_go . '<br>
                        <b>Email: </b> ' . $email . '';
    echo "<br><b>Observações: </b>" . $obs . "<br><hr>";

    echo "<br><b>Data Nascimento: </b>" . strftime("%d/%m/%Y ", strtotime($dataFormatoMySQL)) . "<br><hr>";

    date_default_timezone_set("America/Sao_Paulo");
    $data = date("j/m/Y");
    $hora = date("H:i:s");

    echo ("Data: $data");
    echo ("<br>Hora: $hora");
}
?>
<html><head><title><?= $titulo ?></title></head>
    <body></body></html>