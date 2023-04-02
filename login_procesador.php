<?php 
	include ("conexion.php");
	$Usuario = $_POST["Usuario"];
	$Password = $_POST["Password"];
	
	$consulta = mysql_query("SELECT * FROM login WHERE Usuario'".$Usuario."' AND Password='".$Password."'",$conexion);
	$array_consulta = mysql_fetch_array($consulta);
	
		if ($array_consulta == false) {
			echo "Usuario no encontrado";
			}else {
				echo "Bienvenido";
				}



?>