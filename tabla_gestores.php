<?php
include("functions/funciones.php");

session_start();

if (isset($_SESSION['gestor']) || $_SESSION['administrador']) {
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabla Gestores</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/estilos.css">
    </head>

    <body>
        <table id="tabla-g">
            <tr>
                <th>Rut</th>
                <th>Nombre Completo</th>
                <th>Fecha de Nacimiento</th>
                <th>Correo</th>
                <th>Sexo</th>
                <th>Telefono</th>
                <th>Usuario</th>
                <th>Estado</th>
            </tr>
            <?php
            $sql = "SELECT * FROM gestores";
            $result = mysqli_query(conectar(), $sql);
            while ($datos = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo $datos['rut']; ?></td>
                    <td><?php echo $datos['nombre']; ?></td>
                    <td><?php echo $datos['fecha_nacimiento']; ?></td>
                    <td><?php echo $datos['correo']; ?></td>
                    <td><?php echo $datos['sexo']; ?></td>
                    <td><?php echo $datos['telefono']; ?></td>
                    <td><?php echo $datos['usuario']; ?></td>
                    <td><?php echo $datos['estado']; ?></td>
                </tr>
            <?php
            }
            ?>
        </table><br>
        <a href="acceso_vis.php">Volver Atrás</a> | <a href="formulario_gestor.php">Volver al Regsitro</a>
    </body>

    </html>
<?php
} else {
    header("Location:error.php");
}
