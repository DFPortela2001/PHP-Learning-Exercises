<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	
	<body>
		<?php
			
			$parcela1 = 100;
			$parcela2 = 200;
			
			function adicao ()
			{
				$GLOBALS['resultado'] = $GLOBALS['parcela1'] + $GLOBALS['parcela2']; 	//aqui definse-se 3 funções em apenas 1 linha sendo que esta ja faz a propia adição
			}
			adicao();
			
			echo $resultado;
			
			
		?>
	</body>
	
</html>
