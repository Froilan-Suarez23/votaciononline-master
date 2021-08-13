<?php 

header('Content-Type: application/xls');

header("Content-Disposition: attachment; filename= libro.xls");



?>

<table class="table table-dark table-striped">
        <?php
 
          require 'config.php';
           $conn = mysqli_connect($hostname, $username, $password, $database);
           $consulta = "SELECT * FROM tbl_users ";

           $datos = mysqli_query($conn, $consulta);

           
        ?>
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Identificación de Votante</th>
          </tr>
        </thead>
        <tbody>

          <?php while ($fila=mysqli_fetch_assoc($datos)) {?>
            <tr>
              <td><?php  echo $fila['full_name']; ?></td>
              <td><?php  echo $fila['email']; ?></td>
              <td><?php  echo $fila['voter_id']; ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>