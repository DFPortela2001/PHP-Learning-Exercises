<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	
	<body>
		<?php
			
			
				
				function __construct()
				{
					echo '<p> Eu fui criado.</p>';				
				}

				function __destruct()
				{
					echo '<p> Esttou a ser destruido. </p>';
				}
			}
			
			$socio1 = new socio();
			
			echo '<br><br> Fim do script.';
			
		
			
		?>
	</body>
	
</html>
