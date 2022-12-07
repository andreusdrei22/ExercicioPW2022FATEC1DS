
const cel = document.getElementById('celular')

cel.addEventListener('keypress', () => {
    let celLength = cel.value.length
   
    // MAX LENGHT 14  CPF
    if (celLength < 1) {
        cel.value += '('
    }else if (celLength == 3) {
        cel.value += ')'
    }else if (celLength == 9) {
        cel.value += '-'
    }

})