<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	
	<body>
		<?php
			
			$nome = 'Daniel';
			
			function funcao()
			{
				global $nome;				//o global serve para usar a fnção Nome tanto dentro como fora do Function
				echo $nome;
			}
			
			funcao();
			echo $nome
			
		?>
	</body>
	
</html>
