<?php

$conexao = mysqli_connect('localhost','root','','instituicao');
	if ($conexao) {
		/*echo "Conectado ao banco! <br>";*/
	} else {
		echo "Banco não conectado! <br>";
	}

	$id = $_GET['id']; 
	$nome = $_GET['descricao'];
	$valor = $_GET['valor'];
	
	$sql = " update tb_cursos
				set descricao = '$nome', valor = '$valor'
				where id = '$id' ";
				
		
	

	$op_insercao = mysqli_query($conexao, $sql);

	if ($op_insercao) {
		echo "Editado com sucesso!";
		header("refresh: 5;adicionarCurso.php");

	} else {
		echo "Erro ao tentar editar!";
		header("refresh: 5;adicionarCurso.php ");
	}
	
		mysqli_close($conexao);
?>		
