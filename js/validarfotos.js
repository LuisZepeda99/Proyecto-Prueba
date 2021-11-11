var contador = 1
var foto_uno = document.getElementById('foto_principal')
var foto_dos = document.getElementById('foto_dos')
var foto_tres = document.getElementById('foto_tres')
var foto_cuatro = document.getElementById('foto_cuatro')
var foto_cinco = document.getElementById('foto_cinco')
var foto_seis = document.getElementById('foto_seis')
var foto_siete = document.getElementById('foto_siete')
var foto_ocho = document.getElementById('foto_ocho')
var foto_nueve = document.getElementById('foto_nueve')
var foto_diez = document.getElementById('foto_diez')
var agregar = document.getElementById('agregar')
var quitar = document.getElementById('quitar')

function agregarCampoFoto() {
    contador++
    if (contador === 2) {
        foto_dos.hidden = false
        quitar.disabled = false
    } else if (contador === 3) {
        foto_tres.hidden = false
    } else if (contador === 4) {
        foto_cuatro.hidden = false
    } else if (contador === 5) {
        foto_cinco.hidden = false
    } else if (contador === 6) {
        foto_seis.hidden = false
    } else if (contador === 7) {
        foto_siete.hidden = false
    } else if (contador === 8) {
        foto_ocho.hidden = false
    } else if (contador === 9) {
        foto_nueve.hidden = false
    } else if (contador === 10) {
        foto_diez.hidden = false
        agregar.disabled = true
    }
}

function quitarCampoFoto() {
    contador--
    if (contador === 1) {
        foto_dos.hidden = true
        quitar.disabled = true
    } else if (contador === 2) {
        foto_tres.hidden = true
    } else if (contador === 3) {
        foto_cuatro.hidden = true
    } else if (contador === 4) {
        foto_cinco.hidden = true
    } else if (contador === 5) {
        foto_seis.hidden = true
    } else if (contador === 6) {
        foto_siete.hidden = true
    } else if (contador === 7) {
        foto_ocho.hidden = true
    } else if (contador === 8) {
        foto_nueve.hidden = true
    } else if (contador === 9) {
        foto_diez.hidden = true
        agregar.disabled = false
    }
}