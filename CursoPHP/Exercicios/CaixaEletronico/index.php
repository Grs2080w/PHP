<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="style5.css">
    
</head>
<body>
    <main id="menu">
        <form action=" <?php $_SERVER['PHP_SELF'] ?>" method="post">
            <label style="margin-left: calc(50% -  115px);" for="valor">Qual será o valor a sacar? (R$)</label><br>
            <input style="margin-left: calc(50% - 100px);" type="number" name="valor" id="" required step="5"><br><br><br><br>

           <p style="color:black;">*Notas disponíveis: R$100, R$50, R$10 e R$5.</p> <br>
            <input id="enviar" type="submit" value="Sacar">
        </form>
        
    </main>

    <main id="menu" style="width: 80vw;max-width: 700px;height: 380px;color:black;">

        <?php 
        
        $saque = $_POST['valor'] ?? 0;
        $saque = (int) $saque;
        $saque2 = number_format($saque, 2, ',','.');

        echo "<h2>$ Saque de R$ $saque2 realizado $</h2>";

        $valor = $_POST['valor'] ?? 1;

        $n100 = intdiv($saque, 100);
        $saque = $saque % 100;
        $n50 = intdiv($saque, 50);
        $saque = $saque % 50;
        $n10 = intdiv($saque, 10);
        $saque = $saque % 10;
        $n5 = intdiv($saque, 5);

        echo<<<RES
        
        <br><br>

        <li><img src="img/100.jpg" alt="100"> x$n100<br> </li>
        <li><img src="img/50.jpg" alt="100"> x$n50<br></li>
        <li><img src="img/10.jpg" alt="100"> x$n10<br></li>
        <li><img src="img/5.jpg" alt="100"> x$n5</li>
           
        RES
         
        ?>

    </main>
</body>
</html>