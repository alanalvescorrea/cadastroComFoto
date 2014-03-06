<?php

$id = $_GET['id'];
include "config.php";

$result = mysql_query("select * from usuario where id='$id'");

echo "<form name=\"form\" action=\"update.php\" method=\"post\">";
while ($row = mysql_fetch_array($result)) {
    echo "<input type=\"text\" name\"id\" value=" . $row['id'] . "><br>";
    echo "<input type=\"text\" name\"nome\" value=" . $row['nome'] . "><br>";
    echo "<input type=\"text\" name\"email\" value=" . $row['email'] . "><br>";
    echo "<input type=\"text\" name\"nome_pai\" value=" . $row['nome_pai'] . "><br>";
    echo "<input type=\"text\" name\"profissao\" value=" . $row['profissao'] . "><br>";
    echo "<input type=\"text\" name\"data_nascimento\" value=" . $row['data_nascimento'] . "><br>";
    echo "<input type=\"text\" name\"endereco\" value=" . $row['endereco'] . "><br>";
    echo "<input type=\"text\" name\"numero\" value=" . $row['numero'] . "><br>";
    echo "<input type=\"text\" name\"bairro\" value=" . $row['bairro'] . "><br>";
    echo "<input type=\"text\" name\"estado\" value=" . $row['estado'] . "><br>";
    echo "<input type=\"text\" name\"cidade\" value=" . $row['cidade'] . "><br>";
    echo "<input type=\"text\" name\"residencial\" value=" . $row['residencial'] . "><br>";
    echo "<input type=\"text\" name\"celular\" value=" . $row['celular'] . "><br>";
    echo "<input type=\"text\" name\"facebook\" value=" . $row['facebook'] . "><br>";


    echo "<input type=\"submit\" value=\"Salvar\">";
    echo "<input type=\"button\" value=\"Voltar\" onclick=\"location.href='lista_clientes.php'\" >";
}
?>