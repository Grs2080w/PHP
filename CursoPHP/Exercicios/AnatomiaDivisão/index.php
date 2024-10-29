<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de Uma Divisão</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <h1>Anatomia de uma Divisão</h1>
    <main id="menu">
        <form action=" <?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="divid">Dividendo</label>
            <input type="number" name="dividendo" id="divid" placeholder="0">

            <label for="divis">Divisor</label>
            <input type="number" name="divisor" id="divis" placeholder="0">

            <input id="enviar" type="submit" value="Analisar">
        </form>
    </main>

    <main id="menu" style="display: flex; width: 200px;flex-flow: row wrap;">
        <h3 style="margin-bottom:20px;">Estrutura da Divisão</h1>
        <?php 

        $dividendo = $_POST['dividendo'] ?? 1;
        $divisor = $_POST['divisor'] ?? 1;
        $dividendo = (int) $dividendo;
        $divisor = (int) $divisor;
        $resto = $dividendo % $divisor;
        $inteira = intdiv($dividendo, $divisor);

        echo<<<FREE
        <div style='width: 99px; height:60px; text-align:center;color:black;align-content: center;;font-family: Arial, Helvetica, sans-serif;font-size: 25px;'>$dividendo</div>
        <div style='width: 99px; height:60px; text-align:center;color:black;    border-left: 2px solid black;align-content: center;border-bottom: 2px solid     black;;font-family: Arial, Helvetica, sans-serif;font-size: 25px;'>$divisor</div>
        <div style='width: 99px; height:55px;align-content: center;     text-align:center;color:black;font-family: Arial, Helvetica, sans-serif;    font-size: 25px;'>$resto</div>
        <div style='width: 99px; height:55px; text-align:center;color:black;    border-left: 2px solid black;align-content: center;;font-family: Arial,     Helvetica, sans-serif;font-size: 25px;'>$inteira</div>

        FREE;
        
        ?>

<div style="width: 99px; height:94px; text-align:center;"></div>
    </main>
</body>
</html>