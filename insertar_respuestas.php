<?php require_once("includes/connection_db.php"); ?>

<?php
/*CAPTURAMOS LOS DATOS ENVIADOS DESDE "responder_preguntas.php"*/
$id_titulo = $_POST["id_titulo"] ;



$id_alumno= $_POST["id_alumno"] ;


$cantidad_de_preguntas= $_POST["cantidad_de_preguntas"] ;

/*AHORA MEDIANTE ESTE BUCLE "FOR" INSERTAMOS A LA BD LAS RESPUESTAS INGRESADAS EN "responder_preguntas.php"*/
for($i=1; $i<=$cantidad_de_preguntas; $i++)
	{
		
		$preg= p.$i;
		$pas = $_POST[$preg] ;
		$texto= $pas;
		$id_pregunta= $_POST["Respuesta_nro_$i"] ;
		
		
		
		
		$sql = "INSERT INTO respuestas(Respuesta, id_evaluaciones_preguntas, id_evaluciones_titulos, id_alumnos) VALUES ('$texto', '$id_pregunta',  '$id_titulo', '$id_alumno')" ;
		
		$sql= mysql_query($sql) ;
 
		
		if($preg == "p1")
		{
			/*INSERTAMOS EN "id_evaluciones_titulos1" EL "$id_titulo" COMO CONSTANCIA DE QUE EL ALUMNO RENDIÓ ESE EXAMEN. ESTE DATO SERÁ UTILIZADO EN EL PHP "ver_alumnos.php"*/
			$ABC = "INSERT INTO respuestas(id_evaluciones_titulos1, id_alumnos) VALUES ('$id_titulo',  '$id_alumno')" ;
			$ABC= mysql_query($ABC) ;
		}

		
	}



/*POR ÚLTIMO, REDIRIGIMOS A LA PÁGINA "logout.php" PARA ROMPER LA SESIÓN Y QUE EL ALUMNO NO PUEDA ACCEDER A OTRA PARTE RESTRINGIDA DEL SITIO */
header("Location: logout.php");


















?>