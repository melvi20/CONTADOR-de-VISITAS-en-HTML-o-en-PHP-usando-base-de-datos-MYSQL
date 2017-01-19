<?php

	$bd = "basededatos";
	$host = "localhost";
	$user = "root";
	$pass = "";

	$connect = new mysqli ($host, $user, $pass, $bd)or die ("error").mysqli ($connect);

	mysql_connect($host, $user, $pass);
	mysql_select_db($bd);

?>