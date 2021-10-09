
document.querySelector('#btn-gestor').addEventListener('submit', (e) => {
    e.preventDefault();
    const rut = document.querySelector('#rut').value;
    if (rut === '') {
        alert("Debe Ingresar el Rut");
    }
})