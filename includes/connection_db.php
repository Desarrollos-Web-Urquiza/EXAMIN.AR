<?php











require_once ("constants.php");
	




/*

	$conexion=mysql_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD);
	if (!$conexion)
	{
		die("No se conecto al servidor: ". mysql_error());
	}
	$db_seleccionada=mysql_select_db (DB_NAME,$conexion);
	if(!$db_seleccionada)
	{
	die("no se seleccionó la DB".mysql_error());
	}
	
	mysql_set_charset('utf8') ; //Acentos

*/

$conexion= new mysqli( DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME );
$conexion -> set_charset("utf8");

if($conexion->connect_errno){



	return "No conectado" ;	


} else {


	return "Conectado" ; 
 

}


















?>
