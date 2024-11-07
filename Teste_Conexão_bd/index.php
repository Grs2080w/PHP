
<!-- Sucesso -->

<?php 

$servidor = '127.0.0.1'; // servidor web localhost
$usuario = 'root'; // usuario do mysql
$senha = ''; // senha
$bancoDados = 'cadastro'; // nome do banco de dados

$conexao = mysqli_connect($servidor,  $usuario, $senha, $bancoDados);

$count = (int) mysqli_fetch_array(mysqli_query($conexao, "SELECT COUNT(*) FROM gafanhotos"))[0]; // Numero de dados na tabela

$selecao = mysqli_query($conexao, "SELECT COUNT(*) FROM gafanhotos");


for ($c=1 ; $c <= $count ; $c++) {
    $selecao = mysqli_query($conexao, "SELECT * FROM gafanhotos WHERE id = $c"); // Busca

    $row = mysqli_fetch_array($selecao); // Array

    $id = $row['id'];
    $nome = $row['nome'];
    $profissao = $row['profissao'];
    $nascimento = $row['nascimento'];
    $sexo = $row['sexo'];
    $peso = $row['peso'];
    $altura = $row['altura'];
    $nacionalidade = $row['nacionalidade'];

    echo "<p>id: $id  nome: $nome  Profissão: $profissao  Nascimento: $nascimento  Sexo: $sexo  Peso: $peso  Altura: $altura  Nacionalidade: $nacionalidade</p>";
    
}

// Um loop que mostra todos os dados do BD gafanhotos.
?>
