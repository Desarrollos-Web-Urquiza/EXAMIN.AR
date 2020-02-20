<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EXAMIN.AR - VER EVALUACIÓN</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!--ICONO DE LA PESTAÑA-->
    <link rel="icon" href="Logo.png">

	
  </head>

  <?php require_once("includes/connection_db.php"); ?>
<?php require_once("includes/verificacion_de_login_profesor.php"); ?>




  <body>

	
<br><br><br><br><br>

   <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html">EXAMIN.AR</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="Index_Profesor.php">Inicio
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="ver_alumnos.php">Mis alumnos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Crear
              </a>
             <div class ="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="crear_alumno.php">Crear alumno nuevo</a>
                <a class="dropdown-item" href="crear_curso.php">Crear curso nuevo</a>
                <a class="dropdown-item" href="crear_escuela.php">Crear escuela nueva</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="generar_evaluacion.php">Generar evalución</a>
            </li> <li class="nav-item">
              <a class="nav-link" href="buscar_evaluacion.php">Rendir evaluación</a>
            </li> 
			<li class="nav-item">
              <a class="nav-link" href="Login.html"> Cambiar de usuario

	





<!--BOTÓN DE LOGOUT-->


<td><a class="btn btn-danger" href="logout.php">Cerrar Sesión</a></td>

 </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	<br>
	<br>


    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          
		  <br>
	
	
	
	

		  
		  
		 
	<?php
	
	/*EXTRAEMOS LOS "IDs" DEL EXAMEN Y DEL ALUMNO*/
	$IDexamen= $_GET["IDexamen"] ;
	
	$IDalumno= $_GET["IDalumno"] ;
	
	
	
	
	
	/*BUSCAMOS EN LA BD EL  NOMBRE DEL EXAMEN Y LO IMPRIMIMOS EN PANTALLA*/
	$consulta = "SELECT *
										FROM evaluaciones_titulos
										WHERE id= '{$IDexamen}'
										LIMIT 1
										"
										;
										
							
		$A= mysqli_query($conexion, $consulta ) ;
		$B=mysqli_fetch_array($A) ;
		$C = $B['Titulo'] ;

	
	?>
		

<h1 align="center">
<?php

		echo "Evaluación de: " ;
		echo $C ;


?></h1>
	
	
	
	
	
	
<?php
	
	
	
	
	
	
	
	
	
	
	
	
	/*BUSCAMOS EN LA BD EL  NOMBRE Y APELLIDO DEL ALUMNO Y LOS IMPRIMIMOS EN PANTALLA*/
		$consulta = "SELECT *
										FROM alumnos
										WHERE id = '{$IDalumno}'
										LIMIT 1
										"
										;
										
										
		$A= mysqli_query($conexion, $consulta) ;
		$B=mysqli_fetch_array($A) ;
		$C = $B['NombreyApellido'] ;
?>	
	
	
	
	

<h2 align="center">
<?php

		echo "Realizada por el alumno/a: " ;
		echo $C ;


?></h2>











<?php

/*CREAMOS UN ARRAY CON LAS "PREGUNTAS" DEL EXAMEN*/
	$consulta = "SELECT *
										FROM evaluaciones_preguntas
										WHERE id_evaluaciones_titulos = '{$IDexamen}'
										
										"
										;
										
							
		$A= mysqli_query($conexion, $consulta) ;
		
		
		
		$D= array() ;
		
		$g= 0 ;//Contador
		$f= 1 ;
		while($B=mysqli_fetch_array($A)) 
		{
		
		
			$D[$g] = $B['Preguntas'] ;
	
			$g= $g+$f ;
		
		
		}
		
	
		
		
		
		
		
		/* AHORA CREAMOS UN ARRAY CON LAS "RESPUESTAS" DEL EXAMEN*/
		$consulta = "SELECT *
										FROM respuestas
										WHERE id_alumnos = '{$IDalumno}'
										AND id_evaluciones_titulos= '{$IDexamen}'
										
										"
										;
										
							
		$A= mysqli_query($conexion, $consulta) ;
		
		
		
		$E= array() ;
		
		$g= 0 ;//Contador
		$f= 1 ;
		
		while($Y=mysqli_fetch_array($A)) 
		{
		
		
			$E[$g] = $Y['Respuesta'] ;
	
			$g= $g+$f ;
		
		
		}
		
		
		
		
		$nro= 1 ;
		$sumador= 1 ;
		for($i=0 ; $i < $g ; $i++)
		{
		
			echo "Consigna " ;
			echo $nro ;
			echo "<br>" ;
			echo $D[$i] ;
			
			echo "<br><br><br><br>" ;
			
			echo "Respuesta del alumno:  " ;
			echo $E[$i] ;
			
			echo "<br><br><br><br>" ;
		
		
		    $nro= $nro + $sumador ;
		
		}
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	
	?>



	<script>/*NUEVO BOTÓN DE VOLVER A ATRÁS*/</script>
		<h1 align="left">
		<a href="ver_alumnos.php" class="btn btn-primary">Atrás</a>
		</h1>
	





	
	

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

	
	
	
	
	
	
	
	
	
	
	
	
	
	