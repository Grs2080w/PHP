<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste php html</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>

    <?php
        $data = 27;

        date_default_timezone_set("America/Belem");
        echo "Hoje é dia " . date("d/m/y");
        echo " E a hora atual é " . date("G:i:s");

        echo "<br>"; echo "<br>";

        if (date('D') == 'Sat') {
            echo "Hj é Sábado";
        } else if (date('D') == 'Sun') {
            echo "Faltam 6 dias para o Sábado";
        } else if (date('D') == 'Mon') {
            echo "Faltam 5 dias para o Sábado";
        } else if (date('D') == 'Tue') {
            echo "Faltam 4 dias para o Sábado"; 
        } else if (date('D') == 'Wed') {
            echo "Faltam 3 dias para o Sábado";
        } else if (date('D') == 'Thu') {
            echo "Faltam 2 dias para o Sábado";
        } else if (date('D') == 'Fri') {
            echo "Falta 1 dias para o Sábado";
        }
    ?>
</body>
</html>
