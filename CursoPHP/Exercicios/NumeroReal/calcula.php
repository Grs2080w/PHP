

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analizador de Número Real</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analizador de Número Real</h1><br>

        <?php 
        $num = $_GET['numero'];
        $num = (float) $num;

        $num2 = intval($num);
        $numalgapon= strlen($num) - strlen($num2) - 1;
        $num3 = number_format($num - $num2, $numalgapon,'.',',');

        echo "Analizando o número $num informado pelo usuário:";
        echo "<br><br>";
        echo "<li>A parte inteira do número é $num2</li>";
        echo "<li>A parte fracionária do número é $num3</li>";
        ?><br>

        <a id="voltar" href="index.html">Voltar</a>
    </main>
</body>
</html>