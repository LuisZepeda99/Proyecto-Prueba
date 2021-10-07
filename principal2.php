<?php
session_start();

if (isset($_SESSION['gestor'])) {

?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Principal</title>
        <link rel="stylesheet" type="text/css" href="">
    </head>

    <body>
        <div id="cont-principal">
            <h4>Bienvenido Usuario: <?php echo strtoupper($_SESSION['gestor']); ?></h4><br>

            <p><a href="acceso_form.php">Registros</a></p>
            <p><a href="cerrar_sesion.php">Cerrar Sesión</a></p>
        </div>
    </body>

    </html>
<?php
} else {
    header("Location:error.php");
}