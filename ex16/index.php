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
					<label for="">Digite o valor 1</label>
					<input type="text" name="num">
				</div>
				<!-- fim -->
				<div class="item">
					<label for="">Digite o valor 2</label>
					<input type="text" name="num1">
				</div>
				<div class="item">
					<label for="">Digite o valor 3</label>
					<input type="text" name="num2">
				</div>
				<div class="item">
					<label for="">Digite o valor 4</label>
					<input type="text" name="num3">
				</div>
				<div class="item">
					<label for="">Digite o valor 5</label>
					<input type="text" name="num4">
				</div>
				<div class="footer-form">
					<button id="botao" type="submit">Enviar</button>
					
				</div>
			</form>
		</div>
	</div>
</body>
</html>