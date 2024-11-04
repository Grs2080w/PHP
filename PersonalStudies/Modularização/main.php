<?php 
require_once 'math/operação.php'; use Math\Operação;
 // Utilizando as funções dos módulos 

$resultAdd = Operação::add(5, 3); 
$resultSubtract = Operação::subtract(8, 2); 
$multi = Operação::mult(5, 2);
$oi = Operação::oi();

// Exibindo resultados 
echo "Adição: " . $resultAdd . "\n"; 
echo "Subtração: " . $resultSubtract . "\n"; 
echo "Multiplicação: " . $multi . "\n";
echo $oi;

?>