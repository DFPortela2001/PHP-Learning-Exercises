<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	
	<body>

<?php

		echo '<h2>Bem-vindo à pagina 2</h2>';
		echo '<p>Clique no Link seguinte para voltar à pagina anterior</p>';
		echo '<p><a href="index.php">Voltar</a></p>';
		
		$valor = $_GET['variavel'];
		echo '<p>'.$valor.'</p>';
		
?>
	</body>
	
</html>
