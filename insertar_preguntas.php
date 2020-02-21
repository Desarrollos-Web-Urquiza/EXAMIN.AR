<?php require_once("includes/connection_db.php"); ?>
<?php/*RECORDAMOS QUE ESTE PHP ES UN "ACTION" DEL FORMULARIO ANTERIOR EN "generar_preguntas.php", POR LO TANTO NO TIENE ESTILOS*/ ?>
<?php 

/*CAPTURAMOS LOS DATOS ENVIADOS DESDE "generar_preguntas.php"*/
$titulo = $_POST["titulo"] ;

$preguntas = $_POST["preguntas"] ;


/*CAPTURAMOS LA FECHA ACTUAL*/
$fecha_actual= date("Y-m-d") ;



/*INSERTAMOS EL TÍTULO DE NUESTRA EVALUACIÓN Y LA FECHA ACTUAL A NUESTRA BASE DE DATOS*/
$sql = "INSERT INTO evaluaciones_titulos(Titulo, Fecha) VALUES ('$titulo' ,'$fecha_actual')" ;

$sql = mysqli_query($conexion, $sql) ;




/*CAPTURAMOS LA "ID" DEL TÍTULO DE EVALUACIÓN QUE ACABAMOS DE INSERTAR EN LA BD*/
$sql= "SELECT id FROM evaluaciones_titulos ORDER BY Fecha" ;

$sql= mysqli_query($conexion, $sql) ;

	while($row= mysqli_fetch_array($sql))
	{
	
		$id = $row["id"];
	
	}
 
 
 
/*AHORA MEDIANTE ESTE BUCLE "FOR" INSERTAMOS A LA BD LAS PREGUNTAS INGRESADAS EN "generar_preguntas.php" CON EL RESPECTIVO "id" DEL TÍTULO DE EVALUACIÓN*/
for($i=1; $i<=$preguntas ; $i++)
	{
		
		$preg= p.$i;
		$pas = $_POST[$preg] ;
		$texto= $pas;
		
		$sql = "INSERT INTO evaluaciones_preguntas(Preguntas, id_evaluaciones_titulos) VALUES ('$texto', '$id')" ;
		
		$sql= mysqli_query($conexion, $sql) ;
 
 
	}
 
/*POR ÚLTIMO, REDIRIGIMOS A LA PÁGINA "generar_evaluacion.php"*/
header("Location: generar_evaluacion.php");
 

?>