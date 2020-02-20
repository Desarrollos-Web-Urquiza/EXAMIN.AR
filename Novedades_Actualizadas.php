




<html lang="en">



  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EXAMIN.AR - NOVEDADES</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!--ICONO DE LA PESTAÑA-->
    <link rel="icon" href="Logo.png">

  </head>




  		<!--CONECCIÓN A LA BASE DE DATOS-->
		<?php require_once("includes/connection_db.php"); ?>





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
              <a class="nav-link" href="index.html">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Contacto.html">Contacto</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="Novedades_Actualizadas.php">Novedades</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="Beneficios.html">Beneficios</a>
            </li> 
			<li class="nav-item">
              <a class="nav-link" href="Login.html">Iniciar Sesión</a>
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
	
	
	
	

		  
		  
		  <h1 class="mt-5">NOVEDADES</h1>
		  
		  <br>
		  <br>
         <?php
         
		 
					 
					 header("Content-Type: text/html;charset=utf-8");//Acentos

			if(isset($_POST["Novedades"]))
			{
				$texto= $_POST["Novedades"] ;

				/*ACTUALIZAMOS LAS NOVEDADES INGRESADAS EN EL FORMULARIO*/
				$consulta1 = "UPDATE `novedades` SET `Novedad a agregar`='{$texto}' WHERE 1  " ;
													
													
				mysqli_query( $conexion, $consulta1);
			}



			/*IMPRIME NOVEDADES EN PANTALLA*/
			$consulta = "SELECT *
													FROM novedades
													
													LIMIT 1
													"
													;
					
			$A= mysqli_query($conexion, $consulta) ;
			$B=mysqli_fetch_array($A) ;
			echo $B['Novedad a agregar'] ;

			


		 
		 
		 
		 
		 
		 ?>
			
		
			
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
        </div>
      </div>
    </div>




	<br>
	<br>
	<br>
	<br>


	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
	
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

