
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
					$valor1 = $_GET['valor1'];
					$valor2 = $_GET['valor2'];

					if  ($valor1 > $valor2) {
						echo "O maior valor é" . $valor1;
					}
					elseif ($valor1 < $valor2) {
						echo "O maior valor é " . $valor2;
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