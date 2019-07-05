<?php 
	
	$conexao = mysqli_connect('localhost','root','','briefing');

	if ($conexao) {
		/*echo "Conectado com sucesso<br>";
*/	} else {
		echo "Erro ao conectar no banco de dados<br>";		
	}

	$id = $_GET['id'];
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

 	$sql = "update ficha
 			set nome = '$nome', campanha= '$campanha', pecas = '$pecas', outropecas = '$outropecas', ideiacentral = '$ideiacentral', publico = '$publico', veiculacao = '$veiculacao', outroveiculo = '$outroveiculo', tamanho = '$tamanho', outrotamanho = '$outrotamanho', prazo = '$prazo', observacoes = '$observacoes'
 			where id = '$id'";

 	$op_insercao = mysqli_query($conexao, $sql);

 	if ($op_insercao) {
		echo "Editado com sucesso!";
		header("refresh: 1;tabela.php");

	} else {
		echo "Erro ao tentar editar";
		header("refresh: 1;tabela.php");
	}

	mysqli_close($conexao);		
 		
?>