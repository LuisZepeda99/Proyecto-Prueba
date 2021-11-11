<?php

include("functions/setup.php");

if (!empty($_POST['bodega'])) {
    $_POST['bodega'] = 1;
} else {
    $_POST['bodega'] = 0;
}

if (!empty($_POST['estacionamiento'])) {
    $_POST['estacionamiento'] = 1;
} else {
    $_POST['estacionamiento'] = 0;
}

if (!empty($_POST['logia'])) {
    $_POST['logia'] = 1;
} else {
    $_POST['logia'] = 0;
}

if (!empty($_POST['cocina'])) {
    $_POST['cocina'] = 1;
} else {
    $_POST['cocina'] = 0;
}

if (!empty($_POST['antejardin'])) {
    $_POST['antejardin'] = 1;
} else {
    $_POST['antejardin'] = 0;
}

if (!empty($_POST['patio'])) {
    $_POST['patio'] = 1;
} else {
    $_POST['patio'] = 0;
}

if (!empty($_POST['piscina'])) {
    $_POST['piscina'] = 1;
} else {
    $_POST['piscina'] = 0;
}

$con = mysqli_connect("localhost", "root", "12345678", "pruebas");

$sqlp = "INSERT INTO propiedades SET descripcion='" . $_POST['descripcion'] . "', banos='" . $_POST['banos'] . "', dormitorio='" . $_POST['dormitorios'] . "', area_terreno='" . $_POST['areatotal'] . "', area_construida='" . $_POST['areaconst'] . "', precio='" . $_POST['preciopesos'] . "', precio_uf='" . $_POST['preciouf'] . "'
    , fecha_publicacion='" . $_POST['fechapub'] . "', solicitar_visita='" . $_POST['visita'] . "', estado='" . $_POST['estado'] . "', tipo_propiedad='" . $_POST['tipo'] . "', comunas='" . $_POST['comu'] . "'
    , bodega='" . $_POST['bodega'] . "', estacionamiento='" . $_POST['estacionamiento'] . "', logia='" . $_POST['logia'] . "'
    , cocina='" . $_POST['cocina'] . "', antejardin='" . $_POST['antejardin'] . "', patio_trasero='" . $_POST['patio'] . "', piscina='" . $_POST['piscina'] . "', provincia='" . $_POST['provi'] . "', sector='" . $_POST['sector'] . "'";
$result = mysqli_query($con, $sqlp);

//obtener ultimo id
$ultimoid = mysqli_insert_id($con);

$foto_principal = $_FILES['foto_principal'];
$segunda_foto = $_FILES['segunda_foto'];
$tercera_foto = $_FILES['tercera_foto'];
$cuarta_foto = $_FILES['cuarta_foto'];
$quinta_foto = $_FILES['quinta_foto'];
$sexta_foto = $_FILES['sexta_foto'];
$septima_foto = $_FILES['septima_foto'];
$octava_foto = $_FILES['octava_foto'];
$novena_foto = $_FILES['novena_foto'];
$decima_foto = $_FILES['decima_foto'];

if ($foto_principal['name'] != "") {
    guardarFoto($foto_principal['tmp_name'], $foto_principal['name'], $ultimoid, true);
}

if ($segunda_foto['name'] != "") {
    guardarFoto($segunda_foto['tmp_name'], $segunda_foto['name'], $ultimoid, false);
}

if ($tercera_foto['name'] != "") {
    guardarFoto($tercera_foto['tmp_name'], $tercera_foto['name'], $ultimoid, false);
}

if ($cuarta_foto['name'] != "") {
    guardarFoto($cuarta_foto['tmp_name'], $cuarta_foto['name'], $ultimoid, false);
}

if ($quinta_foto['name'] != "") {
    guardarFoto($quinta_foto['tmp_name'], $quinta_foto['name'], $ultimoid, false);
}

if ($sexta_foto['name'] != "") {
    guardarFoto($sexta_foto['tmp_name'], $sexta_foto['name'], $ultimoid, false);
}

if ($septima_foto['name'] != "") {
    guardarFoto($septima_foto['tmp_name'], $septima_foto['name'], $ultimoid, false);
}

if ($octava_foto['name'] != "") {
    guardarFoto($octava_foto['tmp_name'], $octava_foto['name'], $ultimoid, false);
}

if ($novena_foto['name'] != "") {
    guardarFoto($novena_foto['tmp_name'], $novena_foto['name'], $ultimoid, false);
}

if ($decima_foto['name'] != "") {
    guardarFoto($decima_foto['tmp_name'], $decima_foto['name'], $ultimoid, false);
}

// $sqlf = "INSERT INTO fotografias SET nombre_foto='" . $_FILES['fotografias']['name'] . "', principal=1, estado=1, propiedad='$ultimoid'";
// $result2 = mysqli_query($con, $sqlf);

// move_uploaded_file($_FILES['fotografias']['tmp_name'], "images/propiedades/" . $_FILES['fotografias']['name']);

header('Location:formulario_propiedades.php');
