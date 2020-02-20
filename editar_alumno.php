

<html>
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EXAMIN.AR - EDITAR ALUMNO</title>

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

	
	
	
	

		  
	

<section id="form">


<?php


$ID_alumno= $_GET["IDalumno"] ;


		/*CON LA "ID" DEL ALUMNO, BUSCO EN LA TABLA "alumnos" EL NOMBRE Y APELLIDO DEL ALUMNO SELECCIONADO*/
		$consulta = "SELECT *
										FROM alumnos
										WHERE id = '{$ID_alumno}'
										LIMIT 1
										"
										;
										
										
		$A= mysql_query($consulta, $conexion) ;
		$B=mysql_fetch_array($A) ;
		$NombreyApellido = $B['NombreyApellido'] ;
	
	
	
	
	
	/*CON LA "ID" DEL ALUMNO, BUSCO EN LA TABLA "alumnos" EL DNI DEL ALUMNO SELECCIONADO*/
		$consulta = "SELECT *
										FROM alumnos
										WHERE id = '{$ID_alumno}'
										LIMIT 1
										"
										;
										
										
		$Aa= mysql_query($consulta, $conexion) ;
		$Bb=mysql_fetch_array($Aa) ;
		$DNI = $Bb['DNI'] ;
	



?>



	
<!-- TÍITULO-->
<h1 align= center>EDITAR ALUMNO - PASO 1</h1></align><br>
<h3 align= center>Especifique el nuevo nombre, apellido, DNI y escuela del alumno a editar</h3></align>






	









	<link rel="stylesheet" type="text/css" href="css/main.css">

			
			
			
	
<!--FORMULARIO-->
	<form action="editar_alumno2.php" class="contact_form" method="POST">



<!--PASO COMO PARAMETRO "OCULTO" EL ID DEL ALUMNO-->
<input name="ID_alumno" type="hidden" value="<?php echo $ID_alumno ; ?>" >














	
	<div class="container-contact100">
		
		  

		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
				 
				Nuevo nombre y apellido:
				</span>

				<div class="wrap-input100 validate-input" >
					<label class="label-input100" >
						
					</label>
					<input class="input100" type="text"  value="<?php echo $NombreyApellido ;?>" name="NombreyApellido" >
					<span class="focus-input100"></span>
				</div>








				

			<span class="contact100-form-title">
				 
				Nuevo DNI:
				</span>

				<div class="wrap-input100 validate-input" >
					<label class="label-input100" >
						
					</label>
					<input class="input100" type="text"  value="<?php echo $DNI ;?>" name="DNI" >
					<span class="focus-input100"></span>
				</div>








<form class="contact100-form validate-form">

			<span class="contact100-form-title">
		Asignar nueva escuela:
				<div class="wrap-input100 validate-input" >
						<label class="label-input100" >
							
						</label>




				
				<select  class="input100" name="escuela"><br><br>
				<?php 
/*MEDIANTE ESTE "while" CREO UN "SELECT" PARA QUE IMPRIMA EN UNA LISTA DESPLEGABLE CON EL LISTADO DE ESCUELAS*/
$sql= "SELECT Escuela FROM escuelas " ;

$sql= mysql_query($sql) ;
	
	while($row= mysql_fetch_array($sql))
	{
		
	
		
		echo '<option value=' . '"' . $row['Escuela'] . '"' . ">" ;
		 
		echo $row['Escuela']; 

		echo "</option>" ;
		
	}
	
	
	
?>
				</select>
				




<span class="focus-input100"></span>

					</select>

					<span class="focus-input100"></span>
			
				</div>


			
















			

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type="submit">
						SIGUIENTE
					</button>
				
				</div>
			</form>
		</div>
	</div>
		  
		 
		 
		  
		  
		  
		  
		  
		  
		  
		  
		  
        </div>
      </div>
    </div>






























	
	
	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	
	<script>/*NUEVO BOTÓN DE VOLVER A ATRÁS*/</script>
		<h1 align="left">
		<a href="ver_alumnos.php" class="btn btn-primary">Atrás</a>
		</h1>
	





	
	

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	




































