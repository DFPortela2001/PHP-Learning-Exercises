<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	
	<body>
		<?php
			function funcao1($nome, $apelido = "Sem apelido")						// A function e usada para repetir codigo, neste caso o meu nome, isto se o precisasse repetir varias vezes
			{
				echo '<p> O meu nome é '.$nome.'. O meu apelido é '.$apelido.'.';
			}
			
			funcao1('Tiago');
			funcao1('Miguel', 'Dias');
		
		
		?>
	</body>
	
</html>
