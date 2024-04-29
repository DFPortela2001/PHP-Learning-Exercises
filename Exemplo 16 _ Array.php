<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	
	<body>
		<?php
			$valor = array();								// o array cria "caixas" (indices "[]") onde armazena as variaveis podendo estas sendo usadas mais tarde
			$valor[0] = "Tiago";
			$valor[1] = "Miguel";
			$valor[2] = "Daniel";
			$valor[3] = "Portela";
			$valor['nome_completo'] = "Tiago Dias";
			
			echo $valor[1];
			echo '<br>';
			echo $valor[2]. ' '.$valor[3];
			echo '<br>';
			echo $valor['nome_completo'];
			
			echo '<br><br> Fim do Script.';
		?>
	</body>
	
</html>
