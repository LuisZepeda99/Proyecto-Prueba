console.log('carga?');

function validarGestor() {
    if (document.form1.rut.value == "") {
        alert("Debe Ingresar el Rut");
        document.form1.rut.focus();
        return false;
    }

    document.form1.submit();
}


document.querySelector('#btn-gestor').addEventListener('submit', (e) => {
    e.preventDefault();
    const rut = document.querySelector('#rut').value;
    if (rut == "") {
        alert("Debe Ingresar el Rut");
    }
})

