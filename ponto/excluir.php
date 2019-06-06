<?php

$conexao = mysqli_connect('localhost','root','','ponto');
	if ($conexao) {
		/*echo "Conectado ao banco";*/
	} else {
		echo "Banco não conectado <br>";
	}

	$id = $_GET['id']; 
	$sql = " delete from pessoa
			where id_pessoa ='$id'";
	
	$sql2 = "delete from dado_funcional
			where id_pessoa = '$id'"; 		

	$op_insercao2 = mysqli_query($conexao, $sql2);
	$op_insercao = mysqli_query($conexao, $sql);
	
	
	if ($op_insercao) { 
		if ($op_insercao2) {
		echo "Excluido!";
		header("refresh: 3;index.php");
	}

	} else {
		echo "Erro ao tentar excluir!";
		header("refresh: 3;index.php ");
	}
	
		mysqli_close($conexao);
?>			