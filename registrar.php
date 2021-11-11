<?php

//Conectarnos a la Base de Datos
$con = mysqli_connect("localhost", "root", "12345678", "pruebas");

date_default_timezone_set('America/Santiago');
$fecha_hoy = date('Y-m-d');
$hora = date('H:i:s');

$sql = "INSERT INTO propietarios SET rut='".$_POST['rut']."', nombre='" . $_POST['nombre'] . "', fecha_nacimiento='".$_POST['fecha_nacimiento']."', correo='".$_POST['correo']."', clave='".md5($_POST['clave'])."', sexo='".$_POST['sexo']."', telefono='".$_POST['telefono']."', n_propiedad='".$_POST['n_propiedad']."', usuario='".$_POST['usuario']."', fecha_creacion='".$fecha_hoy."', hora_creacion='".$hora."'
, estado=1";
mysqli_query($con, $sql);

header('Location:formulario_propietario.php');
