<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EXAMIN.AR - GENERAR EVALUACIÓN</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	
<!--ICONO DE LA PESTAÑA-->
    <link rel="icon" href="Logo.png">
	
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
            <li class="nav-item active">
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
	
	
	
	

		  
		  



<?php require_once("includes/verificacion_de_login_profesor.php"); ?>

<?php require_once("includes/connection_db.php"); ?>
<?php


$titulo = $_POST["titulo"] ;

$preguntas = $_POST["preguntas"] ;





?>

<html>

	<br>
	<br>
	<h1 align= center>INGRESE LAS PREGUNTAS</h1> </align><br>


	


</html>


<!--ETIQUETA "SECTION" ES UTILIZADA PARA ESCRIBIR CODIGO "HTML" EN "PHP"-->
<section id="form">
	

	<link rel="stylesheet" type="text/css" href="css/main.css">

	
	
	
	<!--FORMULARIO-->
	<form action="insertar_preguntas.php" class="contact_form" method="POST">
		<!--IMPRIME TITULO DE EVALUCACION EN PANTALLA-->
		<h3> <?php echo $titulo ; ?> </h3>
		
		
		<?php
		/*EL BUCLE "FOR" IMPRIME TANTOS "INPUTS" COMO SE HAYA INGRESADO EN LA PÁGINA ANTERIOR ("generar_evaluacion.php")*/
		for ($i=1; $i <= $preguntas ; $i++   ) { 		
		
		?>
		
		<br><br>	Pregunta <?php echo $i; ?><br><br>
			
				




				<div class="wrap-input100 validate-input" >
					<label class="label-input100" >
						
					</label>
					<input class="input100" type="text" placeholder="Coloque pregunta"  name="p<?php echo $i ; ?>"  > 
					<span class="focus-input100"></span>
				</div>
			

			<br><br>
			<hr size="5px" width="100%" align="center" color="#4272d7"/>





	
	
		
		<?php } ?>
		
		
		
		<br>
















		
		<!--PASAMOS COMO PARÁMETROS "OCULTOS" LOS VALORES "TITULO" Y "PREGUNTAS" A LA PÁGINA "insertar_preguntas.php" -->
		<input name="titulo" type="hidden" value="<?php echo $titulo ; ?>" >
		<input name="preguntas" type="hidden" value="<?php echo $preguntas ; ?>" >
	


	<!--BOTÓN DE SUBMIT-->
		
		


		
		 <h1 align= "right">
			<input class="btn btn-primary btn-lg" type="submit" value="Insertar" > </input></h1>




	</form>

	
<br>	
<br><br><br><br>



<style>


a
{
	
	text-decoration: none ;
}


</style>
		<script>/*NUEVO BOTÓN DE VOLVER A ATRÁS*/</script>
		


	

<!--BOTÓN DE VOLVER A ATRÁS 
<a href="generar_evaluacion.php"> <img src="wm_back3.PNG"> </a>
	-->
	
<br><br><br><br><br><br>
	
<br><br><br><br><br><br>
	
<br><br><br><br><br><br>
	
<br><br><br><br><br><br>
	
</section>













	<br>
	<br>
	<br>
	<br>
	<br>

	
	
	

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>





















</html>
