<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média Aritmética</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <main id="menu">
        <form action=" <?php $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="valor1">1º valor</label><br>
            <input style="margin-left: calc(50% - 100px);" type="text" name="valor1" id=""><br>

            <label for="peso1">1º peso</label><br>
            <input style="margin-left: calc(50% - 100px);" type="text" name="peso1" id=""><br>

            <label for="valor2">2º valor</label><br>
            <input style="margin-left: calc(50% - 100px);" type="text" name="valor2" id=""><br>

            <label for="peso2">2º peso</label><br>
            <input style="margin-left: calc(50% - 100px);" type="text" name="peso2" id=""><br>

            <input id="enviar" type="submit" value="Calcular Médias">
        </form>

    </main>

    <main id="menu" style="width:350px;height: fit-content;color:black;">
        <h4>Cálculo das Médias</h2>

        <br>

        <?php 
        
        $v1 = $_POST['valor1'] ?? 1;
        $p1 = $_POST['peso1'] ?? 1;
        $v2 = $_POST['valor2'] ?? 1;
        $p2 = $_POST['peso2'] ?? 1;

        $mediaAri = ($v1 + $v2) / 2;
        $mediaPonde = (($v1*$p1)+($v2*$p2)) / ($p1+$p2);
        $mediaPonde = number_format($mediaPonde, 2, '.', ',');

        echo "Analizando os valores $v1 e $v2:";

        echo "<li>A média Aritmética Simples entre os valores é igual a $mediaAri.</li>";
        echo "<li>A média Aritmética Ponderada com pesos $p1 e $p2 é igual a $mediaPonde.</li>";

        
        ?>

        
    </main>
</body>
</html>