<?php

session_start();

include("functions/funciones.php");

$gestor = "SELECT * FROM gestores WHERE usuario='" . $_POST['usuario'] . "' and clave='" . md5($_POST['clave']) . "' and estado=1";
$propietario = "SELECT * FROM propietarios WHERE usuario='" . $_POST['usuario'] . "' and clave='" . md5($_POST['clave']) . "' and estado=1";
$admin = "SELECT * FROM administrador WHERE usuario='" . $_POST['usuario'] . "' and clave='" . md5($_POST['clave']) . "' and estado=1";
$result = mysqli_query(conectar(), $gestor);
$result2 = mysqli_query(conectar(), $propietario);
$result3 = mysqli_query(conectar(), $admin);

$datos = mysqli_fetch_array($result);
$datos2 = mysqli_fetch_array($result2);
$datos3 = mysqli_fetch_array($result3);

if ($datos != null) {
    $_SESSION['gestor'] = $datos['nombre'];
    header("Location:principal2.php");
} else if ($datos2 != null) {
    $_SESSION['propietario'] = $datos2['nombre'];
    header("Location:principal.php");
} else if ($datos3 != null) {
    $_SESSION['administrador'] = $datos3['usuario'];
    header("Location:acceso_vis.php");
} else {
    header("Location:inicio.php?error");
}
