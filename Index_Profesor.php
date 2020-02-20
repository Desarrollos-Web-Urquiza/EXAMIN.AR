


<!DOCTYPE html>


<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EXAMIN.AR</title>
    
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--ICONO DE LA PESTAÑA-->
    <link rel="icon" href="Logo.png">
    <!-- Custom styles for this template -->
    <link href="css/half-slider.css" rel="stylesheet">
    <?php require_once("includes/connection_db.php"); ?>
    <?php require_once("includes/verificacion_de_login_profesor.php"); ?>
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
            <li class="nav-item active">
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

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
       
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('profesor_icono.png')">
            <div class="carousel-caption d-none d-md-block">
            
            </div>
          </div>
         
				
				
				
		
			</div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <section class="py-5">
      <div class="container">
        <h1>¡BIENVENIDO A LA SECCIÓN DEL PROFESOR DE EXAMIN.AR!</h1>
		<br>
		<h2>Esta es la página de su cuenta premium.<h2>
        <H4>Recuerde que está accediendo a un módulo exclusivo para profesores destinado a la gestión de alumnos y procesamiento de evaluaciones. Esta página es de acceso restringido.<br><br>	



    <!-- Botón de Beneficios
<a class="btn btn-primary btn-lg" href="Beneficios.html">Beneficios de EXAMIN.AR</a> -->
	
	
	</H4>
      </div>
    </section>

  
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
