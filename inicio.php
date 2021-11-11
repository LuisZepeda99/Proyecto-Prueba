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
    <script>
        function validar() {

            if (document.index.usuario.value == "") {
                alert("Debe Ingresar el Usuario");
                document.index.usuario.focus();
                return false;
            }

            if (document.index.clave.value == "") {
                alert("Debe Ingresar la Contraseña");
                document.index.clave.focus();
                return false;
            }

            document.index.submit();
        }
    </script>
</head>

<body>
    <div id="inicio">
        <div class="contenedor">
            <form action="consulta.php" id="form-inicio" name="index" method="post">
                <h2>Iniciar Sesión</h2>

                <label for="usuario">Usuario: </label><br>
                <input type="text" id="usuario" name="usuario"><br><br>

                <label for="clave">Contraseña: </label><br>
                <input type="password" name="clave" id="clave"><br><br>

                <input type="button" value="Iniciar" id="btn" onclick="validar();"><br><br>
                
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