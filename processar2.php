<?php

	$utilizador = $_REQUEST['txt_user'];
	$password = $_REQUEST['txt_pass'];
	
	if ($utilizador == "" or $password == "")
	{
		echo 'Não foram encontrados dados';
	}
	else
	{
		// verificar a validação do Login
		$user = "Daniel";
		$pass = "12345";
		$loginSucesso = True;
		if ($utilizador != $user) $loginSucesso = false; 
		if ($password != $pass) $loginSucesso = false;
		if(!$loginSucesso)
		{
			Echo 'Something Went Wrong 404 <br> <a href="index.php">Inicio</a>';
		}
		else
			echo 'Bem vindo ao Site';
	}
?>