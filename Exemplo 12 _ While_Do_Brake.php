<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	
	<body>
		<?php
			$valor1 = 50;							
			
			do												// o comando "do", faz, como o nome diz, um exemplo seria while (enquanto) o valor for X do (faz) o que estiver defino fazer... 
			{
				echo $valor1.'<br>';
				$valor1--;
				
				if ($valor1 == 20)							// o comando break faz com que o loop pare ao chegar ao 20
				break;
			}
			while($valor1 >= 0);		
			
			echo '<br> Fim do Script.';
		?>
	</body>
	
</html>
