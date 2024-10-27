<?php 

$nome = $_POST['nome'] ?? 'Fulano';
$sobrenome = $_POST['sobrenome'] ?? 'Desconhecido';

if ($nome == 'Fulano' && $sobrenome == 'Desconhecido') {
    echo "<h1>Volte e preencha seu Nome e Sobrenome.</h1>";
} else {
   if ($nome == 'Gabriel' && $sobrenome == 'Santos') {
    header('location:pag2.html');
} else {
    echo "<h1>Erro! $nome" . " $sobrenome não tem acesso. Tente Novamente :(</h1>";
} 
}


?>

<!-- header('location:pag2.html'); // Envia para outro arquivo da pasta, links externos não. 