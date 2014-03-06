<?php

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$nome_mae = $_POST['nome_mae'];
$nome_pai = $_POST['nome_pai'];
$profissao = $_POST['profissao'];
$data_nascimento = $_POST['data_nascimento'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$residencial = $_POST['residencial'];
$celular = $_POST['celular'];
$facebook = $_POST['facebook'];


include "config.php";


$result = mysql_query("UPDATE usuario SET nome = '$nome',
                                          email = '$email',
                                          nome_mae = '$nome_mae',
                                          nome_pai = '$nome_pai',
                                          profissao = '$profissao',
                                          data_nascimento = '$data_nascimento',
                                          endereco = '$endereco',
                                          numero = '$numero',
                                          bairro = '$bairro',
                                          estado = '$estado',
                                          cidade = '$cidade',
                                          residencial = '$residencial',
                                          celular = '$celular',
                                         facebook = '$facebook' WHERE id='$id'");
mysql_close();

echo "<input type=\"button\" value=\"Voltar\" onclick=\"location.href='listar.php'\" >";
?>