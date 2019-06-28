<?php  
	$conexao = mysqli_connect('localhost','root','','locadora');

	if ($conexao) {
		/*echo "Conectado com sucesso<br>";*/
	} else {
		echo "Erro ao conectar no banco de dados<br>";		
	}
	$consulta = "SELECT * FROM usuario ";
	$op_insercao = mysqli_query($conexao, $consulta);

	?>
	

<!DOCTYPE html>
<html>
<head>
	<title>Sistema de Cadastro</title>
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

	<form action="salvar.php" method="get">
		<label>Nome</label>
		<input type="text" name="nome" required=""><br/>
		<label>email</label>
		<input type="text" name="email" required=""><br/>
		<label>senha</label>
		<input type="password" name="senha" required=""><br/>
		<label>cpf</label>
		<input type="text" name="cpf"><br/>
		<label>sexo</label>
		<select name="sexo">
			<option value="M">Masculino</option>
			<option value="F">Feminino</option>
		</select><br/>
		<label>cep</label>
		<input type="text" name="cep">
		<button type="submit">Salvar</button><br/>
		<input type="text" name="Pesquisar">
		<button type="submit">Pesquisar</button><br/>

	</form>
		<table border="1">
			<tr>
				<td>Id</td>
				<td>Nome</td>
				<td>Email</td>
				<td>Senha</td>
				<td>CPF</td>
				<td>Sexo</td>
				<td>Cep</td>
				<td>Ações</td>
			</tr>
			<?php foreach ($op_insercao as $key => $dado): ?>				
			<tr>
				<td><?php echo $dado["id"]; ?></td>
				<td><?php echo $dado["nome"]; ?></td>
				<td><?php echo $dado["email"]; ?></td>
				<td><?php echo $dado["senha"]; ?></td>
				<td><?php echo $dado["cpf"]; ?></td>
				<td><?php echo $dado["sexo"]; ?></td>
				<td><?php echo $dado["cep"]; ?></td>
				<td><a href="editar.php?id=<?php echo $dado['id']; ?>">Editar</a></td>
			</tr>
			<?php endforeach ?>

			
			
		</table>
	</body>
</html>