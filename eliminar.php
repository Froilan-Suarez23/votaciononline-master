<?php
if (!isset($_GET["id"])) {
    exit("No hay id");
}
require 'config.php';
$conn = mysqli_connect($hostname, $username, $password, $database);
$id = $_GET["id"];
$sentencia = $conn->prepare("DELETE FROM tbl_users WHERE id = ?");
$sentencia->bind_param("i", $id);
$sentencia->execute();
header("Location: lista_votantes.php");

?>