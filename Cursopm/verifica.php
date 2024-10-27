<?php 
$servidor = '127.0.0.1'; // servidor web localhost
$usuario = 'root'; // usuario do mysql
$senha = ''; // senha
$bancoDados = 'curso_php'; // nome do banco de dados

$conexao = mysqli_connect($servidor,  $usuario, $senha, $bancoDados);


mysqli_select_db($conexao, "curso_php");

$login = $_POST['login'];
$senha = $_POST['senha'];

$seleção = mysqli_query($conexao, "SELECT * from cadastro WHERE login = '$login' AND senha = '$senha'");

$row = mysqli_fetch_array($seleção);

if ($row == "") {
    echo "<h5>login e/ou senha inválidos :(   Volte e tente novamente.<h3>";

    exit;
} else {
    echo "<h5>Bem vindo $login <h3> ";
}


?>