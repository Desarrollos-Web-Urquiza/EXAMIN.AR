<?php require_once("includes/connection_db.php"); ?>
<?php require_once("includes/verificacion_de_login_profesor.php"); ?>

<?php 

$NombreyApellido = $_POST["NombreyApellido"] ;



$DNI = $_POST["DNI"] ;



$escuela_id = $_POST["escuela_id"] ;

$profesor_id = $_SESSION["usuario_id"] ;

$curso = $_POST["curso"] ;




	$consulta = "SELECT id
										FROM cursos
										WHERE Descripcion = '{$curso}'
										AND  Escuela_id= '{$escuela_id}'
										
										LIMIT 1
										"
										;
										
										
		$ADS= mysqli_query($conexion, $consulta) ;
		$BBV=mysqli_fetch_array($ADS) ;
		$id_curso = $BBV['id'] ;
		
		
		
		
		

$sql = "INSERT INTO alumnos(NombreyApellido, Profesor_id, Curso_id, Escuela_id, DNI) VALUES ('$NombreyApellido', '$profesor_id', '$id_curso', '$escuela_id', '$DNI'  )" ;

$sql = mysqli_query($conexion, $sql) ;




header("Location: ver_alumnos.php");

		
		
		
		



















?>