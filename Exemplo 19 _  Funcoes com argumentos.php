<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	
	<body>
		<?php
			function nomeCompleto($nome, $apelido)					// A function e usada para repetir codigo, neste caso o meu nome, isto se o precisasse repetir varias vezes
			{
				echo $nome.' '.$apelido;
			}
			
			nomeCompleto('Daniel', 'Portela');
		
		?>
	</body>
	
</html>
