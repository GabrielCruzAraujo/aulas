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
			<form action="resultado.php" method="get">
				<!-- Mudar label e mudar o name do input -->
				<div class="item">
					<label for="">Nome do Funcionário</label>
					<input type="text" name="nome">
				</div>
				<!-- fim -->
				<div class="item">
					<label for="">Salário atual</label>
					<input type="text" name="sal">
				</div>
				<div class="item">
					<label for="">Número de Dependentes</label>
					<input type="text" name="dep">
				</div>
				<div class="footer-form">
					<button id="botao" type="submit">Enviar</button>
					
				</div>
			</form>
		</div>
	</div>
</body>
</html>