<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de Preço</title>
    <link rel="stylesheet" href="style5.css">
    
</head>
<body>
    <main id="menu">
        <form action=" <?php $_SERVER['PHP_SELF'] ?>" method="post">
            <label style="margin-left: calc(50% - 65px);" for="sala">Preço do Produto</label><br>
            <input style="margin-left: calc(50% - 100px);" type="text" name="preco" id=""><br>

           <label style="margin-left: calc(50% - 150px);" for="resjuste">Qual será o percentual de reajuste ?  (  <span id="resRe">5</span>%  )</label><br>
            <input style="margin-left: calc(50% - 100px);color: palevioletred;" type="range" name="reajuste" id="reajuste" value="5" min="0" max="100">
            <input id="enviar" type="submit" value="Reajustar">
        </form>
        
    </main>

    <script>
        var resRe = document.getElementById("resRe");
        var reajus = document.getElementById('reajuste');

        reajus.addEventListener('input', function() {
            resRe.textContent = this.value;
        });

    </script>

    <main id="menu" style="width: 80vw;max-width: 700px;height: fit-content;color:black;">
        <h4>Resultado do Reajuste</h2>

        <br>

        <?php 

        $preço = $_POST['preco'] ?? 1;
        $preço = (float)$preço;
        $rejus = $_POST['reajuste'] ?? 1;
        $preçoFinal = $preço + ($preço * ($rejus / 100));
        $preçoFinal = number_format((float)$preçoFinal, 2, ',', '.');
        $preço = number_format($preço, 2, ',', '.');

        echo "O  produto que custava <strong>R$$preço</strong>, com $rejus% de aumento vai passar a custar <strong>R$$preçoFinal</strong> a partir de agora."
        
        ?>

        
    </main>
</body>
</html>