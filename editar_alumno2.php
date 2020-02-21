




	
	
	
	
	
	
	<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EXAMIN.AR - EDITAR ALUMNO PASO 2</title>

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


<form action="insertar_edicion.php"  name="frmAlumno2" method="POST">

	
<!-- TÍITULO-->
<h1 align= center>EDITAR ALUMNO - PASO 2</h1></align><br>
<h3 align= center>Ahora especifique el nuevo curso al que pertenece el alumno a editar</h3></align>






	









	<link rel="stylesheet" type="text/css" href="css/main.css">

			
			
			
	
<!--FORMULARIO-->
	<form action="insertar_edicion.php" class="contact_form" method="POST">


	


<?php

$NombreyApellido = $_POST["NombreyApellido"] ;



$DNI = $_POST["DNI"] ;

$escuela = $_POST["escuela"] ;


$ID_alumno = $_POST["ID_alumno"] ;




		/*BUSCAMOS id DE LA ESCUELA SELECCIONADA*/	
		$consulta = "SELECT id
										FROM escuelas
										WHERE Escuela = '{$escuela}'
										LIMIT 1
										"
										;
										
										
		$ADS= mysqli_query($conexion, $consulta) ;
		$BBV=mysqli_fetch_array($ADS) ;
		$id_escuela = $BBV['id'] ;
  
		
		
		
		
		
	?>
	
	<!--PASO COMO PARAMETROS "OCULTOS" EL nombreyapellido Y SU id, EL dni Y LA ESCUELA-->
<input name="NombreyApellido" type="hidden" value="<?php echo $NombreyApellido ; ?>" >
<input name="DNI" type="hidden" value="<?php echo $DNI ; ?>" >
<input name="escuela_id" type="hidden" value="<?php echo $id_escuela ; ?>" >
<input name="ID_alumno" type="hidden" value="<?php echo $ID_alumno ; ?>" >







<h2 align= center>Escuela seleccionada: "<?php echo $escuela ; ?>"</h2></align>




	
	<div class="container-contact100">
		
		



		<form class="contact100-form validate-form">
			<div class="wrap-contact100">
				<span class="contact100-form-title">
				Asignar nuevo curso:
				<div class="wrap-input100 validate-input" >
						<label class="label-input100" >
							
						</label>




				
				<select  class="input100" name="curso"><br><br>
				<?php
	
		/*MEDIANTE ESTE "while" CREO UN "SELECT" PARA QUE IMPRIMA EN UNA LISTA DESPLEGABLE EL LISTADO DE CURSOS*/
$sql= "SELECT * FROM cursos WHERE Escuela_id= $id_escuela " ;

$sql= mysqli_query($conexion, $sql) ;
	
	while($row= mysqli_fetch_array($sql))
	{
		
	
		
		echo '<option value=' . '"' . $row['Descripcion'] . '"' . ">" ;
		 
		echo $row['Descripcion']; 

		echo "</option>" ;
		
	}
				

?>


<span class="focus-input100"></span>

					</select>

					<span class="focus-input100"></span>
			
				</div>


			
















			

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type="submit">
						EDITAR
					</button>
				
				</div>
					</div>
			</form>
		</div>
	</div>
		  
		 
		 
		  
		  
		  
		  
		  
		  
		  
		  
		  
        </div>
      </div>
    </div>






























	
	
	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		</form>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	
	

	<script>/*NUEVO BOTÓN DE VOLVER A ATRÁS*/</script>
		<h1 align="left">
		<a href="editar_alumno.php" class="btn btn-primary">Atrás</a>
		</h1>
	
	

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	




































