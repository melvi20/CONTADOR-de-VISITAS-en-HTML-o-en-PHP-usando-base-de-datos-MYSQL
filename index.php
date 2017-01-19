<?php
	
	require_once("conexion.php");

	$insert = "UPDATE contador SET visitas=visitas+1 WHERE id='1' ";
	$update = $connect->query($insert);

?>

	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>
	<body>
		<h2>las visitas en php son:
			<?php
				$consulta = mysql_query("SELECT * FROM contador WHERE id='1' ")or die (mysql_error());
				$registro = mysql_fetch_array($consulta);
				do{
					$desc = $registro['visitas'];
					echo "$desc";
				}
				while ($registro = mysql_fetch_array($consulta));
			?>
		</h2>
	</body>
	</html>