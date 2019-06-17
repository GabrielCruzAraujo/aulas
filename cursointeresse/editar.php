<?php  
	include 'funcoes.php';
	$funcoes = new Funcoes();

	$conexao = mysqli_connect('localhost','root','','lead');

	if ($conexao) {
		// echo "Conectado com sucesso<br>";
	} else {
		echo "Erro ao conectar no banco de dados<br>";		
	}

	$id = $_GET['id'];
	$nome = $_GET['nome'];
	$telefone = $_GET['telefone'];
	$id_curso = $_GET['id_curso'];
	$data_cadastro = $_GET['data_cadastro'];

	$sql = " update tb_individuo
		 		 set nome_individuo = '$nome', telefone = '$telefone'
		 		 where id = '$id' ";

	$sql2 = " update tb_cursos
				set id_curso = 'id_curso'
				where id = '$id'";

	$op_insercao1 = mysqli_query($conexao, $sql);			
	$op_insercao2 = mysqli_query($conexao, $sql2);			
	

	/*if ($op_insercao1) {
		if ($op_insercao2) {
			echo "Editado com sucesso!";
			header("refresh: 2;index.php");
			
		}

	} else {
		echo "Erro ao tentar editar";
		header("refresh: 2;index.php");
	}*/

	mysqli_close($conexao);
				 		 
?>	