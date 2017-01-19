<?php
	
	require_once("conexion.php");

	$insert = "UPDATE contador SET visitas=visitas+1 WHERE id='2' ";
	$update = $connect->query($insert); 

?>