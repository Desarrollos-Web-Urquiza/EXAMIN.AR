<?php


/*VERIFICAMOS SI EL TIPO PASÓ POR EL LOGIN O INTENTÓ ENTRAR A ESTA PÁGINA COPIANDO EL URL*/

 session_start() ;

 if(isset($_SESSION["username"]) && $_SESSION["tipodeusuario"] == 0)
{
   echo "¡Bienvenido! Está logueado como " ;//Aviso de inicio de sesión
   echo $_SESSION["username"] ;

 
 }
 else
 {
	 /*SI EL TIPO NO LOGUEO, LO MANDAMOS AL "LOGIN"*/
	 header("Location: log in.php");
		
		exit();
	 
 }
	 
 
 

?>


<html>
<!--BOTÓN DE LOGOUT-->
<td><a href="logout.php">Cerrar Sesión</a></td>
</html>