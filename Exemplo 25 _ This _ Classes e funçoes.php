<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	
	<body>
		<?php
			
			class socio
			{
				public $nome;						// public permite que as varieveis sejam publicas
				public $idade;
				public $morada;
				
				function DizerNome()
				{
					echo '<p> O meu nome é '.$this->nome.'</p>';				//o this -> permite identificar  as varias dentro da função, estando esta numa classe
				}

				function DizerIdade()
				{
					echo '<p> A minha idade é '.$this-> idade.'</p>';
				}
			}
			
			$socio1 = new socio();
			$socio1 -> nome = 'Daniel';
			$socio1 -> idade = '18';
			$socio1 -> morada = 'Parceta Luís de Camões';
			
			echo "<p>$socio1->nome</p>";
			echo "<p>$socio1->idade</p>";
			echo "<p>$socio1->morada</p>";
			
			$socio1->DizerNome();
			$socio1->DizerIdade();
			
		?>
	</body>
	
</html>
