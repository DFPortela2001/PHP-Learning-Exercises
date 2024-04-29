<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	
	<body>
		<?php
			for($contador = 1; $contador <= 50; $contador++) // o comando "for" irá escrever, neste caso números desde 1 até 50, progressivamente
															//sem a necessidade de escrever 50 "echo", para fazer o mesmo no entando de 50 para 1 basta fazer:
														   //for($contador = 50; $contador >= 1; $contador--), basicamente inverter os numeros e sinais.
			{
				echo $contador;
				echo '<br>';
			}
			
			echo '<br> Fim do Script.';
		?>
	</body>
	
</html>
