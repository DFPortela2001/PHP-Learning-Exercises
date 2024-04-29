<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	
	<body>
		<?php
			
			class socio							
			{
				public $nome;
				public $idade = 17;
			}
			
			$meuSocio = new socio();
			$meuSocio -> nome = 'Daniel';
			
			echo 'O meu primeiro socio chama-se '.$meuSocio -> nome. ' e tem '.$meuSocio-> idade.' anos de idade';
			
		?>
	</body>
	
</html>
