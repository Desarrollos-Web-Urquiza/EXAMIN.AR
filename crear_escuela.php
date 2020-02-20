





	
	
	
	
	
	
	
	
	
	
	
	
	<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EXAMIN.AR - CREAR ESCUELA</title>

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
            <li class="nav-item">
              <a class="nav-link" href="ver_alumnos.php">Mis alumnos</a>
            </li>
            <li class="nav-item dropdown" >
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Crear
              </a>
             <div class ="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio" >
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






	
<!-- TÍITULO-->
<h1 align= center>CREAR ESCUELA</h1></align><br>
<h3 align= center>Coloque el nombre de la escuela que desea crear</h3></align>






	









	<link rel="stylesheet" type="text/css" href="css/main.css">

			
			
			
	
<!--FORMULARIO-->
	
<form action="insertar_escuela.php"  name="frmEscuela" method="POST">















	
	<div class="container-contact100">
		
		  

		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
				 
				Nombre de la escuela:
				</span>

				<div class="wrap-input100 validate-input" >
					<label class="label-input100" >
						
					</label>
					<input class="input100" type="text"   name="escuela" >
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






























	
	
	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		


	
	

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	




































