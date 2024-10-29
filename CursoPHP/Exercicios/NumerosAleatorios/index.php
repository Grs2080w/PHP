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
        <h1>Trabalhando com Números Aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>

        <?php

        $num = random_int(0, 100);
        echo "O valor gerado foi $num";


        ?>

        <br>

        <form action="index.php" method="get">

            <input id="envi" type="submit" value="Gerar Outro">
        </form>
    </main>
</body>
</html>