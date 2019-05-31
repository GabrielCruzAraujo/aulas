<?php  
	$conexao = mysqli_connect('localhost','root','','novo_cadastro');

	if ($conexao) {
		// echo "Conectado com sucesso<br>";
	} else {
		echo "Erro ao conectar no banco de dados<br>";		
	}
	$consulta = "SELECT * FROM curso";
	$op_insercao = mysqli_query($conexao, $consulta);

	?>
<!DOCTYPE html>
<html>
<head>
	<title>Curso</title>
	<meta charset="utf-8">
	<style type="text/css">

		#btn {
			background: orange;
		}


		.btn {
			background: blue;
		}

	</style>
</head>
<body>
	<form>
		<label for="Descricao"> Escolha seu curso</label>
		<select name="Descricao">
			<option value="1">Sistema de Informações</option>
			<option value="2">Contabilidade</option>
		</select>
	</form>

		<table border="1">
			<tr>
				<td>Id</td>
				<td>Curso</td>
				
				
				</tr>
			<?php foreach ($op_insercao as $key => $dado): ?>				
			<tr>
				<td><?php echo $dado["Id"]; ?></td>
				<td><?php echo utf8_encode($dado["Descricao"]); ?></td>
			</tr>
			<?php endforeach ?>

			
			
		</table>
	</body>
</html>