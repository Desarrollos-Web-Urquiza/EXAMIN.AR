<?php require_once("includes/connection_db.php"); ?>

<?php


$escuela = $_POST["escuela"] ;


$curso = $_POST["curso"] ;


$consulta = "SELECT id
										FROM escuelas
										WHERE Escuela = '{$escuela}'
										LIMIT 1
										"
										;
										
										
		$A= mysqli_query($conexion, $consulta) ;
		$B=mysqli_fetch_array($A) ;
		$id = $B['id'] ;

		



$sql = "INSERT INTO cursos(Descripcion, Escuela_id ) VALUES ('$curso', '$id'  )" ;

$sql = mysqli_query($conexion, $sql) ;




header("Location: Index_Profesor.php");

?>