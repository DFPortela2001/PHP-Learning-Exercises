<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	
	<body>
		<?php
			$valor1 = 200;
			$valor2 = 100;
			
			if($valor1 == $valor2) 				// So vai para o imediantamente abaixo se os valores 1 e 2 forem iguais
			{
				if($valor1 <200)   				// Se o valor1 for menor que 200 "sim é menor"
				{
					echo 'Sim, é menor.';
				}
				else
				{
					echo 'Não. É igual ou superior.'; 
				}
			}
			else
			{
				echo 'Diferente.'; 				// Só vem diretamente para este se os valores 1 e 2 forem diferentes
			}
				
			

		?>
	</body>
	
</html>
