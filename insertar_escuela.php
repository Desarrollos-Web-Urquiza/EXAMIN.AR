<?php require_once("includes/connection_db.php"); ?>

<?php


$escuela = $_POST["escuela"] ;









$sql = "INSERT INTO escuelas(Escuela) VALUES ('$escuela' )" ;

$sql = mysqli_query($conexion, $sql) ;




header("Location: Index_Profesor.php");

?>