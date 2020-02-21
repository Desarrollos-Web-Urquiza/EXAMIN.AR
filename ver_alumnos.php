



<!DOCTYPE html>

<html lang="en">


  <head>



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--ICONO DE LA PESTAÑA-->
    <link rel="icon" href="Logo.png">

    <title>EXAMIN.AR - MIS ALUMNOS</title>

    <!-- Bootstrap core CSS-->
    <link href="Boostrap3/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="Boostrap3/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="Boostrap3/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="Boostrap3/css/sb-admin.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--ICONO DE LA PESTAÑA-->
    <link rel="icon" href="Logo.png">
    <!-- Custom styles for this template -->
    <link href="css/half-slider.css" rel="stylesheet">

  <!--INVOCANDO bootstrap (solo la parte de los labels) -->
  <link rel="stylesheet" type="text/css" href="bootstrap2/css/bootstrap-label.css">
    

  </head>
  <?php require_once("includes/connection_db.php"); ?>
  <?php require_once("includes/verificacion_de_login_profesor.php"); ?>

  <body id="page-top">

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
    </nav><br><br><br><br>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="ver_alumnos.php">
           
            <span>Alumnos
            <?php 

/*IMPRIMO UN LISTADO SOLO DE LOS ALUMNOS DEL PROFESOR LOGUEADO. EXTRAIGO EL "ID" DEL ALUMNO QUE SE SELECCIONÓ EN PANTALLA GUARDANDOLO EN LA VARIABLE "$_GET["alumno"]"*/
$sql= "SELECT * FROM alumnos WHERE Profesor_id= '{$_SESSION["id"]}' " ;

$sql= mysqli_query($conexion, $sql) ;
  
  while($row= mysqli_fetch_array($sql))
  {
    
  
    
     
    echo "<li>" ;
    ?>
    
    <a   " href="ver_alumnos.php?alumno=<?php echo $row['id'];?>"><?php ; echo  $row['NombreyApellido']; ?></a>
    <?php
    echo "</li>" ;
    echo "<br> <br> <br> <br>" ;
    
  }
  
?>  
</span>

      </a>
       </li>
        
     </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          


          
<?php

/*CON LA "ID" DEL ALUMNO, BUSCO EN LA TABLA "alumnos" EL NOMBRE Y APELLIDO DEL ALUMNO SELECCIONADO*/

if(isset($_GET["alumno"]))
  {
    
  


    $consulta = "SELECT *
                    FROM alumnos
                    WHERE id = '{$_GET["alumno"]}'
                    LIMIT 1
                    "
                    ;
                    
                    
    $A= mysqli_query($conexion, $consulta ) ;
    $B=mysqli_fetch_array($A) ;
    $C = $B['NombreyApellido'] ;
  }
  
  
  
/*CON LA "ID" DEL ALUMNO, BUSCO EN LA TABLA "alumnos" EL DNI DEL ALUMNO SELECCIONADO*/  
if(isset($_GET["alumno"]))
  {
    
  


    $consulta = "SELECT *
                    FROM alumnos
                    WHERE id = '{$_GET["alumno"]}'
                    LIMIT 1
                    "
                    ;
                    
                    
    $Aa= mysqli_query($conexion, $consulta) ;
    $Bb=mysqli_fetch_array($Aa) ;
    $Cc = $Bb['DNI'] ;
  }
  
  
  
    
/*BUSCO curso_id*/
if(isset($_GET["alumno"]))
  {
    
  


    $consulta = "SELECT *
                    FROM alumnos
                    WHERE id = '{$_GET["alumno"]}'
                    LIMIT 1
                    "
                    ;
                    
                    
    $Aaa= mysqli_query($conexion, $consulta) ;
    $Bbb=mysqli_fetch_array($Aaa) ;
    $Ccc = $Bbb['Curso_id'] ;
  }
  /*BUSCO DESCRIPCION DEL CURSO CON EL ID*/
  if(isset($_GET["alumno"]))
  {
    
  


    $consulta = "SELECT *
                    FROM cursos
                    WHERE id = '{$Ccc}'
                    LIMIT 1
                    "
                    ;
                    
                    
    $Aaaa= mysqli_query($conexion, $consulta) ;
    $Bbbb=mysqli_fetch_array($Aaaa) ;
    $Cccc = $Bbbb['Descripcion'] ;
  }

  /*BUSCO ESCUELA_ID*/
if(isset($_GET["alumno"]))
  {
    
  


    $consulta = "SELECT *
                    FROM alumnos
                    WHERE id = '{$_GET["alumno"]}'
                    LIMIT 1
                    "
                    ;
                    
                    
    $ADS= mysqli_query($conexion, $consulta) ;
    $BBV=mysqli_fetch_array($ADS) ;
    $CBA = $BBV['Escuela_id'] ;
  }
  
  /*BUSCO NOMBRE DE LA ESCUELA*/
  if(isset($_GET["alumno"]))
  {
    
  


    $consulta = "SELECT *
                    FROM escuelas
                    WHERE id = '{$CBA}'
                    LIMIT 1
                    "
                    ;
                    
                    
    $UNO= mysqli_query($conexion, $consulta) ;
    $DOS=mysqli_fetch_array($UNO) ;
    $TRES = $DOS['Escuela'] ;
  }
  
  
  

  
  
    
  
?>


<h1 align="center">
<?php
/*IMPRIMO EL NOMBRE DEL ALUMNO EN PANTALLA O, SI TODAVÍA NO SE SELECCIONÓ NINGUNO, PIDO QUE SE SELECCIONE*/
if(isset($C))
  {
    echo $C ;
    
    
  
  }
   else
  {
    ?> <ol> <h3 align="center">


   <?php echo "SELECCIONE UN ALUMNO/A" ;?></ol></h3><?php
  }
?></h1>




<h3 align="center">
  
<?php
if(isset($C))
  {
    echo "DNI: " ;
    echo $Cc ;
    ?><br><?php
    echo "Escuela: " ;
    echo $TRES ;
    ?><br><?php
    echo "Curso: " ;
    echo $Cccc ;
    }?>




</h3>




<br>    
<?php

/*AHORA VERIFICO SI EL ALUMNO REALIZÓ ALGUNA EVALUACIÓN Y DE SER ASÍ IMPRIMO EL TÍTULO DE DICHA EVALUACIÓN EN PANTALLA. CASO CONTRARIO, PONGO "-NINGUNA-".*/
if(isset($_GET["alumno"]))
{

  echo "Evaluaciones realizadas por este alumno/a: " ;
  $consulta = "SELECT *
                    FROM respuestas
                    WHERE id_alumnos = '{$_GET["alumno"]}'
                    
                    "
                    ;
                    
                    
  $A= mysqli_query($conexion, $consulta) ;

  
  $g=0 ;//contador
  $f=1 ;//sumador
  $C= array() ;//Hago un array al que le pondremos los "id" de cada examen rendido por el alumno seleccionado.
  while($B=mysqli_fetch_array($A))
  {
    
    if($B['id_evaluciones_titulos1'] == 0)
    {
      
       $fdgfdgsd= 0 ;//Asginación sin sentido utilizada solo para no dejar en blanco esta sección.
    
    }
    else
    { 
    
      $C[$g] = $B['id_evaluciones_titulos1'] ;
      $g=$g+$f;//Sumamos al contador
    }
  }
  
    $D= array() ;
  for($i= 0 ; $i < $g/*En esta variable me quedó la cantidad de materias rendidas por el alumno seleccionado*/ ; $i++)
  {
    $consulta = "SELECT *
                    FROM evaluaciones_titulos
                    WHERE id= '{$C[$i]}'
                    LIMIT 1
                    "
                    ;
                    
    $D[$i]=$C[$i] ;   //ID almacenado           
    $A= mysqli_query($conexion, $consulta) ;
    $B=mysqli_fetch_array($A) ;
    $C[$i] = $B['Titulo'] ;//Se reemplaza ID por Título de examen en variable "C"
    
    ?>
    <a class="label label-warning" href="ver_evaluacion.php?IDexamen=<?php echo $D[$i] ; ?>&IDalumno=<?php echo $_GET["alumno"] ;  ?>"><?php echo $C[$i] ;?></a><!--Imprimimos título en pantalla y pasamos la ID del examen y del alumno como parametros a "ver_evaluacion.php". -->
    
    
        
    
    <?php 
    
    
    echo ",  " ;
  
    
  }
  
  /*SI NO SE ENCONTRARON EXAMENES RENDIDOS, PONEMOS "-Ninguna-"*/
  if(!isset($C[0]))
  {
    echo "-Ninguna-" ;
  }
} 
 
 
 

?>

<style>


a{
  
  text-decoration: none ;
  
}


</style>




<br><br><br><br><br><br>
<?php if(isset($C))
{
  
  ?><h2>¿Desea eliminar este alumno? <a class="btn btn-primary" href="confirmacion_de_eliminacion.php?IDalumno=<?php echo $_GET["alumno"] ;?>">Eliminar</a></h2>

  <h2>¿Editar este alumno? <a class="btn btn-primary" href="editar_alumno.php?IDalumno=<?php echo $_GET["alumno"] ;?>">Editar</a></h2><?php
  
  
  
  }?>
<?php
if(isset($_GET["alumno"]))
  {
    ?><br><br><br><br><br><br><br><br>
Nota: Click sobre la evaluación para ver las respuestas del alumno.
<?php 

}

?>
         

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © EXAMIN.AR 2016-2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="Boostrap3/vendor/jquery/jquery.min.js"></script>
    <script src="Boostrap3/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="Boostrap3/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="Boostrap3/vendor/chart.js/Chart.min.js"></script>
    <script src="Boostrap3/vendor/datatables/jquery.dataTables.js"></script>
    <script src="Boostrap3/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="Boostrap3/s/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="Boostrap3/js/demo/datatables-demo.js"></script>
    <script src="Boostrap3/js/demo/chart-area-demo.js"></script>

  </body>
   <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</html>


