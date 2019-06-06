<?php

$conexao = mysqli_connect('localhost','root','','instituicao');
	if ($conexao) {
		/*echo "Conectado ao banco";*/
	} else {
		echo "Banco não conectado <br>";
	}

	$id = $_GET['id']; 
	$sql = " delete from fac
			where id='$id'";

	$op_insercao = mysqli_query($conexao, $sql);
	
	
	if ($op_insercao) {
		header("refresh: 3;adicionarCurso.php");

	} else {
		echo "Erro ao tentar excluir!";
		header("refresh: 3;adicionarCurso.php ");
	}
	
		mysqli_close($conexao);
?>			
		