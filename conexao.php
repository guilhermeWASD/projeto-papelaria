<?php

try{
$usuario = 'root';
$senha = 'mansql2';
$database = 'papelaria';
$host = 'localhost';


$conexao = mysqli_connect($host,$usuario,$senha,$database);
mysqli_set_charset($conexao,"utf8");
}
catch(Exception $e){
    echo $e->getMessage();
}
finally{
    //mysqli_close($conexao);
}
?>