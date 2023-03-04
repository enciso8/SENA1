<?php
	


	require_once 'conectar.php';

	$id=$_POST['id'];
	$nombres=$_POST['nombres'];
		$apellidos=$_POST['apellidos'];
	$telefono=$_POST['telefono'];
	
	$direccion=$_POST['direccion'];
$correo=$_POST['correo'];


	$consulta=mysql_query("SELECT * FROM clientes WHERE id='$id';");

	if(mysql_num_rows($consulta)==0){
		mysql_query("INSERT INTO clientes(nombres, apellidos, telefono, direccion, correo) VALUES('$nombres', $apellidos, '$telefono', '$direccion', '$correo');");
	
		
		
		
		
		echo "<script type=\"text/javascript\">alert('guardado'); window.location='principal.php';</script>";
	}


	
	else{
		echo "<center>Debes llenar todos los campos!! </center>";	
			

	}


?>

