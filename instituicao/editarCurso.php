<?php  
	/*include('funcoes.php');
	$funcoes = new Funcoes();*/
	$conexao = mysqli_connect('localhost','root','','instituicao');

	if ($conexao) {
		// echo "Conectado com sucesso<br>";
	} else {
		echo "Erro ao conectar no banco de dados<br>";		
	}

		$id = $_GET['id'];
		$sql = "SELECT * FROM tb_cursos
		where id = '$id'";

		$op_insercao = mysqli_query($conexao, $sql);
		

	
		foreach ($op_insercao as $key => $registro) {
			$nome = $registro['descricao'];
			$valor = $registro['valor'];
		}


	

?>

<!DOCTYPE html>
	<html>
	<head>
		<title>Editar Curso</title>
	</head>
	<body>
	
	</body>
		<form action="editar.php" method="get">
			<input readonly="" type="text" name="id" value="<?php echo $id ?>">
			<label>Nome</label>
			<input type="text" name="descricao">
			<label>valor</label>
			<input type="text" name="valor">
			<button type="submit">Editar</button>
		</form>
	</html>	
