
function validarPropiedad() {

    if (document.formprop.tipo.value == "0") {
        alert("Debe Ingresar el Tipo de Propiedad");
        document.formprop.tipo.focus();
        return false;
    }

    if (document.formprop.foto_principal.value == "") {
        alert("Debe Ingresar los Archivos");
        document.formprop.foto_principal.focus();
        return false;
    }

    if (document.formprop.descripcion.value == "") {
        alert("Debe Ingresar la Descripción");
        document.formprop.descripcion.focus();
        return false;
    }

    if (document.formprop.banos.value == "") {
        alert("Debe Ingresar la Cantidad de Baños");
        document.formprop.banos.focus();
        return false;
    }

    if (document.formprop.dormitorios.value == "") {
        alert("Debe Ingresar la Cantidad de Dormitorios");
        document.formprop.dormitorios.focus();
        return false;
    }

    if (document.formprop.areatotal.value == "") {
        alert("Debe Ingresar el Área Total");
        document.formprop.areatotal.focus();
        return false;
    }

    if (document.formprop.areaconst.value == "") {
        alert("Debe Ingresar el Área Construida");
        document.formprop.areaconst.focus();
        return false;
    }

    if (document.formprop.preciopesos.value == "") {
        alert("Debe Ingresar el Precio");
        document.formprop.preciopesos.focus();
        return false;
    }

    if (document.formprop.preciouf.value == "") {
        alert("Debe Ingresar el Precio en UF");
        document.formprop.preciouf.focus();
        return false;
    }

    if (document.formprop.fechapub.value == "") {
        alert("Debe Ingresar la Fecha de Publicación");
        document.formprop.fechapub.focus();
        return false;
    }

    if (document.formprop.comu.value == "0") {
        alert("Debe Ingresar la Comuna");
        document.formprop.comu.focus();
        return false;
    }

    if (document.formprop.provi.value == "0") {
        alert("Debe Ingresar la Provincia");
        document.formprop.provi.focus();
        return false;
    }

    if (document.formprop.sector.value == "0") {
        alert("Debe Ingresar el Sector");
        document.formprop.sector.focus();
        return false;
    }

    if (document.formprop.estado.value == "2") {
        alert("Debe Ingresar el Estado");
        document.formprop.estado.focus();
        return false;
    }

    document.formprop.submit();
}