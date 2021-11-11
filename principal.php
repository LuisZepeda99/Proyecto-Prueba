<?php
session_start();

if (isset($_SESSION['propietario'])) {

?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Principal Propietario</title>
        <link rel="stylesheet" href="css/estilos.css">
    </head>

    <body>
        <div id="cont-principal">
            <div id="contenedor-principal" class="contenedor">
                <h4>Bienvenido Propietario: <?php echo strtoupper($_SESSION['propietario']); ?></h4><br>

                <p><a href="tabla_propietarios.php">Registros</a></p>
                <p><a href="formulario_propiedades.php">Ingresar Propiedad</a></p>
                <p><a href="cerrar_sesion.php">Cerrar Sesión</a></p>
            </div>
        </div>
    </body>

    </html>
<?php
} else {
    header("Location:error.php");
}
