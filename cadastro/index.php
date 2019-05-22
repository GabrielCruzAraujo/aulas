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
		<input type="text" name="nome" required="">
		<label>email</label>
		<input type="text" name="email" required="">
		<label>senha</label>
		<input type="password" name="senha" required="">
		<label>cpf</label>
		<input type="text" name="cpf">
		<label>sexo</label>
		<input type="text" name="sexo">
		<label>cep</label>
		<input type="text" name="cep">
		<button type="submit">Salvar</button>

	</form>

	<!-- <form name="signup" method="post" action="cadastrando.php">
		Nome: <input type="text" name="nome"/><br/><br />
		Sobrenome <input type="text" name="sobrenome"/><br/><br />
		País: <input type="text" name="pais"/><br/><br />
		Estado: <input type="text" name="estado"/><br/><br />
		Cidade: <input type="text" name="cidade"/><br/><br />
		Email: <input type="text" name="email"/><br/><br />
		Senha: <input type="password" name="senha"><br/><br />
		<input type="submit" value="Cadastrar" />

		

	</form>
 -->
</body>
</html>