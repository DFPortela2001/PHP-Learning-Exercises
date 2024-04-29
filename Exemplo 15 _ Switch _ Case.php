<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	
	<body>
		<?php
			$valor = 9;
			
			switch($valor)						// este é um "if" diferente, tem mais possibilidades
			{
				case 10:  					   // caso o valor seja (no caso 10), entao diz... por aí a fora.
					echo 'O valor é 10.';
					break;
				
				case 8:
					echo 'O valor é 8.';
					break;
				
				case 5:
					echo 'O valor é 5.';
					break;	
							
				default:
					echo 'Não foi encontrado o caso.';	
			}
			
			echo '<br> Fim do Script.';
		?>
	</body>
	
</html>
