<?php require_once("includes/connection_db.php"); ?>
<?php require_once("includes/verificacion_de_login_profesor.php"); ?>

<?php
$IDalumno = $_GET["IDalumno"] ;











	
	


		$consulta = "DELETE 
										FROM alumnos
										WHERE id = '{$IDalumno}'
										
										"
										;
										
										
		$A= mysqli_query($conexion, $consulta) ;
		
		header("Location: ver_alumnos.php");
		exit;
		
		
	
?>