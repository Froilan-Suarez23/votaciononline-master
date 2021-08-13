<?php
require 'config.php';
$mysqli = mysqli_connect($hostname, $username, $password, $database);
$id = $_GET["id"];
$sentencia = $mysqli->prepare("SELECT id, full_name, apellido, edad, email, voter_id FROM tbl_users WHERE id = ?");
$sentencia->bind_param("i", $id);
$sentencia->execute();
$resultado = $sentencia->get_result();
# Obtenemos solo una fila, que será el videojuego a editar
$file = $resultado->fetch_assoc();
if (!$file) {
    exit("No hay resultados para ese ID");
}

?>
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Panel de Votaciones</title>

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
          <a href="index.html" class="navbar-brand headerFont text-lg"><strong>México 4T</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            <!--
             <li><a href="#featuresTab"><span class="subFont"><strong>Features</strong></span></a></li>
            <li><a href="#feedbackTab"><span class="subFont"><strong>Feedback</strong></span></a></li>
            <li><a href="#"><span class="subFont"><strong>About</strong></span></a></li> 
          -->
          </ul>
          

          
        </div>

      </div> <!-- end of container -->
    </nav>

    <div class="container" style="padding:100px;">
      <div class="row">
        <div class="col-sm-12" style="border:2px solid gray;">
          
          <div class="page-header">
            <h2 class="specialHead">Editar Datos de Votantes.</h2>
            <p class="normalFont">Vereficación si los datos de votantes son correctos<i class="fas fa-autoprefixer    "></i>.</p>
          </div>
          
          <form action="update.php" method="POST">
          <div class="form-group">
            <input type="hidden" id="id" name="id" value="<?php echo $file['id'] ?>" />
            <label>Nombre del Votante :</label><br>
            
            <input type="text" name="voterName" title="Enter Your Full Name" placeholder="Ingresa su nombre" class="form-control" value="<?php echo $file["full_name"]?>" required/><br>

            <label>Apellidos :</label><br>
            
            <input type="text" name="apellName" title="Enter Your Full Name" placeholder="Ingresa su Apellidos" class="form-control" value="<?php echo $file["apellido"]?>"  required/><br>

            <label>Edad:</label><br>
            
            <input type="text" name="edadName" title="Enter Your Full Name" placeholder="Ingresa su edad" class="form-control" value="<?php echo $file["edad"]?>"  required/><br>

            <label>Identificación de correo electrónico registrada del votante :</label><br>
            <input type="text" name="voterEmail" value="<?php echo $file["email"]?>"  placeholder="Ingresa tu correo" class="form-control"/><br>

            <label>Matrícula:</label><br>
            <input id="id1" type="text" value="<?php echo $file["voter_id"]?>"  name="voterID" placeholder="Ingresa tu Matrícula" class="form-control" required/><br>
            
            <button type="submit" name="submit" class="btn btn-primary"><strong>Guardar Actualización</strong></button>
          </div>
          </form>

        </div>
      </div>
    </div>
  </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>