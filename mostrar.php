<?php
	require_once("conexion.php");

	$consulta = mysql_query("SELECT * FROM contador WHERE id='2' ")or die (mysql_error());
	$registro = mysql_fetch_array($consulta);
	do{
		$desc = $registro['visitas'];
		echo "$desc";
	}
	while ($registro = mysql_fetch_array($consulta));
?>