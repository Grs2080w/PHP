<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário Mínimo</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <main id="menu" style="text-align: center;">
        <form action=" <?php $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="sala">Número</label> <br>
            <input type="text" name="sala" id="">
            <input id="enviar" type="submit" value="Calcular Raizes">
        </form>
    </main>

    <main id="menu" style="height: fit-content;color:black;">
        <h4>Resultado final</h2>

        <br>


        <?php 

        
        $num = $_POST['sala'] ?? 1; 

        echo "Analizando o número $num, temos:";

        echo "<br><br>";
    

        if ($num < 0) {
            echo "Este número não possui raiz por ser negativo";
        } else {
            $raiz_cub = $num ** (1/3);
            $raiz_quad = $num ** (1/2);

            echo "<li>A sua raiz cúbica é $raiz_cub<?li>";
            echo "<li>A sua raiz quadrada é $raiz_quad<?li>";

        }
        ?>

        
    </main>
</body>
</html>