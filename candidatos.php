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

<h2>Datos de Candidato</h2>

</div>

    <div class="container">

      <?php
      require 'config.php';
      $mysqli = mysqli_connect($hostname, $username, $password, $database);
      $id = $_GET["id"];
      $sentencia = $mysqli->prepare("SELECT id, nombre, apellido, edad, matricula, email, ciudad, aspira, celular, descrip FROM candidatos WHERE id = ?");
      $sentencia->bind_param("i", $id);
      $sentencia->execute();
      $resultado = $sentencia->get_result();
      # Obtenemos solo una fila, que será el videojuego a editar
      $file = $resultado->fetch_assoc();
      if (!$file) {
          exit("No hay resultados para ese ID");
      }

      ?>

                  
        
        
    </div>

     <div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4">
    <div class="panel panel-default">
      <div class="panel-heading"><h2><?php echo $file['nombre'] ?></div>
      <div class="panel-body">
        <?php echo $file['apellido'] ?>
        <br>
        <br>
        <?php echo $file['edad'] ?>
        <br>
        <br>
        <?php echo $file['matricula'] ?>
        <br>
        <br>
        <?php echo $file['email'] ?>
        <br>
        <br>
        <?php echo $file['ciudad'] ?>
        <br>
        <br>
        <?php echo $file['aspira'] ?>
        <br>
        <br>
        <?php echo $file['celular'] ?>
        <br>
        <br>
        <?php echo $file['descrip'] ?>
      </div>
    </div>
   
  <div class="col-sm-4">
    <button type="button"class="btn btn-primary btn-block">
      <a class="bg-primary" href="listaCandidatos.php">Regresar</a>
    </button>
  </div>
</div> 

    
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>