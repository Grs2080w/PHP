<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>
    <main id="menu">
        <form action=" <?php $_SERVER['PHP_SELF'] ?>" method="post">
            <label style="margin-left: calc(50% - 100px);" for="ano">Em que ano você nasceu?:</label><br>
            <input style="margin-left: calc(50% - 100px);" type="text" name="ano" id="ano"><br><br>

            <?php 
            
            $ano = date('Y');

            echo "<label for='ano'>Quer saber sua idade em que ano? (atualmente estamos em $ano):</label><br>"
            
            ?>
            <input style="margin-left: calc(50% - 100px);" type="text" name="ano2" id="ano"><br>
            <input id="enviar" type="submit" value="Qual será minha idade?">
        </form>

    </main>

    <main id="menu" style="width:300px;height: fit-content;color:black;">
        <h4>Resultado</h2>

        <br>

        <?php 

        // salario fixo de r$1380,00
        
        $anoNas = $_POST['ano'] ?? 1; 
        $anoPergunta = $_POST['ano2'] ?? 1; 
        $idade = $anoPergunta - $anoNas;

        echo "Quem nasceu em $anoNas vai ter <strong>$idade anos</strong> em $anoPergunta!"
       

        
        ?>

        
    </main>
</body>
</html>