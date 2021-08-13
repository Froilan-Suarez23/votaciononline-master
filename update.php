<?php
require 'config.php';
$conn = mysqli_connect($hostname, $username, $password, $database);
$id = $_POST["id"];
$full_name =  $_POST["voterName"];
$apellido =  $_POST["apellName"];
$edad =  $_POST["edadName"];
$email =  $_POST["voterEmail"];
$voter_id =  $_POST["voterID"];

$sentencia = $conn->prepare("UPDATE tbl_users SET
full_name = ?,
apellido = ?,
edad=?,
email=?,
voter_id= ?
WHERE id = ?");
$sentencia->bind_param('sssssi', $full_name, $apellido, $edad, $email, $voter_id, $id);
$sentencia->execute();
header("Location: lista_votantes.php");





?>