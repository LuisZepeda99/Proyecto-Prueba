<?php
include("functions/funciones.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Registro Gestor</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/validaciones.js"></script>
</head>

<body>
    <div id="form-g">
        <div id="contenedor-g" class="contenedor">
            <form id="form-gestor" action="registrar2.php" method="post" name="form-gestor" enctype="multipart/form-data">
                <h1>Registro de Gestor</h1>

                <label for="rut">Ingrese Rut: </label>
                <input type="text" name="rut" id="rut">

                <label for="nombre">Ingrese Nombre Completo: </label>
                <input type="text" name="nombre" id="nombre">

                <label for="fecha_nacimiento">Ingrese Fecha de Nacimiento: </label>
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento">

                <label for="correo">Ingrese Correo electrónico: </label>
                <input type="email" name="correo" id="correo">

                <label for="clave">Ingrese Contraseña: </label>
                <input type="password" name="clave" id="clave">

                <label for="sexo">Seleccione Sexo: </label>
                <select name="sexo">
                    <option value="masculino">Masculino</option>
                    <option value="femenino">Femenino</option>
                </select><br><br>

                <label for="telefono">Ingrese Teléfono: </label>
                <input type="text" name="telefono" id="telefono">

                <label for="certificado">Ingrese Certificado de Antecedentes: </label>
                <input type="file" name="certificado" id="certificado">
    
                <button type="submit" id="btn-gestor" onclick="validar_gestor();">Registrarme</button>
                <br><br>
                <a href="acceso_form.php" id="link-gestor">Volver Atrás</a>
            </form>
        </div>
    </div>

    <section>
        <table id="tabla-gestor">
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
        </table>
    </section>
</body>

</html>