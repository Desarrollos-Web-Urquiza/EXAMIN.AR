<?php require_once("includes/connection_db.php"); ?>
<?php

header("Content-Type: text/html;charset=utf-8");//Acentos






$usuario= $_GET["user"] ;
$contraseña= $_GET["password"] ;









$consulta = "SELECT *
										FROM users
										WHERE usuario = '{$usuario}'
										AND Contrasenia = '{$contraseña}'
										LIMIT 1
										"
										;
										
										
	$A= mysqli_query($conexion, $consulta ) ;
	$B=mysqli_fetch_array($A) ;	
	$C = $B['id'] ;
	if(isset($C))
	{
		session_start() ;
		$_SESSION["usuario_id"] = $B["id"];
		$_SESSION["username"] = $B["Usuario"];
		$_SESSION["tipodeusuario"] = $B["Tipo_de_Usuario"];
		$_SESSION["id"] = $B["id"];
		/*if($_SESSION["tipodeusuario"] == 0)//Este if examina si el usuario es "Admin" o "Profesor".
		{		
			header("Location: Index_Usuario.php");
		
			exit();
		}
		else
		{
			header("Location: Index_Profesor.php");
			exit();
		}*/
		

			switch ($_SESSION["tipodeusuario"]) {
			    case 0:
			        header("Location: Index_Usuario.php");
					
						exit();
						
			    case 1:
			        header("Location: Index_Profesor.php");
						exit();
				 default:
			        $error= "Los datos ingresados son incorrectos. Verifique que su nombre de usuario y contraseña estén bien escritos." ; 
		}


	}
	else
	{
		
		
		$error= "Los datos ingresados son incorrectos. Verifique que su nombre de usuario y contraseña estén bien escritos." ; 
	}
	
	
	
	
	
	
	
	
	
?>

<section>



<!--INVOCANDO bootstrap-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		

		<style>
		.margin
		{
			padding:50px ;
			margin: 500px ;
		}
		</style>
		
		
		<div class="span3"   class="margin">
			<div class="alert alert-error">

				<h4>ERROR</h4>
					
					<?php echo $error ; ?>
			
			</div>
		</div>
		







</section>













