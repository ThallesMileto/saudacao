<?php
	$host = "localhost:3306";
	$usuario = "root";
	$senha = "IfprAdm2016!@#";
	$bd = "manutencao";

	$mysqli = new mysqli($host, $usuario, $senha, $bd);

	if($mysqli->connect_errno)
		echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;	
?>