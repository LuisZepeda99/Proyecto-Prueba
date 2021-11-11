<?php
include("functions/setup.php");
?>

<!DOCTYPE html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        #formpr {
            width: 850px;
            margin: auto;
        }

        #colorheader {
            background-color: #0f62a7;
            color: white;
            margin-top: 20px;
        }

        .obj {
            width: 20%;
        }
    </style>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Formulario Propiedades</title>
    <script>
        function handleFiles(files) {
            for (var i = 0; i < files.length; i++) {

                var file = files[i];
                var imageType = /image.*/;

                if (!file.type.match(imageType)) {
                    continue;
                }

                var img = document.createElement("img");
                img.classList.add("obj");
                img.file = file;
                fileList.appendChild(img);

                var reader = new FileReader();
                reader.onload = (function(aImg) {
                    return function(e) {
                        aImg.src = e.target.result;
                    };
                })(img);
                reader.readAsDataURL(file);
            }
        }
    </script>
</head>

<body>
    <div class="card" id="formpr">
        <div class="card-header" id="colorheader">Formulario Ingreso de Propiedades</div>

        <div class="card-body">
            <form action="registrar_propiedad.php" method="post" name="formprop" class="formpr" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <label for="tipo">Tipo de Propiedad:</label><br>
                        <select id="tipo" name="tipo" class="form-select" aria-label="Default select example">
                            <option value="0">Seleccione</option>
                            <option value="Casa">Casa</option>
                            <option value="Departamento">Departamento</option>
                            <option value="Terreno">Terreno</option>
                        </select>
                    </div>

                    <div class="col">
                        <label for="descripcion" class="form-label">Ingrese Descripción: </label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
                    </div>
                </div><br>

                <div class="row">
                    <div class="col">
                        <label for="banos">Ingrese Cantidad de Baños:</label><br>
                        <input type="number" min="0" class="form-control" id="banos" name="banos">
                    </div>

                    <div class="col">
                        <label for="dormitorios">Ingrese Cantidad de Dormitorios: </label><br>
                        <input type="number" min="0" class="form-control" id="dormitorios" name="dormitorios">
                    </div>
                </div><br>

                <div class="row">
                    <div class="col">
                        <label for="areatotal">Ingrese Área Total del Terreno:</label><br>
                        <input type="text" class="form-control" id="areatotal" name="areatotal">
                    </div>

                    <div class="col">
                        <label for="areaconst">Ingrese Área Construida: </label><br>
                        <input type="text" class="form-control" id="areaconst" name="areaconst">
                    </div>
                </div><br>

                <div class="row">
                    <div class="col">
                        <label for="preciopesos">Ingrese Precio en $:</label><br>
                        <input type="text" class="form-control" id="preciopesos" name="preciopesos">
                    </div>

                    <div class="col">
                        <label for="preciouf">Ingrese Precio en UF: </label><br>
                        <input type="text" class="form-control" id="preciouf" name="preciouf">
                    </div>
                </div><br>

                <div class="row">
                    <div class="col">
                        <label for="fechapub">Ingrese Fecha de Publicación:</label><br>
                        <input type="date" class="form-control" id="fechapub" name="fechapub">
                    </div>

                    <div class="col">
                        <label for="visita">Solicitar Visita:</label><br>
                        <div class="form-check">
                            <label class="form-check-label" for="radio1"></label>
                            <input type="radio" class="form-check-input" id="radio1" name="visita" value="si" checked>Si
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="radio2"></label>
                            <input type="radio" class="form-check-input" id="radio2" name="visita" value="no">No
                        </div>
                    </div>
                </div><br>

                <div class="row">
                    <div class="col">
                        <label for="form-check">La Propiedad Cuenta con:</label><br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="bodega" name="bodega" value="bodega">
                            <label class="form-check-label">Bodega</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="estacionamiento" name="estacionamiento" value="estacionamiento">
                            <label class="form-check-label">Estacionamiento</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="logia" name="logia" value="logia">
                            <label class="form-check-label">Logia</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="cocina" name="cocina" value="cocina">
                            <label class="form-check-label">Cocina Amoblada</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="antejardin" name="antejardin" value="antejardin">
                            <label class="form-check-label">Antejardín</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="patio" name="patio" value="patio">
                            <label class="form-check-label">Patio Trasero</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="piscina" name="piscina" value="piscina">
                            <label class="form-check-label">Piscina</label>
                        </div>
                    </div>
                </div><br>

                <div class="row">
                    <div class="col">
                        <label for="comu">Comuna:</label>
                        <select id="comu" name="comu" class="form-select" aria-label="Default select example">
                            <option value="0">Seleccionar</option>
                            <?php
                            $sqlcomu = "SELECT * FROM comunas WHERE estado=1";
                            $resultcomu = mysqli_query(conectar(), $sqlcomu);
                            while ($datoscomu = mysqli_fetch_array($resultcomu)) {
                            ?>
                                <option value="<?php echo $datoscomu['idComunas']; ?>"><?php echo $datoscomu['nombre']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="col">
                        <label for="provi">Provincia:</label>
                        <select id="provi" name="provi" class="form-select" aria-label="Default select example">
                            <option value="0">Seleccionar</option>
                            <?php
                            $sqlprovi = "SELECT * FROM provincias WHERE estado=1";
                            $resultprovi = mysqli_query(conectar(), $sqlprovi);
                            while ($datosprovi = mysqli_fetch_array($resultprovi)) {
                            ?>
                                <option value="<?php echo $datosprovi['idProvincias']; ?>"><?php echo $datosprovi['nombre']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div><br>

                <div class="row">
                    <div class="col">
                        <label for="sector">Sector:</label>
                        <select id="sector" name="sector" class="form-select" aria-label="Default select example">
                            <option value="0">Seleccionar</option>
                            <?php
                            $sqlsector = "SELECT * FROM sectores WHERE estado=1";
                            $resultsector = mysqli_query(conectar(), $sqlsector);
                            while ($datossector = mysqli_fetch_array($resultsector)) {
                            ?>
                                <option value="<?php echo $datossector['idSector']; ?>"><?php echo $datossector['nombre']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="col">
                        <label for="estado" class="fuentelogin">Estado:</label>
                        <select id="estado" name="estado" class="form-select" aria-label="Default select example">
                            <option value="2">Seleccione Estado</option>
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                        </select>
                    </div>
                </div><br>

                <div class="col" id="fileList">
                    <label for="form-check">Ingrese Fotografías (1-10):</label><br><br>

                    <div class="col-4">
                        <button type="button" value="agregar" id="agregar" class="btn btn-success" onclick="agregarCampoFoto()">Añadir</button>
                        <button type="button" value="quitar" id="quitar" class="btn btn-danger" onclick="quitarCampoFoto()" disabled>Eliminar</button>
                    </div>
                    <br>
                    <div class="col-12">
                        <label for="foto_principal" class="form-label">Imagen Principal</label>
                        <input class="form-control" id="foto_principal" name="foto_principal" type="file" accept="image/jpeg">
                    </div>
                    <div class="col-12" hidden id="foto_dos">
                        <label for="segunda_foto" class="form-label">Segunda Imagen</label>
                        <input class="form-control" id="segunda_foto" name="segunda_foto" type="file" accept="image/jpeg">
                    </div>
                    <div class="col-12" hidden id="foto_tres">
                        <label for="tercera_foto" class="form-label">Tercera Imagen</label>
                        <input class="form-control" id="tercera_foto" name="tercera_foto" type="file" accept="image/jpeg">
                    </div>
                    <div class="col-12" hidden id="foto_cuatro">
                        <label for="cuarta_foto" class="form-label">Cuarta Imagen</label>
                        <input class="form-control" id="cuarta_foto" name="cuarta_foto" type="file" accept="image/jpeg">
                    </div>
                    <div class="col-12" hidden id="foto_cinco">
                        <label for="quinta_foto" class="form-label">Quinta Imagen</label>
                        <input class="form-control" id="quinta_foto" name="quinta_foto" type="file" accept="image/jpeg">
                    </div>
                    <div class="col-12" hidden id="foto_seis">
                        <label for="sexta_foto" class="form-label">Sexta Imagen</label>
                        <input class="form-control" id="sexta_foto" name="sexta_foto" type="file" accept="image/jpeg">
                    </div>
                    <div class="col-12" hidden id="foto_siete">
                        <label for="septima_foto" class="form-label">Séptima Imagen</label>
                        <input class="form-control" id="septima_foto" name="septima_foto" type="file" accept="image/jpeg">
                    </div>
                    <div class="col-12" hidden id="foto_ocho">
                        <label for="octava_foto" class="form-label">Octava Imagen</label>
                        <input class="form-control" id="octava_foto" name="octava_foto" type="file" accept="image/jpeg">
                    </div>
                    <div class="col-12" hidden id="foto_nueve">
                        <label for="novena_foto" class="form-label">Novena Imagen</label>
                        <input class="form-control" id="novena_foto" name="novena_foto" type="file" accept="image/jpeg">
                    </div>
                    <div class="col-12" hidden id="foto_diez">
                        <label for="decima_foto" class="form-label">Decima Imagen</label>
                        <input class="form-control" id="decima_foto" name="decima_foto" type="file" accept="image/jpeg">
                    </div>
                </div><br>

                <center>
                    <input type="button" class="btn btn-primary" value="Registrar" id="btnregistrar" onclick="validarPropiedad();">
                </center>
            </form>
        </div>
    </div>
    <script src="js/validar_propiedad.js"></script>
    <script src="js/validarfotos.js"></script>
</body>

</html>