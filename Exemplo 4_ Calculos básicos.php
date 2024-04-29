<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">		<!-- Este é o comentario do HTML, a parte atrás serve para dar acentos as palvras -->
	</head>
	
	<body>
	<?php
		$parcela1 = 400;
		$parcela2 = 200;
		echo $parcela1 + $parcela2; //adição
		echo "<br>";
		echo $parcela1 - $parcela2; //subtração
		echo "<br>";
		echo $parcela1 * $parcela2; #multiplicação
		echo "<br>";
		echo $parcela1 / $parcela2; //divisão
		echo "<br>";
		echo $parcela1 % $parcela2; //resto de visão
		echo "<br>";
		echo $parcela1 . $parcela2; //concatear, junta numeros por exemplo 11 . 7 = 117
		echo "<br>";
		echo "$parcela1 / $parcela2 é: ". $parcela1 / $parcela2 . " e o resto é de: " . $parcela1 % $parcela2;
		

	?>
	</body>
</html>
