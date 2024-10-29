<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas v2.0</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v2.0</h1><br>

        <?php 

        $inicio = date('m-d-Y', strtotime('-7 days'));
        $fim = date('m-d-Y');

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio. '\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);
        //var_dump(($dados));

        $cotação = $dados['value'][0]['cotacaoCompra'];

        $num = $_GET['numero'];
        $do = $num / $cotação;
        $num = number_format($num,2,",",".");
        $cotação = number_format($cotação,2,".",",");


        echo "Seus R$ $num equivalem a US$ ".number_format($do,2,".",",");

        echo "<br><br><br>";

        echo "<p style='font-size:10px;' id='pa'><strong>*Cotação do dia de R$$cotação.</strong> informada diretamente no Banco Central.</p>
"
        ?>


        <a id="voltar" href="index.html">Voltar</a>
    </main>
</body>
</html>