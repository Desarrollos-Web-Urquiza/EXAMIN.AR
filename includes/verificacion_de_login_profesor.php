<?php


/*VERIFICAMOS SI EL TIPO PASÓ POR EL LOGIN O INTENTÓ ENTRAR A ESTA PÁGINA COPIANDO EL URL*/

 session_start() ;
?>
 <html>
 
	
	
	<style>
	
		a 
		{  
			
				text-decoration: none ;
		
		}
	
	</style>
	
	
	<?php
 if(isset($_SESSION["username"]) && $_SESSION["tipodeusuario"] == 1)
{
   
   ?> 

<?php 
 }
 else
 {
	 /*SI EL TIPO NO LOGUEO, LO MANDAMOS AL "LOGIN"*/
	 header("Location: Login.html");
		
		exit();
	 
 }
	 
 
 

?>



</html>

<html>




	
	<!--INVOCANDO bootstrap (solo la parte de los botones) -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-boton.css">
	













</html>
