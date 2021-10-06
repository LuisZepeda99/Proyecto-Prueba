<table>
     <tr>
         <th>Rut</th>
         <th>Nombre Completo</th>
         <th>Fecha de Nacimiento</th>
         <th>Correo</th>
         <th>Contraseña</th>
         <th>Sexo</th>
         <th>Telefono</th>
         <th>Certificado</th>
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
             <td></td>
             <td><?php echo $datos['usuario']; ?></td>
             <td><?php echo $datos['estado']; ?></td>
         </tr>
     <?php
        }
        ?>
 </table>
 <a href="acceso_vis.php">Volver Atrás</a>