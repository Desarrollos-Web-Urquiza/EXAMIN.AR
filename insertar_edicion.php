<?php require_once("includes/connection_db.php"); ?>
<?php require_once("includes/verificacion_de_login_profesor.php"); ?>

<?php 

$ID_alumno = $_POST["ID_alumno"] ;

$NombreyApellido = $_POST["NombreyApellido"] ;



$DNI = $_POST["DNI"] ;



$escuela_id = $_POST["escuela_id"] ;

$curso = $_POST["curso"] ;


echo $escuela_id ; 


	$consulta = "SELECT id
										FROM cursos
										WHERE Descripcion = '{$curso}'
										AND  Escuela_id= '{$escuela_id}'
										
										LIMIT 1
										" ;
										
										
		$ADS= mysql_query($consulta, $conexion) ;
		$BBV=mysql_fetch_array($ADS) ;
		$id_curso = $BBV['id'] ;
		
		
		
		
		/*PROBLEMAS CON EL "Curso_id". ARREGLAR*/

$sql = "UPDATE alumnos SET
							NombreyApellido= '{$NombreyApellido}',
							Curso_id= '{$id_curso}',
							Escuela_id= '{$escuela_id}',
							DNI='{$DNI}'
							
							
							WHERE id = {$ID_alumno}";
				

 
$sql = mysql_query($sql) ;




header("Location: ver_alumnos.php");

		
		
		
		



















?>