<?php

$conexao = mysqli_connect('localhost','root','','instituicao');
	if ($conexao) {
		/*echo "Conectado ao banco! <br>";*/
	} else {
		echo "Banco não conectado! <br>";
	}

	$id = $_GET['id']; 
	$nome = $_GET['nome'];
	$sloga = $_GET['sloga'];
	$apresentacao = $_GET['apresentacao'];
	$tema = $_GET['tema'];
	$arquivo = $_GET['arquivo'];
	$edital = $_GET['edital'];
	$banner = $_GET['banner'];
	$ano = $_GET['ano'];
	$status = $_GET['status'];
	$mostrar = $_GET['mostrar'];
	
	$sql = " update fac
				set nome = '$nome', sloga = '$sloga', apresentacao = '$apresentacao', tema = '$tema', arquivo = '$arquivo', edital = '$edital', banner = '$banner', ano = '$ano', status = '$status', mostrar = '$mostrar'
				where id = '$id' ";
				
		
	

	$op_insercao = mysqli_query($conexao, $sql);

	if ($op_insercao) {
		echo "Editado com sucesso!";
		header("refresh: 2;adicionarCurso.php");

	} else {
		echo "Erro ao tentar editar!";
		header("refresh: 2;adicionarCurso.php ");
	}
	
		mysqli_close($conexao);
?>		
