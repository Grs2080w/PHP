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