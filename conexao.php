<?php

try {
$usuario = 'root';
$senha = '';
$database = 'papelaria';
$host = 'localhost';
$port = '3306';

$conexao = mysqli_connect($host,$usuario,$senha,$database, $port);
mysqli_set_charset($conexao,"utf8");
}
catch(Exception $e){
    echo $e->getMessage();
}
finally{
    //mysqli_close($conexao);
}
?>