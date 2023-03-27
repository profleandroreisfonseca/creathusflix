<?php session_start();

	require('../bancodados/conexao.php');


	if (isset($_POST['nome_login'])) {      
	
		$nome_login = $_POST['nome_login'];
		$senha_login = md5($_POST['senha_login']);
	
		$sql_valida_login = mysqli_query($conexao,"SELECT * FROM usuario WHERE login = '".$nome_login."' AND senha = '".$senha_login."'");
		
		if(mysqli_num_rows($sql_valida_login) > 0){
	
			$registros_login = mysqli_fetch_assoc($sql_valida_login);
				 
			$_SESSION['login'] = $registros_login['login'];
			$_SESSION['senha'] = $registros_login['senha'];

				echo "<script> window.location.href='$url/admin/home';</script>";	
	
		} else {

			echo "<script> alert('Erro ao fazer login. Tente novamente ou fale com o Administrador.');</script>";

			echo "<script> window.location.href='$url/admin';</script>";
			
		}

	}

?> 