
<?php  
	$id = $_GET['id'];
	$conexao = mysqli_connect('localhost','root','','locadora');

	if ($conexao) {
		// echo "Conectado com sucesso<br>";
	} else {
		echo "Erro ao conectar no banco de dados<br>";		
	}
	$consulta = "SELECT * FROM usuario where id = '$id' limit 1 ";

	$op_insercao = mysqli_query($conexao, $consulta);

	foreach ($op_insercao as $key => $dados) {
		$nome = $dados['nome'];
		$email = $dados['email'];
		$senha = $dados['senha'];
		$cpf = $dados['cpf'];
		$sexo = $dados['sexo'];
		$cep = $dados['cep'];
	}

	

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
		<input style="display: none;" type="text" name="id" value="<?php echo $id ?>">
		<label>Nome</label>
		<input type="text" name="nome" required="" value='<?php
		echo $nome ?>'><br/>
		<label>email</label>
		<input type="text" name="email" required="" value='<?php echo $email ?>'><br/>
		<label>senha</label>
		<input type="password" name="senha" required="" value='<?php echo $senha ?>'><br/>
		<label>cpf</label>
		<input type="text" name="cpf" required="" value='<?php echo $cpf?>'><br/>
		<label>sexo</label>
		<select name="sexo">
			
				<option value="M" <?php if ($sexo=="M"){echo "selected";} ?>
					
				>Masculino</option>
				<option value="F" <?php if ($sexo=="F") {echo "selected";} ?> 
				>Feminino</option>
			
			

			

		</select><br/>
		<label>cep</label>
		<input type="text" name="cep" required="" value='<?php echo $cep ?>'>
		<button type="submit">Salvar</button><br/>


	</form>
		
	</body>
</html> 