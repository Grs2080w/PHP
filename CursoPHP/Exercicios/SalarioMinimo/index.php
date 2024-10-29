<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário Mínimo</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <main id="menu">
        <form action=" <?php $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="sala">Salário</label>
            <input type="text" name="sala" id="">
            <input id="enviar" type="submit" value="Calcular">
        </form>
        <br><br>
        <p style="color: black; text-align:center;">Considerando o salário mínimo de R$1.380,00</p>
    </main>

    <main id="menu" style="width:300px;height: fit-content;color:black;">
        <h4>Resultado final</h2>

        <br>

        <?php 

        // salario fixo de r$1380,00
        
        $salario = $_POST['sala'] ?? 1; 
        $salario = (float) $salario;
        $resto = number_format(($salario % 1380), 2, ',', '.');
        $inteira = intdiv($salario, 1380);

        echo "<p>Quem recebe um salário de R$ $salario ganha $inteira salários mínimos + R$ $resto.</p>"

        
        ?>

        
    </main>
</body>
</html>