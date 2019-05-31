<?php  
	$conexao = mysqli_connect('localhost','root','','novo_cadastro');

	if ($conexao) {
		// echo "Conectado com sucesso<br>";
	} else {
		echo "Erro ao conectar no banco de dados<br>";		
	}


	$nome = $_GET['Descricao'];
	$id_curso = $_GET['id_curso'];


	$sql = "insert into individuo
			(Descricao,id_curso)
			values
			('$nome','$id_curso');";

		

	

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

