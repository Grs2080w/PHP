<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Segundos</title>
    <link rel="stylesheet" href="style5.css">
    
</head>
<body>
    <main id="menu">
        <form action=" <?php $_SERVER['PHP_SELF'] ?>" method="post">
            <label style="margin-left: calc(50% - 95px);" for="segun">Qual o total de segundos?</label><br>
            <input style="margin-left: calc(50% - 100px);" type="text" name="segun" id="segun"><br>
            
            <input id="enviar" type="submit" value="Calcular">
        </form>
        
    </main>

    <main id="menu" style="width: 80vw;max-width: 700px;height: fit-content;color:black;">
        <h4>Totalizando Tudo</h2>

        <br>

        <?php 

        $segun = $_POST['segun'] ?? 1;
        $segun = (int) $segun;
        $semanas = intdiv($segun, 604800);
        $segun = $segun % 604800;
        $dias = intdiv($segun, 86400);
        $segun = $segun % 86400;
        $horas = intdiv($segun, 3600);
        $segun = $segun % 3600;
        $min = intdiv($segun, 60);
        $segun = $segun % 60;
        $seg = $segun;

        echo "Analisando o valor que você digitou, $segun segundos equivalem a um total de:";
        echo "<br><br>";
        echo "<li>$semanas semanas.</li>";
        echo "<li>$dias dias.</li>";
        echo "<li>$horas horas.</li>";
        echo "<li>$min minutos.</li>";
        echo "<li>$seg segundos.</li>";
        

        ?>

        
    </main>
</body>
</html>