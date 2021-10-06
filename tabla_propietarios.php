 <table>
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
             <td><?php echo $datos['rut']; ?></td>
             <td><?php echo $datos['nombre']; ?></td>
             <td><?php echo $datos['fecha_nacimiento']; ?></td>
             <td><?php echo $datos['correo']; ?></td>
             <td><?php echo $datos['sexo']; ?></td>
             <td><?php echo $datos['telefono']; ?></td>
             <td><?php echo $datos['n_propiedad']; ?></td>
             <td><?php echo $datos['usuario']; ?></td>
             <td><?php echo $datos['estado']; ?></td>
         </tr>
     <?php
        }
        ?>
 </table>
 <a href="acceso_vis.php">Volver Atrás</a>