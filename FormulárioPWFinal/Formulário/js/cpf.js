const cpf = document.getElementById('cpf')

cpf.addEventListener('keypress', () => {
    let cpfLength = cpf.value.length

    // MAX LENGHT 14  CPF
    if (cpfLength == 3 || cpfLength == 7) {
        cpf.value += '.'
    }else if (cpfLength == 11) {
        cpf.value += '-'
    }

})
