<?php 
	$conexao = mysqli_connect('localhost','root','','novo_cadastro');

	if ($conexao) {
		// echo "Conectado com sucesso<br>";
	} else {
		echo "Erro ao conectar no banco de dados<br>";		
	}

	$id = $_GET['Id']; 
	$sql = " delete from individuo
			where Id= '$id' ";

	$op_insercao = mysqli_query($conexao, $sql);
	
	
	if ($op_insercao) {
		echo "Excluido!";
		header("refresh: 1;index.php");

	} else {
		echo "Erro ao tentar excluir!";
		header("refresh: 1;index.php ");
	}
	
		mysqli_close($conexao);




 ?>