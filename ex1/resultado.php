<!DOCTYPE html>
<html>
<head>
	<title>Form Basic</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,900,900i" rel="stylesheet">
</head>
<body>
	<div class="conteudo">
		<div class="campos">
			<form action="resultado.php" method="post">
				<div class="item">
					<label for="campo1">
					<?php 
						$valor1 = $_GET['ano_atual'];
						$valor2 = $_GET['ano_nasc'];

						$idade = ($valor1 - $valor2);
						
						if ($idade >= 18 ) { 
						    
							echo "Você está apto a votar " ;
						}
						elseif ($idade < 18 ) {
						    
							echo "Você não está apto a votar ";
							# code...
						}
					?>

		
					</label>				
				</div>
				<div class="footer-form">
					<a id="botao" href="index.php">Voltar</a>
					
				</div>
			</form>
		</div>
	</div>
</body>
</html>