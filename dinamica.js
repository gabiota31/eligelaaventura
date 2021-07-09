var pag1 = document.getElementById('pagina1')
var pag2 = document.getElementById('pagina2')

var bAdelante = document.getElementById('b-adelante')
var bAtras = document.getElementById('b-atras')

function alerta(){
    alert('buenas')
}

function cambiaAdelante(){
    pag1.style.display = 'none'
    pag2.style.display = 'block'
    
}

function cambiaAtras(){
    pag2.style.display = 'none'
    pag1.style.display = 'block'
}


bAdelante.addEventListener('click',cambiaAdelante)
bAtras.addEventListener('click',cambiaAtras)


