
<?php  
	$id = $_GET['id'];
	$conexao = mysqli_connect('localhost','root','','ponto');

	if ($conexao) {
		// echo "Conectado com sucesso<br>";
	} else {
		echo "Erro ao conectar no banco de dados<br>";		
	}
	$consulta = "SELECT * FROM pessoa where id = '$id' limit 1 ";

	$op_insercao = mysqli_query($conexao, $consulta);

	foreach ($op_insercao as $key => $dados) {
		$nome = $dados['nome_pessoa'];
		$email = $dados['email'];
		
		if ( isset($_GET['id']) ) {
		$id = $_GET['id'];
		$sql = "update pessoa
		 		 set nome_pessoa = '$nome', email = '$email'
		 		 where id = '$id' ";
	}

	

	?>
<!DOCTYPE html>
<html>
<head>
	<title>Ponto</title>
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
		<button type="submit">Salvar</button><br/>


	</form>
		
	</body>
</html> 