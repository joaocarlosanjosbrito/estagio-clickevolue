<?php 
$host = "localhost";
$usuario = "id19411740_clickevolue";
$senha = "Sgykjbbq157.";
$banco = "id19411740_crudclickevolue";

$conexao = new MySQLi("$host", "$usuario", "senha", "$banco");

$conexao->set_charset("utf8");

if ($conexao -> connect error) (
   echo "ERRO DE CONEXÃO";
   ) /* else (

       echo "CONEXÃO BBEM SUCEDIDA!";
   ) */


?>