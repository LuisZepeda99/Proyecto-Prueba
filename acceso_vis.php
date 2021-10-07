<?php
session_start();

if (isset($_SESSION['administrador'])) {

?>

    <!DOCTYPE html>
    <html lang="es">

    <head>
        <title>Seleccion de Usuarios</title>
        <link rel="stylesheet" href="css/estilos.css">
    </head>

    <body>
        <div id="cont-acceso" class="contenedor">
            <h4>Bienvenido Usuario: <?php echo strtoupper($_SESSION['administrador']); ?></h4><br>

            <p><a href="tabla_propietarios.php">Acceso a Propietarios</a></p>
            <p><a href="tabla_gestores.php">Acceso a Gestores</a></p>
            <p><a href="cerrar_sesion.php">Cerrar Sesión</a></p>
        </div>
    </body>

    </html>
<?php
} else {
    header("Location:error.php");
}
