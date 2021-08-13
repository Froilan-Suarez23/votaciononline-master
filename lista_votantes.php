

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Panel de Candidatos</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <style>
      .headerFont{
        font-family: 'Ubuntu', sans-serif;
        font-size: 24px;
      }

      .subFont{
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        
      }
      
      .specialHead{
        font-family: 'Oswald', sans-serif;
      }

      .normalFont{
        font-family: 'Roboto Condensed', sans-serif;
      }
    </style>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	
	<div class="container">
  	<nav class="navbar navbar-default navbar-fixed-top navbar-inverse
    " role="navigation">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-header">
          <a href="cpanel.php" class="navbar-brand headerFont text-lg"><strong>México 4T</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            <!-- 
            <li><a href="#featuresTab"><span class="subFont"><strong>Features</strong></span></a></li>
            <li><a href="#feedbackTab"><span class="subFont"><strong>Feedback</strong></span></a></li>
            <li><a href="#"><span class="subFont"><strong>About</strong></span></a></li>
        	-->
          </ul>
          

          <a href="cpanel.php"><button type="submit" class="btn btn-success navbar-right navbar-btn"><span class="normalFont"><strong>Panel Administrativo</strong></span></button></a>
        </div>

      </div> <!-- end of container -->
    </nav>

<br>
<br>
<br>
<br>

<div class="container">

<h2>Lista de Votantes</h2>

</div>

    <div class="container">

                  
      <table class="table table-dark table-striped">
        <?php
 
          require 'config.php';
           $conn = mysqli_connect($hostname, $username, $password, $database);
           $consulta = "SELECT * FROM tbl_users ";

           $datos = mysqli_query($conn, $consulta);

           
        ?>
        <thead>
          <tr>
            <th>Num.</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Email</th>
            <th>Identificación de Votante</th>
            <th></th>
          </tr>
        </thead>
        <tbody>

          <?php while ($fila=mysqli_fetch_assoc($datos)) {?>
            <tr>
              <td><?php  echo $fila['id']; ?></td>
              <td><?php  echo $fila['full_name']; ?></td>
              <td><?php  echo $fila['apellido']; ?></td>
              <td><?php  echo $fila['edad']; ?></td>
              <td><?php  echo $fila['email']; ?></td>
              <td><?php  echo $fila['voter_id']; ?></td>
              <td>
                <a href="edit.php?id=<?php echo $fila["id"] ?>">
                <img style="width: 30px; height: 30px;" src="images/icons8-editar.gif"/></a>

              </td>
              <td>
                <a href="eliminar.php?id=<?php echo $fila["id"] ?>">
                <img style="width: 30px; height: 30px;" src="images/icons8-eliminar.gif">
                </a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

    <a href="excel.php" type="button" class="btn btn-success navbar-right navbar-btn">Exportar a Excel</a>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>