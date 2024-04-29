<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	
	<body>
		<?php
			$valor = array(0 => 00, 10, 20, 30, 40);	// outra maneira de escrever as variaveis "Array"
			$index = 0;
			
			foreach($valor as $v)						//igual ao for só que para as variaves "Array"
			{
				echo '$valor['.$index++.'] = '.$v;		// o $index faz aparecer o numero das variaveis no ecra [0] [1]
				echo '<br>';
			}
			
			echo '<br>';									
			echo $valor[3];								//este "echo" vai escrever o valor numero 3 do indice sendo este "30"
			
		?>
	</body>
	
</html>
