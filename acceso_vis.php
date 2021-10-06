<?php
session_start();

if (isset($_SESSION['admin'])) {

?>

    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link>
        <title>Seleccione usuarios a Visualizar</title>
    </head>

    <body>
        <h4>Bienvenido Usuario: <?php echo strtoupper($_SESSION['admin']); ?></h4><br>

        <p><a href="tabla_gestores.php">Gestores Inmobiliarios</a></p>
        <p><a href="tabla_propietarios.php">Propietarios</a></p>
    </body>

    </html>
<?php
} else {
    header("Location:error.php");
}
