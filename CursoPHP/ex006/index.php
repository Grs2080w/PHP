<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main id="menu" style="margin-top: 20px;">
        <form action=" <?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" required placeholder="0">

            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" required placeholder="0">

            <input id="enviar" type="submit" value="Somar">
        </form>
    </main>

    <h2 style="text-align: center;margin-top:20px;">Resultado é....</h2>
    <p style="text-align: center;margin-top:10px;background-color:pink;border-radius:5px;width:fit-content;margin:auto;padding:5px;">
        <?php 

            $v1 = $_POST['v1'] ?? 0;
            $v2 = $_POST['v2'] ?? 0;
            if ($v1 == '' && $v2 == '') {
                $v3 = 'Esperando Valor...';
            } else {
                $v3 = $v1 + $v2;
            }
            

        echo "$v1 + $v2 = " . $v3;

        ?>
    
</p>

    
</body>
</html>