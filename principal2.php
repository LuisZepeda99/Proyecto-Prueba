<?php
session_start();

if (isset($_SESSION['gestor'])) {

?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Principal</title>
        <link rel="stylesheet" href="css/estilos.css">
    </head>

    <body>
        <div id="cont-principal2">
            <div id="contenedor-principal2" class="contenedor">
                <h4>Bienvenido Gestor: <?php echo strtoupper($_SESSION['gestor']); ?></h4><br>

                <p><a href="tabla_gestores.php">Registros</a></p>
                <p><a href="cerrar_sesion.php">Cerrar Sesión</a></p>
            </div>
        </div>
    </body>

    </html>
<?php
} else {
    header("Location:error.php");
}
