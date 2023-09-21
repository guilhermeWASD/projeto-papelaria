<?php
//realizar a conexao
$include_once("conexao.php");

//receber os dados do formulario
$nome = $_POST["txtnome"];

//enviar os dados
$sqlquery = "INSERT INTO cliente(nome, endereco, cep, telefone, email, senha) 
VALUES ('$nome', '$endereco', '$cep','$tel','$email','$senha',);"
mysqli_query($conexao, $sqlquery)

//fechar conexao
mysqli_close($conexao)
?>