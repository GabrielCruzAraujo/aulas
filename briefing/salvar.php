<?php 
	exit();
	$conexao = mysqli_connect('localhost','root','','briefing');

	if ($conexao) {
		/*echo "Conectado com sucesso<br>";
*/	} else {
		echo "Erro ao conectar no banco de dados<br>";		
	}

	
 	$nome = $_GET['nome'];
 	$campanha = $_GET['campanha'];
 	$pecas = $_GET['pecas'];
 	$outropecas = $_GET['outropecas'];
 	$ideiacentral = $_GET['ideiacentral'];
 	$publico = $_GET['publico'];
 	$veiculacao = $_GET['veiculacao'];
 	$outroveiculo = $_GET['outroveiculo'];
 	$tamanho = $_GET['tamanho'];
 	$outrotamanho = $_GET['outrotamanho'];
 	$prazo = $_GET['prazo'];
 	$observacoes = $_GET['observacoes'];

 	$sql = " insert into ficha
				(nome,campanha,pecas,outropecas,ideiacentral,publico,veiculacao,outroveiculo,tamanho,outrotamanho,prazo,observacoes)
				values
				('$nome','$campanha','$pecas','$outropecas','$ideiacentral','$publico','$veiculacao', '$outroveiculo','$tamanho','$outrotamanho','$prazo','$observacoes');";

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