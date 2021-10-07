<?php

//Conectarnos a la Base de Datos
$con = mysqli_connect("localhost", "root", "", "pruebas");

date_default_timezone_set('America/Santiago');
$fecha_hoy = date('Y-m-d');
$hora = date('H:i:s');

$sql = "INSERT INTO gestores SET rut='".$_POST['rut']."', nombre='" . $_POST['nombre'] . "', fecha_nacimiento='".$_POST['fecha_nacimiento']."', correo='".$_POST['correo']."', clave='".md5($_POST['clave'])."', sexo='".$_POST['sexo']."', telefono='".$_POST['telefono']."', usuario='".$_POST['usuario']."', estado=1, fecha_creacion='".$fecha_hoy."', hora_creacion='".$hora."'";
mysqli_query($con, $sql);

header('Location:tabla_gestores.php');