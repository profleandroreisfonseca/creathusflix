<?php

	/*

	$servidor = "localhost";
	$usuario = "amaz9082_creathusflix";
	$senha = "49QhFpYG#A3}";
	$db_name = "amaz9082_db_creathusflix";

	*/
	

	$servidor = "us-cdbr-east-06.cleardb.net";
	$usuario = "b5faa2b23df698";
	$senha = "026802e6";
	$db_name = "heroku_a812336763ee899";
	
	
	
	$conexao = mysqli_connect($servidor, $usuario, $senha, $db_name) or die('BANCO DE DADOS INDISPONÍVEL.');

	mysqli_set_charset($conexao, "utf8mb4");
	
	$host_ip = $_SERVER['HTTP_HOST'];
	
	$url = "https://".$host_ip;
	
?>
