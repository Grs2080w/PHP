<?php 
$servidor = '127.0.0.1'; // servidor web localhost
$usuario = 'root'; // usuario do mysql
$senha = ''; // senha
$bancoDados = 'curso_php'; // nome do banco de dados

$conexao = mysqli_connect($servidor,  $usuario, $senha, $bancoDados);

echo "Conectado"


?>