<?php 
	include 'classes/funcoes.php';
	require_once 'classes/config.php';

	$funcoes = new Funcoes();

	$conexao = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	if (mysqli_connect_errno()) {
				// echo "Conexão falhou";
		die("Conexão falhou: ".mysqli_connect_errno() );
	} else {
				// echo "Conectado com sucesso";		
	}

	$id = $_GET['id'];
	$sql = " delete from ficha
				where id = '$id'";

	$op_insercao = mysqli_query($conexao, $sql);
	
	
	if ($op_insercao) {
		echo "Exluido com sucesso!";
		header("refresh: 1;index.php");

	} else {
		echo "Erro ao tentar excluir";
		header("refresh: 1;index.php");
	}

	mysqli_close($conexao);					
?>