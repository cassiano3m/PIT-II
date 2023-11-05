<?php
$dbHost = 'Localhost';
$dbUsername = 'root';
$dbsenha = '';
$dbName = 'cadastro_cliente';

$conexao = new mysqli($dbHost, $dbUsername, $dbsenha, $dbName);

if($conexao->connect_errno){
    echo "Erro na conexão com o banco de dados.";
}
else{
    echo " Conexão realizada com sucesso.";
}
?>