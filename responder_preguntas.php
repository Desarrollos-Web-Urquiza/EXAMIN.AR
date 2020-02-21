<?php require_once("includes/connection_db.php"); ?>
<?php require_once("includes/verificacion_de_login_profesor.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EXAMIN.AR - EVALUACIÓN EN CURSO</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!--ICONO DE LA PESTAÑA-->
    <link rel="icon" href="Logo.png">

	
  </head>

  <body>

  	<h1 align="center">EVALUACIÓN EN CURSO</h1>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          
		  <br>
	
	
	
	

		  
		  
		 

	<link rel="stylesheet" type="text/css" href="css/main.css">
<?php require_once("includes/connection_db.php"); ?>

<?php
	
	/*RECIBO LOS PARÁMETROS DEL ARCHIVO "buscar_evaluacion.php"*/
	
	$titulo = $_POST["evaluacion"] ;
	
	$alumno = $_POST["Alumno"] ;
	
	$DNI= $_POST["DNI"] ;
	
	
	
?>
	




<section id="form">
 

 <!--FORMULARIO-->
	<form action="insertar_respuestas.php" class="contact_form" method="POST">
 


	
	
	
	
	
	
	 	<h3> Este examen es de la materia: "<?php echo $titulo ; ?>"</h3>

		
		<h3> El alumno que está rindiendo este examen es: "<?php echo $alumno ; ?>" </h3>

	
	<?php
	/*EXTRAEMOS LA "id" DEL ALUMNO SELECCIONADO*/
	$sql= "SELECT id FROM alumnos
	
												WHERE NombreyApellido = '{$alumno}'
												AND DNI= '{$DNI}'"  
												
												;
											

	$sql= mysqli_query($conexion, $sql) ;

	while($row= mysqli_fetch_array($sql))
	{
	
		$id_alumno = $row["id"];

	
	
	
	}
	?>
	
	
	<?php
	$consulta = "SELECT *
										FROM alumnos
										WHERE id = '{$id_alumno}'
										LIMIT 1
										"
										;
										
										
		$Aa= mysqli_query($conexion, $consulta) ;
		$Bb=mysqli_fetch_array($Aa) ;
		$Cc = $Bb['DNI'] ;
	
	?>
	
	
	<?php
	if(empty($Cc))
	{
		
		header("Location: buscar_evaluacion2.php");
		
		exit();
    }
	?>
	
	
	<h3> El DNI del alumno que está rindiendo este examen es: "<?php echo $Cc ; ?>" </h3><br><br>
	
	
	<?php
	
	
	
	
	/*EXTRAEMOS LA "id" DEL EXAMEN SELECCIONADO*/
	$sql= "SELECT id FROM evaluaciones_titulos 
	
												WHERE Titulo = '{$titulo}'"  ;

	$sql= mysqli_query($conexion, $sql) ;

	while($row= mysqli_fetch_array($sql))
	{
	
		$id_titulo = $row["id"];

	
	}
	
	
	
	
	
	/*CONTAMOS CUÁNTAS PREGUNTAS HAY EN EL EXAMEN SELECCIONADO. EL NÚMERO EN CUESTIÓN SERÁ UTILIZADO EN EL BUCLE DE MÁS ABAJO*/
	$sql= "SELECT Preguntas FROM evaluaciones_preguntas 
	
												WHERE id_evaluaciones_titulos = '{$id_titulo}'"  ;

	$sql= mysqli_query($conexion, $sql) ;
	
	$contadordepreguntas= 0 ;
	while($row= mysqli_fetch_array($sql))
	{
	
		$preguntaz = $row["Preguntas"];
		
		$iniciadordelcontador= 1 ;
		$contadordepreguntas = $contadordepreguntas + $iniciadordelcontador ;

	
	}
	
	/*echo $contadordepreguntas ;*/

	
	
	?>
	<!--PASO COMO PARAMETRO LOS "id" DE LA EVALUCION Y EL ALUMNO-->
	<input name="id_titulo" type="hidden" value="<?php echo $id_titulo ; ?>" >
	<input name="id_alumno" type="hidden" value="<?php echo $id_alumno ; ?>" >
	<input name="cantidad_de_preguntas" type="hidden" value="<?php echo $contadordepreguntas ; ?>" >
	
	
	<!--REALIZO UN "ARRAY" CON LAS PREGUNTAS DEL EXAMEN SELECCIONADO QUE SE USARÁ EN EL SIGUIENTE BUCLE-->
	<?php	
	$sql= "SELECT Preguntas FROM evaluaciones_preguntas 
	
												WHERE id_evaluaciones_titulos = '{$id_titulo}'"  ;

	$sql= mysqli_query($conexion, $sql) ;
	$array= array() ;
	$contador=1 ;
	while($row= mysqli_fetch_array($sql))
	{
	
		$Pregunta = $row["Preguntas"];
		$array[$contador]= $Pregunta ;
		$iniciadordelcontador= 1 ;
		$contador = $contador + $iniciadordelcontador ;
	
	}

	?>
	
	
	
	
	<!--REALIZO UN BUCLE PARA IMPRIMIR LAS PREGUNTAS DEL ARRAY Y COLACARLES UN "TEXTAREA" ABAJO PARA QUE EL ALUMNO PUEDA RESPONDER LA PREGUNTA-->
	<?php
		
		for ($i=1; $i <= $contadordepreguntas ; $i++   ) { 		
		
		?>
		
<form class="contact100-form validate-form">

			<span class="contact100-form-title">
		
		<?php echo $i; echo "." ; echo $array[$i] ;?> 
			<br>






				<div class="wrap-input100 validate-input" >
						<label class="label-input100" >
							
						</label>





			<textarea  class="input100" name="p<?php echo $i ; ?>"  rows="25" cols="65">  </textarea>



<span class="focus-input100"></span>

					</select>

					<span class="focus-input100"></span>
			
				</div>






		
		
		
		
		<?php
		
		
		/*EXTRAEMOS LA "id" DE LA PREGUNTA*/
	$sql= "SELECT id FROM evaluaciones_preguntas
	
												WHERE Preguntas = '{$array[$i]}'"  ;

	$sql= mysqli_query($conexion, $sql) ;

		while($row= mysqli_fetch_array($sql))
		{
	
			$id_pregunta= $row["id"];

	
	
	
		}
	
		
		
		
		?>
		<!--PASO COMO PARAMETRO EL "id" DE LA PREGUNTA-->
		<input name="Respuesta_nro_<?php echo $i ; ?>" type="hidden" value="<?php echo $id_pregunta ; ?>" >
		
		
		
		<?php } ?>
		
	
	
	
	
	
	
	
	
	
	
	
	
	
	<!--BOTÓN DE SUBMIT-->
		<input class="btn btn-primary" type="submit" value="Terminar examen"> </input>
		<br><br>
	
	
	</section>
	
	<?php 
	session_destroy() ; ?>

	
	
	
	
	
	
	
	
	
	
	
	

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
