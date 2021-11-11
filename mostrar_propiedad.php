<?php

include("functions/setup.php");

$idpr = $_GET['idprop'];

$sql = "SELECT * FROM propiedades WHERE idPropiedad=" . $idpr;
$result = mysqli_query(conectar(), $sql);

$propiedad = mysqli_fetch_array($result);

$sqlfotos = "SELECT nombre_foto FROM fotografias WHERE propiedad=" . $idpr;
$resultf = mysqli_query(conectar(), $sqlfotos);

$propiedadfotos = mysqli_fetch_assoc($resultf);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Propiedades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        h3 {
            margin-top: 20px;
            color: #1a75ff;
            text-align: center;
        }

        h2 {
            color: #1a75ff;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3>Información de Propiedad</h3><br>

        <div class="container">
            <div class="row">
                <div class="col-10" style="width: 30%;">
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php
                            $sqlfotos = "SELECT nombre_foto FROM fotografias WHERE propiedad=" . $idpr;
                            $resultf = mysqli_query(conectar(), $sqlfotos);
                            while ($fila = mysqli_fetch_assoc($resultf)) {
                                $datos = '<div class="carousel-item active" data-bs-interval="10000">';
                                $datos .= '<div class="card d-block w-100" style="width: 18rem;">';
                                $datos .= '<img src="images/propiedades/' . $fila['nombre_foto'] . '" class=" card-img-top" alt="...">';
                                $datos .= '</div>';
                                $datos .= '</div>';
                                
                                $datos2 = '<div class="carousel-item" data-bs-interval="10000">';
                                $datos2 .= '<div class="card d-block w-100" style="width: 18rem;">';
                                $datos2 .= '<img src="images/propiedades/' . $fila['nombre_foto'] . '" class=" card-img-top" alt="...">';
                                $datos2 .= '</div>';
                                $datos2 .= '</div>';

                                echo $datos;
                                echo $datos2;
                            ?>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>

                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            <?php
                            }
                            ?>

                            <div class="carousel-item" data-bs-interval="2000">
                                <div class="card d-block w-100" style="width: 18rem;">
                                    <img src='images/propiedades/casa2.jpg' style='width: 20%' class='card-img-top' alt='...'>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div><br>

        <p>
            <label for="">Descripción: <?php echo $propiedad['descripcion']; ?></label>
        </p>

        <p>
            <label for="">Cantidad de Baños: <?php echo $propiedad['banos']; ?></label>
        </p>

        <p>
            <label for="">Cantidad de Dormitorios: <?php echo $propiedad['dormitorio']; ?></label>
        </p>

        <p>
            <label for="">Área Total del Terrreno: <?php echo $propiedad['area_terreno']; ?></label>
        </p>

        <p>
            <label for="">Área Construida: <?php echo $propiedad['area_construida']; ?></label>
        </p>

        <p>
            <label for="">Precio: <?php echo $propiedad['precio']; ?></label>
        </p>

        <p>
            <label for="">Precio UF: <?php echo $propiedad['precio_uf']; ?></label>
        </p>

        <p>
            <label for="">Fecha de Publicación: <?php echo fechaesp($propiedad['fecha_publicacion']); ?></label>
        </p>

        <p>
            <label for="">Solicitud de Visita: <?php echo $propiedad['solicitar_visita']; ?></label>
        </p>

        <h6>La propiedad cuenta con: </h6>

        <p>
            <label for="">Bodega: <?php echo $propiedad['bodega']; ?></label>
        </p>

        <p>
            <label for="">Estacionamiento: <?php echo $propiedad['estacionamiento']; ?></label>
        </p>

        <p>
            <label for="">Logia: <?php echo $propiedad['logia']; ?></label>
        </p>

        <p>
            <label for="">Cocina Amoblada: <?php echo $propiedad['cocina']; ?></label>
        </p>

        <p>
            <label for="">Antejardín: <?php echo $propiedad['antejardin']; ?></label>
        </p>

        <p>
            <label for="">Patio Trasero: <?php echo $propiedad['patio_trasero']; ?></label>
        </p>

        <p>
            <label for="">Piscina: <?php echo $propiedad['piscina']; ?></label>
        </p>
    </div>
</body>

</html>