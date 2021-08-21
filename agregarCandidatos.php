<?php

require('config.php');

    							
	if(isset($_POST["submit"])){
	if(isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["edad"]) && isset($_POST["matricula"]) && isset($_POST["email"]) && isset($_POST["ciudad"]) && isset($_POST["aspira"]) && isset($_POST["celular"]) && isset($_POST["descrip"]))
			{
				$nombre = $_REQUEST["nombre"];
            	$apellido = $_REQUEST["apellido"];
            	$edad = $_REQUEST["edad"];
				$matricula = $_REQUEST["matricula"];
				$email = $_REQUEST["email"];
				$ciudad= $_REQUEST["ciudad"];
				$aspira= $_REQUEST["aspira"];
				$celular= $_REQUEST["celular"];
				$descrip= $_POST["descrip"];
			}
		}
	else
		{
			echo "<br>Todo el campo adquirido";
		}
				
        $hostname="localhost";
		$username= "root";
		$password= "";
		$database="db_evoting";

        $conn= mysqli_connect($hostname, $username, $password, $database);
		
			


		$sql= "INSERT INTO candidatos VALUES(0,'$nombre', '$apellido', '$edad', '$matricula', '$email','$ciudad','$aspira','$celular','$descrip')";
				

				if($conn->query($sql)=== TRUE){
					echo "<img src='images/success.png' width='70' height='70'>";
					echo "<h3 class='text-info specialHead text-center'><strong> Se ha agregado satisfactoriamente.</strong></h3>";
					echo "<a href='cpanel.php' class='btn btn-primary'> <span class='glyphicon glyphicon-ok'></span> <strong> Finalizar</strong> </a>";
				}
				else
				{
					echo "<img src='images/error.png' width='70' height='70'>";
					echo "<h3 class='text-info specialHead text-center'><strong> Parece que tenemos un problema.</strong></h3>";
					echo "<a href='cpanel.php' class='btn btn-primary'> <span class='glyphicon glyphicon-ok'></span> <strong> Finalizar</strong> </a>";
				}

?>