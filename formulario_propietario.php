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
</head>

<body>
    <div id="form-p">
        <div id="contenedor-p" class="contenedor">
            <form id="form-propietario" action="registrar.php" method="post">
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
                <select name="sexo">
                    <option value="masculino">Masculino</option>
                    <option value="femenino">Femenino</option>
                </select><br><br>

                <label for="telefono">Ingrese Teléfono: </label>
                <input type="text" name="telefono" id="telefono">

                <label for="usuario">Ingrese Nombre de Usuario: </label><br>
                <input type="text" name="usuario" id="usuario">

                <label for="n_propiedad">Ingrese Número de Propiedad: </label><br>
                <input type="text" name="n_propiedad" id="n_propiedad">

                <button type="submit" id="btn">Registrarme</button>
                <br><br>
                <a href="acceso_form.php" id="link-propietario">Volver Atrás</a>
            </form>

            <div>
                <h2>Publica tus propiedades en línea</h2>
            </div>
        </div>
    </div>

    <section>
        <table id="tabla-propietario">
            <tr>
                <th>Rut</th>
                <th>Nombre Completo</th>
                <th>Fecha de Nacimiento</th>
                <th>Correo</th>
                <th>Sexo</th>
                <th>Telefono</th>
                <th>N° Propiedad</th>
                <th>Usuario</th>
                <th>Estado</th>
            </tr>
            <?php
            $sql = "SELECT * FROM propietarios";
            $result = mysqli_query(conectar(), $sql);
            while ($datos = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td>
                        <?php echo $datos['rut']; ?>
                    </td>
                    <td>
                        <?php echo $datos['nombre']; ?>
                    </td>
                    <td>
                        <?php echo $datos['fecha_nacimiento']; ?>
                    </td>
                    <td>
                        <?php echo $datos['correo']; ?>
                    </td>
                    <td>
                        <?php echo $datos['sexo']; ?>
                    </td>
                    <td>
                        <?php echo $datos['telefono']; ?>
                    </td>
                    <td>
                        <?php echo $datos['n_propiedad']; ?>
                    </td>
                    <td>
                        <?php echo $datos['usuario']; ?>
                    </td>
                    <td>
                        <?php echo $datos['estado']; ?>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </section>
</body>

</html>