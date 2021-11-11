
function validarGestor() {
    if (document.form1.rut.value == "") {
        alert("Debe Ingresar el Rut");
        document.form1.rut.focus();
        return false;
    }

    if (document.form1.nombre.value == "") {
        alert("Debe Ingresar el Nombre");
        document.form1.nombre.focus();
        return false;
    }

    if (document.form1.fecha_nacimiento.value == "") {
        alert("Debe Ingresar la Fecha de Nacimiento");
        document.form1.fecha_nacimiento.focus();
        return false;
    }

    if (document.form1.correo.value == "") {
        alert("Debe Ingresar el Correo");
        document.form1.correo.focus();
        return false;
    }

    if (document.form1.clave.value == "") {
        alert("Debe Ingresar la Contraseña");
        document.form1.clave.focus();
        return false;
    }

    if (document.form1.sexo.value == "") {
        alert("Debe Ingresar el Sexo");
        document.form1.sexo.focus();
        return false;
    }

    if (document.form1.telefono.value == "") {
        alert("Debe Ingresar el Teléfono");
        document.form1.telefono.focus();
        return false;
    }

    if (document.form1.usuario.value == "") {
        alert("Debe Ingresar el Usuario");
        document.form1.usuario.focus();
        return false;
    }

    document.form1.submit();
}

function validarPropietario() {
    if (document.form2.rut.value == "") {
        alert("Debe Ingresar el Rut");
        document.form2.rut.focus();
        return false;
    }

    if (document.form2.nombre.value == "") {
        alert("Debe Ingresar el Nombre");
        document.form2.nombre.focus();
        return false;
    }

    if (document.form2.fecha_nacimiento.value == "") {
        alert("Debe Ingresar la Fecha de Nacimiento");
        document.form2.fecha_nacimiento.focus();
        return false;
    }

    if (document.form2.correo.value == "") {
        alert("Debe Ingresar el Correo");
        document.form2.correo.focus();
        return false;
    }

    if (document.form2.clave.value == "") {
        alert("Debe Ingresar la Contraseña");
        document.form2.clave.focus();
        return false;
    }

    if (document.form2.sexo.value == "") {
        alert("Debe Ingresar el Sexo");
        document.form2.sexo.focus();
        return false;
    }

    if (document.form2.telefono.value == "") {
        alert("Debe Ingresar el Teléfono");
        document.form2.telefono.focus();
        return false;
    }

    if (document.form2.n_propiedad.value == "") {
        alert("Debe Ingresar el N° de Propiedad");
        document.form2.n_propiedad.focus();
        return false;
    }

    if (document.form2.usuario.value == "") {
        alert("Debe Ingresar el Usuario");
        document.form2.usuario.focus();
        return false;
    }

    document.form2.submit();
}