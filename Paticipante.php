
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



    <div class="container" style="padding:100px;">
      <div class="row">
        <div class="col-sm-12" style="border:2px solid gray;">
          
          <div class="page-header">
            <h2 class="specialHead">Agregar Candidato.</h2>
            <p class="normalFont">Propoesta de cadidato para las elecciones<i class="fas fa-autoprefixer    "></i>.</p>
          </div>
          
          <form action="agregarCandidatos.php" method="POST">
          <div class="form-group">
            <label>Nombre de Candidato :</label><br>
            
            <input type="text" name="nombre" title="Enter Your Full Name" placeholder="Ingresa su nombre" class="form-control" required/><br>

            <label>Apellidos :</label><br>
            
            <input type="text" name="apellido" title="Enter Your Full Name" placeholder="Ingresa su Apellidos" class="form-control" required/><br>

            <label>Edad:</label><br>
            <input type="text" name="edad" title="Enter Your Full Name" placeholder="Ingresa su edad" class="form-control" required/><br>


            <label>Identificación de Matrícula:</label><br>
            <input type="text" name="matricula" placeholder="Ingresa tu Matrícula" class="form-control" required/><br>
            
            
            <label>Correo electrónico de Candidato :</label><br>
            <input type="text" name="email" placeholder="Ingresa tu correo" class="form-control"/><br>

            <label>Ciudad de donde vive:</label><br>
            <input id="ciudad" type="text" name="ciudad" placeholder="Lugar en donde vive" class="form-control" required/><br>

            <label>Aspiración:</label><br>
            <input  type="text" name="aspira" placeholder="Aspiración de puesto" class="form-control" required/><br>

            <label>Numero Celular:</label><br>
            <input type="text" name="celular" title="Enter Your Full Name" placeholder="Ingresa su nemero de celular" class="form-control" required/><br>

            <label>Descripción:</label>
            <textarea name="descrip" class="form-control" placeholder="Describir detalladamente su vida, Ocupación, Actividades Extracurriculares"></textarea><br>
            
            <button type="submit" name="submit" class="btn btn-primary"><strong>Enviar</strong></button>
            <button type="submit" class="btn btn-default">Declinar</button>
            
          </div>
          </form>

        </div>
      </div>
    </div>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>