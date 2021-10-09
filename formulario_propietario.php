<?php
include("functions/funciones.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Registro Propietario</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/validaciones.js"></script>
</head>

<body>
    <div id="form-p">
        <div id="contenedor-p" class="contenedor">
            <form id="form-propietario" action="registrar.php" name="form2" method="post">
                <h1>Registro de Propietario</h1>

                <label for="rut">Ingrese Rut: </label>
                <input type="text" name="rut" id="rut">

                <label for="nombre">Ingrese Nombre Completo: </label>
                <input type="text" name="nombre" id="nombre">

                <label for="fecha_nacimiento">Ingrese Fecha de Nacimiento: </label>
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento">

                <label for="correo">Ingrese Correo electrónico: </label><br>
                <input type="email" name="correo" id="correo">

                <label for="clave">Ingrese Contraseña: </label>
                <input type="password" name="clave" id="clave">

                <label for="sexo">Seleccione Sexo: </label>
                <select name="sexo" id="select-propietario">
                    <option value="masculino">Masculino</option>
                    <option value="femenino">Femenino</option>
                </select><br><br>

                <label for="telefono">Ingrese Teléfono: </label>
                <input type="text" name="telefono" id="telefono">

                <label for="n_propiedad">Ingrese Número de Propiedad: </label><br>
                <input type="text" name="n_propiedad" id="n_propiedad">

                <label for="usuario">Ingrese Nombre de Usuario: </label><br>
                <input type="text" name="usuario" id="usuario">
                
                <input type="button" value="Registrarme" id="btn-propietario" onclick="validarPropietario();">
                <br><br>
                <a href="acceso_form.php" id="link-propietario">Volver Atrás</a> | <a href="principal.php" id="volver-principal">Volver a Principal</a>
                | <a href="tabla_propietarios.php" id="link-propietario">Ver Tabla</a>
            </form>

            <div>
                <h2>Publica tus Propiedades en línea</h2>
            </div>
        </div>
    </div>
</body>

</html>