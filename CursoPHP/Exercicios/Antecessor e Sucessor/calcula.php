

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1><br>

        <?php 
        $num = $_GET['numero'];

        echo "O número escolhido foi $num. <br>";
        echo "O seu antecessor é ".$num-1 . '.';
        echo " <br>";
        echo "O seu Sucessor é ".$num+1 . '.';
        echo " <br>";
        ?>
        <br>
        <a id="voltar" href="index.html">Voltar</a>
    </main>
</body>
</html>