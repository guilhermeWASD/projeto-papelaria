<?php 
$conexao = mysqli_connect("localhost", "root", "mansql2", "papelaria");
mysqli_set_charset($conexao, "utf8");
$sqlquery = "SELECT * FROM cliente";
$sqlresposta = mysqli_query($conexao, $sqlquery);
$dados = mysqli_fetch_assoc($sqlresposta);
var_dump($dados);
?>