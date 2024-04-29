<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	
	<body>
		<?php
				class veiculo
				{
					public $marca;
					public $modelo;
				}
				
				class automovel extends veiculo
				{	
					public $ano;
					public $kmh;
				}
				class aviao extends veiculo
				{
					public $companhia;
					public $autonomia;
				}
				
				class maisAutomoveis extends automovel
				{
					public $numeroRodas;
				}
				
				$aviao = new aviao();
				$aviao->marca = "Boing";
				$aviao->modelo = "774";
				$aviao->companhia = "US Airlines";
				$aviao->autonomia = "10.000 km";
				
				echo'<p>'.$aviao->marca.'</p>';
				echo'<p>'.$aviao->modelo.'</p>';
				echo'<p>'.$aviao->companhia.'</p>';
				echo'<p>'.$aviao->autonomia.'</p>';
		?>
	</body>
	
</html>
