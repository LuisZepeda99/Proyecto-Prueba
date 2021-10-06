
function validar_gestor() {

    if (document.form-gestor.rut.value == "") {
        alert("Debe Ingresar su Rut");
        document.form-gestor.rut.focus();
        return false;
    }

    if (document.form-gestor.nombre.value == "") {
        alert("Debe Ingresar el Nombre Completo");
        document.form-gestor.nombre.focus();
        return false;
    }

    if (document.form-gestor.fecha_nacimiento.value == "") {
        alert("Debe Ingresar la Fecha de Nacimiento");
        document.form-gestor.fecha_nacimiento.focus();
        return false;
    }

    if (document.form-gestor.correo.value == "") {
        alert("Debe Ingresar el Correo");
        document.form-gestor.correo.focus();
        return false;
    }

    if (document.form-gestor.clave.value == "") {
        alert("Debe Ingresar la Clave");
        document.form-gestor.clave.focus();
        return false;
    }

    if (document.form-gestor.sexo.value == "") {
        alert("Debe Ingresar el Sexo");
        document.form-gestor.sexo.focus();
        return false;
    }

    if (document.form-gestor.telefono.value == "") {
        alert("Debe Ingresar el Teléfono");
        document.form-gestor.telefono.focus();
        return false;
    }

    if (document.form-gestor.certificado.value == "") {
        alert("Debe Ingresar el Certificado");
        document.form-gestor.certificado.focus();
        return false;
    }

    document.form-gestor.submit();
}