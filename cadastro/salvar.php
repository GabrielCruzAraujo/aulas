<?php  


	$conexao = mysqli_connect('localhost','root','','locadora');

	if ($conexao) {
		// echo "Conectado com sucesso<br>";
	} else {
		echo "Erro ao conectar no banco de dados<br>";		
	}

	$nome = $_GET['nome'];
	$email = $_GET['email'];
	$senha = $_GET['senha'];
	$cpf = $_GET['cpf'];
	$sexo = $_GET['sexo'];
	$cep = $_GET['cep'];

	if ( isset($_GET['id']) ) {
		$id = $_GET['id'];
		$sql = "update usuario
		 		 set nome = '$nome', email = '$email', senha = '$senha' ,cpf = '$cpf', sexo = '$sexo', cep = '$cep'
		 		  where id = '$id' ";
		
	} else {
		$sql = "insert into usuario
			(nome, email, senha, cpf, sexo, cep)
			values
			('$nome','$email','$senha','$cpf','$sexo','$cep');";

		
		
	}
	

	$op_insercao = mysqli_query($conexao, $sql);			

	if ($op_insercao) {
		echo "Salvo com sucesso!";
		header("refresh: 1;index.php");

	} else {
		echo "Erro ao tentar salvar";
		header("refresh: 1;index.php");
	}

	mysqli_close($conexao);
?>

