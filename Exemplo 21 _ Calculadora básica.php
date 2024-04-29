<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	
	<body>
		<?php
			function adicao($parcela1, $parcela2)					// Esta linha faz a adição, e o "Return" dá o resultado. 
			{
				$resultado = $parcela1 + $parcela2;
				return $resultado;
			}
			function subtracao($parcela1, $parcela2)				// Aqui é o mesmo no entanto para a subtração.
			{
				$resultado = $parcela1 - $parcela2;
				return $resultado;
			}
			function multiplicaçao($parcela1, $parcela2)
			{
				$resultado = $parcela1 * $parcela2;
				return $resultado;
			}
			function divisao($parcela1, $parcela2)
			{
				$resultado = $parcela1 / $parcela2;
				return $resultado;
			}
			
			echo '<p> O resultado da adição é: '.adicao(100,200).'</p>';
			echo '<p> O resultado da subtraçao é: '.subtracao(100,200).'</p>';
			echo '<p> O resultado da multiplicaçao é: '.multiplicaçao(100,200).'</p>';
			echo '<p> O resultado da divisão é: '.divisao(100,200).'</p>';
			
			
			
		?>
	</body>
	
</html>
