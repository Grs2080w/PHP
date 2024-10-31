<?php 
//echo "<h1></h1>"
echo "<h1>Exemplo de array sem chaves de valor:</h1>";

$cores = ['Azul', 'Amarelo', 'Vermelho', 'Marrom', 'Preto'];

$alea = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,)

?>

<pre>
    <?php var_dump($cores);?>
</pre>

<h1>Exemplo de array com chaves de valor:</h1>
<pre>
    <?php var_dump($alea) ?>
</pre>

<h1>Criando / Modificando valores</h1>

<p>
<pre>

$arr['chave'] = 1;
$arr[] = 2; 

<?php 
$arr['chave'] = 1;
$arr[] = 2; 
?>

</pre>

Preview:
<pre>
    <?php var_dump($arr)?>
</pre>

</p>

<h1>Removendo Elementos / Apagando arrays</h1>
<?php 
$arr = array(5 => 1, 12 => 2);
?>
<pre>
$arr = array(5 => 1, 12 => 2);

unset($arr[5]);
unset($arr); 

</pre>







