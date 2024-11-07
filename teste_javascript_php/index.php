<?php 

$ids = 10;

echo <<< FRASE

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        button {
            padding: 20px;
            border-radius: 30px;
            font-size: 20px;
            margin:10px;
            
        }

        input {
            display: none;
        }

        form {
            width: fit-content;
        }

        main {
            display:flex;
            flex-flow: row wrap;
            justify-content: center;
        }
    </style>
</head>
<body>
    <main id="pai"></main>
    <script>
        for (var c=1; c <= $ids ; c++) {
            var form = document.createElement('form')
            form.action = 'verifica.php'
            form.method = 'post'

            var input = document.createElement('input')
            input.type = ''
            input.value = c + 'oi'
            input.name = 'num'
            form.appendChild(input)

            var btn = document.createElement('button')
            btn.type = 'submit'
            btn.innerText = 'Contato' + c
            form.appendChild(btn)

            var pai = document.querySelector("#pai")
            pai.appendChild(form)
        }
    </script>
    
    <!--<form action="verifica.php" method="post">
        <input style="display: none;" type="" value="45" name="num">
        <button type="submit">Contato 1</button>
    </form> -->
    
</body>
</html>


FRASE 

?>