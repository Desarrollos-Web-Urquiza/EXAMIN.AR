<?php require_once("includes/connection_db.php"); ?>
<?php require_once("includes/verificacion_de_login_profesor.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EXAMIN.AR - BUSCAR EVALUACIÓN</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--ICONO DE LA PESTAÑA-->
    <link rel="icon" href="Logo.png">
	


<script>alert('No existe ningún alumno que posea ese nombre y ese DNI. Por favor, asegúrese de que el nombre del alumno y el DNI seleccionados coincidan.  ') </script>
	
  </head>

  <body>

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
            <li class="nav-item">
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
              <a class="nav-link active" href="buscar_evaluacion.php">Rendir evaluación</a>
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
	
	
	
	

		  
		  
		 

	<link rel="stylesheet" type="text/css" href="css/main.css">

			<h1 class="mt-5">	SELECCIONE TÍTULO DE EVALUCIÓN Y ALUMNO QUE LA REALIZA	</h1>
			
			<br>
		  <!--IMAGEN del telefono y el sobre -->
         <img src="evaluacion2.png" alt="SYMBOL-MAIL"> 
		  
	
<!--FORMULARIO-->
	<form action="responder_preguntas.php" class="contact_form" method="POST">

















	<div class="container-contact100">
		
		  

				<div class="wrap-contact100">
				<form class="contact100-form validate-form">
				<span class="contact100-form-title">
				Seleccione evaluación:
				<div class="wrap-input100 validate-input" >
					<label class="label-input100" >
						
					</label>
				<select  class="input100" name="evaluacion">

				<?php 
				/*MEDIANTE ESTE "while" CREO UN "SELECT" PARA QUE IMPRIMA EN UNA LISTA DESPLEGABLE EL LISTADO DE EVALUCIONES DISPONIBLES PARA RENDIR*/
				$sql= "SELECT Titulo FROM evaluaciones_titulos " ;

				$sql= mysqli_query($conexion, $sql) ;
					
					while($row= mysqli_fetch_array($sql))
					{
						
					
						
						echo '<option value=' . '"' . $row['Titulo'] . '"' . ">" ;
						 
						echo $row['Titulo']; 

						echo "</option>" ;
						
					}
				?>
				</select>
				<span class="focus-input100"></span>









				</div>

			
			<form class="contact100-form validate-form">

			<span class="contact100-form-title">
				Seleccione el alumno que la realiza:
				<div class="wrap-input100 validate-input" >
						<label class="label-input100" >
							
						</label>
					
					<select class="input100"  name="Alumno">
					<?php 

					$sql= "SELECT NombreyApellido FROM alumnos WHERE Profesor_id= '{$_SESSION["id"]}'  " ;

					$sql= mysqli_query($conexion, $sql) ;
						
						while($row= mysqli_fetch_array($sql))
						{
							
						
							
							echo '<option value='. '"' . $row['NombreyApellido'] . '"' . ">" ;
							
							echo $row['NombreyApellido']; 

							echo "</option>" ;
							
						}
						
						/*while($row= mysql_fetch_array($sql))
						{
							echo '<option value="">' ;
							echo $row['NombreyApellido'];  
						}*/
					?>

					<span class="focus-input100"></span>

					</select>

					<span class="focus-input100"></span>
			
				</div>







<form class="contact100-form validate-form">

			<span class="contact100-form-title">
		Elija el DNI correspondiente del alumno seleccionado en la lista anterior:
				<div class="wrap-input100 validate-input" >
						<label class="label-input100" >
							
						</label>




				
				<select  class="input100" name="DNI"><br><br>
				<?php 

				$sql= "SELECT * FROM alumnos WHERE Profesor_id= '{$_SESSION["id"]}'  " ;

				$sql= mysqli_query($conexion, $sql) ;
					
					while($row= mysqli_fetch_array($sql))
					{
						
					
						
						echo '<option value='. '"' . $row['DNI'] . '"' . ">" ;
						
						echo $row['DNI']; 

						echo "</option>" ;
						
					}
					
					/*while($row= mysql_fetch_array($sql))
					{
						echo '<option value="">' ;
						echo $row['NombreyApellido'];  
					}*/
				?>
				</select>
				




<span class="focus-input100"></span>

					</select>

					<span class="focus-input100"></span>
			
				</div>


			
















			

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type="submit">
						Hacer evaluación
					</button>
				
				</div>
			</form>
		</div>
	</div>
		  
		 
		 
		  
		  
		  
		  
		  
		  
		  
		  
		  
        </div>
      </div>
    </div>
















	<br>
	<br>
	<br>
	<br>
	<br>

	
	
	</form>
	
	
	
	<!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; EXAMIN.AR 2016-2018</p>
      </div>
      <!-- /.container -->
    </footer>
	
	
	

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
