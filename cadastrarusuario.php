<?php
//realizar a conexao
include_once "conexao.php";

//receber os dados do formulario
$nome = $_POST["txtnome"];
$endereco = $_POST["txtendereco"];
$cep = $_POST["txtcep"];
$tel = $_POST["telefone"];
$email = $_POST["txtemail"];
$senha = $_POST["txtsenha"];

//enviar os dados
$sqlquery = "INSERT INTO cliente (nome, endereco, cep, telefone, email, senha) 
VALUES ('$nome', '$endereco', '$cep','$tel','$email','$senha');";

mysqli_query($conexao, $sqlquery);

echo "Usuário cadastrado com sucesso";
echo "<br><a href='cadastro.php'>Voltar</a>";
?>