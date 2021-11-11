<?php

function conectar()
{
    $con = mysqli_connect("localhost", "root", "12345678", "pruebas");
    return $con;
}

function fechahoy()
{
    date_default_timezone_set('America/Santiago');
    $fecha = date('d-m-Y');
    return $fecha;
}

function hora()
{
    date_default_timezone_set('America/Santiago');
    $hora = date('H:i:s');
    return $hora;
}

function fechabd($fecha)
{
    $dia = substr($fecha, 0, 2);
    $mes = substr($fecha, 3, 2);
    $anho = substr($fecha, 6, 4);
    $fechabd = $anho . "-" . $mes . "-" . $dia;
    return $fechabd;
}

function fechaesp($fecha)
{
    $dia = substr($fecha, 8, 2);
    $mes = substr($fecha, 5, 2);
    $anho = substr($fecha, 0, 4);
    $fechaesp = $dia . "-" . $mes . "-" . $anho;
    return $fechaesp;
}

function hola(){
    
}

function guardarFoto($tmp_foto, $nombre_foto, $id_propiedades, $principal)
{
    $con = mysqli_connect("localhost", "root", "12345678", "pruebas");

    if ($principal) {
        $sql = "INSERT INTO fotografias SET nombre_foto='" . $nombre_foto . "', principal=1, estado=1, propiedad='$id_propiedades'";
        mysqli_query($con, $sql);
    } else {
        $sql = "INSERT INTO fotografias SET nombre_foto='" . $nombre_foto . "', principal=0, estado=1, propiedad='$id_propiedades'";
        mysqli_query($con, $sql);
    }

    move_uploaded_file($tmp_foto, "images/propiedades/" . $nombre_foto);
}