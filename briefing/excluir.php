<?php 
	
	$conexao = mysqli_connect('localhost','root','','briefing');

	if ($conexao) {
		/*echo "Conectado com sucesso<br>";
*/	} else {
		echo "Erro ao conectar no banco de dados<br>";		
	}

	$id = $_GET['id'];
	$sql = " delete from ficha
				where id = '$id'";

	$op_insercao = mysqli_query($conexao, $sql);
	
	
	if ($op_insercao) {
		echo "Exluido com sucesso!";
		header("refresh: 1;tabela.php");

	} else {
		echo "Erro ao tentar excluir";
		header("refresh: 1;tabela.php");
	}

	mysqli_close($conexao);					
?>