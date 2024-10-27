

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
        <h1>Conversor de Moedas v1.0</h1><br>

        <?php 
        $num = $_GET['numero'];
        $do = $num / 5.71;
        $num = number_format($num,2,".",",");

        echo "Seus R$ $num equivalem a US$ ".number_format($do,2,".",",");
        ?><br><br><br>

        <p style="font-size:10px;" id="pa"><strong>*Cotação Fixa de R$5,71</strong> informada diretamente no codigo</p>

        <a id="voltar" href="index.html">Voltar</a>
    </main>
</body>
</html>