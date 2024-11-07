<!--Funcionou -->

<?php
$num = 5;
echo <<< FRASE

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="pai"></div>
    <script>
        var pai = document.querySelector('#pai')
        for (var c=0; c<15 ; c++) {
            var p = document.createElement('p')
            p.innerText = $num
            pai.appendChild(p)
        }
    </script>
</body>
</html>

FRASE
?>

<!-- A intenção era saber se era possivel executar javascript dentro do php, para poder integrar os dois.