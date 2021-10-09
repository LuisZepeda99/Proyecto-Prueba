<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/validaciones.js"></script>
</head>

<body>
    <div id="inicio">
        <div class="contenedor">
            <form action="consulta.php" id="form-inicio" name="inicio-f" method="post">
                <h2>Iniciar Sesión</h2>

                <label for="usuario">Usuario: </label><br>
                <input type="text" id="usuario" name="usuario"><br><br>

                <label for="clave">Contraseña: </label><br>
                <input type="password" name="clave" id="clave"><br><br>

                <div id="btn-inicio">
                    <input type="button" value="Iniciar" id="btn" onclick="validar();">
                </div><br>

                <a href="acceso_form.php" id="link-inicio">Registrarme</a><br>

                <?php
                if (isset($_GET['error'])) {
                ?>
                    <div id="error">
                        Error al intentar ingresar..
                    </div>
                <?php
                }
                ?>
            </form>
        </div>
    </div>
</body>

</html>