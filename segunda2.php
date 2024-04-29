<?php
		
		include 'menu.php';
		
		echo '<h2>Bem vindo à página 2</h2>';
		echo '<p>Clique no Link seguinte para voltar à página inicial</p>';
		echo '<p><a href="index.php">Voltar</a></p>';
		
		if(isset($_GET['v']))
		{
			$acao = $_GET['v'];
			echo '<p>Temos aqui o valor de ação = '.$acao.'</p>';
		}
		
		if(isset($GET_['t']))
		{
			$t = $_GET['t'];
			echo '<p>Olha! Também temos o valor de T =.$tç</p>';
		}
		
		include 'rodape.php';
?>