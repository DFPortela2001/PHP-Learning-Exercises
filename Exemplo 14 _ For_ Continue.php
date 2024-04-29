<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	
	<body>
		<?php
			for($contador = 1; $contador <= 30; $contador++)
			{
				if($contador >= 10 and $contador <= 20)
				continue;
		
				echo $contador;
				echo '<br>';
			}
			
			echo '<br> Fim do Script.';
		?>
	</body>
	
</html>
