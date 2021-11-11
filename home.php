<?php
include("functions/setup.php");
?>

<!DOCTYPE html>

<head>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        #links {
            color: white;
            margin-top: 6px;
        }

        h2 {
            font-family: Arial, Helvetica, sans-serif;
            color: blue;
            text-align: center;
        }
    </style>
    <!-- <link rel="stylesheet" href="css/estiloscarrusel.css"> -->
    <link rel="stylesheet" href="css/home.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-primary justify-content-right">
        <div class="container-fluid">
            <ul>
                <a class="navbar-brand">
                    <img src="images/logo-pnk.png" alt="Avatar Logo" style="width:100px;" class="rounded-pill">
                </a>
            </ul>

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="home.php" id="links">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="acceso_form.php" id="links">REGISTRARME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="inicio.php" id="links">INGRESAR</a>
                </li>
            </ul>
        </div>
    </nav><br>

    <h2>¡Elige tu Propiedad!</h2><br>

    <div class="row contenedor-home">
        <?php
        $sql = "SELECT * FROM propiedades WHERE estado=1";
        $result = mysqli_query(conectar(), $sql);
        while ($datos = mysqli_fetch_array($result)) {
            $sqlfp = "SELECT * FROM fotografias WHERE propiedad=" . $datos['idPropiedad'] . " and principal=1";
            $resultfp = mysqli_query(conectar(), $sqlfp);
            $datosfp = mysqli_fetch_array($resultfp);
        ?>
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <?php
                    if ($datosfp['idFotografias'] != "") {
                        echo ("<img src='images/propiedades/" . $datosfp['nombre_foto'] . "' class='card-img-top' alt='...'>");
                    } else {
                        echo ("<div class='alert alert-danger'>La propiedad no contiene imagen</div>");
                    }
                    ?>
                    <div class="card-body">
                        <h5 class="card-title">Propiedades</h5>
                        <p class="card-text">Código: <?php echo $datos['idPropiedad']; ?></p>
                        <p class="card-text"><?php echo $datos['descripcion']; ?></p>
                        <p class="card-text">Precio: <?php echo $datos['precio']; ?></p>
                        <div class="centrar-boton-qsm">
                            <?php
                            echo ("<a href='mostrar_propiedad.php?idprop=" . $datos['idPropiedad'] . "' class='btn btn-primary'>¡Quiero Saber Más!</a>");
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</body>

</html>