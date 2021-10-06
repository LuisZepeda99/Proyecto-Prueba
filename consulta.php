<?php

session_start();

include("functions/funciones.php");

$admin = "SELECT * FROM administrador WHERE usuario = '" . $_POST['usuario'] . "' and clave = '" . $_POST['clave'] . "' and estado=1";
$result = mysqli_query(conectar(), $admin);

$propietario = "SELECT * FROM propietarios WHERE usuario = '" . $_POST['usuario'] . "' and clave = '" . $_POST['clave'] . "' and estado=1";
$result = mysqli_query(conectar(), $propietario);

$gestor = "SELECT * FROM gestores WHERE usuario = '" . $_POST['usuario'] . "' and clave = '" . $_POST['clave'] . "' and estado=1";
$result = mysqli_query(conectar(), $gestor);

$datos = mysqli_fetch_array($result);

$cont = mysqli_num_rows($result);

if ($cont != 0) {
    $_SESSION['admin'] = $_POST['usuario'];
    header("Location: acceso_vis.php");
} else if ($cont != 0) {
    $_SESSION['gestor'] = $_POST['nombre'];
    header("Location: principal.php");
} else if ($cont != 0) {
    $_SESSION['propietario'] = $_POST['nombre'];
    header("Location: principal.php");
} else {
    header("Location:login.php");
}
