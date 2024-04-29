<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	
	<body>
		<?php
				class socio
				{
					public $nome;
					public $idade;
					public $morada;
		
					function __construct($nome, $idade, $morada)
					{	
						$this->nome = $nome;
						$this->idade = $idade;
						$this->morada = $morada;
					
						echo '<p>O meu nome é '.$this->nome.'</p>';
						echo '<p>A minha idade é '.$this->idade.'</p>';
						echo '<p>Eu moro na '.$this->morada.'</p>';
					}
				}
					$socio1 = new socio('Daniel', 17, 'Parceta Luís de Camões');
			
					echo '<br><br>Fim do script.';
			
		?>
	</body>
	
</html>
