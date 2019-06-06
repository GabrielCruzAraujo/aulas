<?php  
	include 'funcoes.php';
	$funcoes = new Funcoes();

	$conexao = mysqli_connect('localhost','root','','ponto');

	if ($conexao) {
		// echo "Conectado com sucesso<br>";
	} else {
		echo "Erro ao conectar no banco de dados<br>";		
	}

	$id = $_GET['id'];
	$nome = $_GET['nome_pessoa'];
	$email = $_GET['email'];
	$id_grupo = $_GET['id_grupo'];
	$id_categoria = $_GET['id_categoria'];
	$orgao_lotacao = $_GET['id_orgao_lotacao'];
	$orgao_exercicio = $_GET['id_orgao_exercicio'];
	$data_cadastro = '2019-01-01';
	$nr_vinculo = 1;
	$regime_trabalho = 40;

	$sql = " update pessoa
		 		 set nome_pessoa = '$nome', email = '$email'
		 		 where id_pessoa = '$id' ";
		
	$sql2 = " update dado_funcional
				 set id_grupo = '$id_grupo', id_categoria = '$id_categoria', orgao_lotacao = '$orgao_lotacao', orgao_exercicio = '$orgao_exercicio'
				 where id_pessoa = '$id'";


	$op_insercao1 = mysqli_query($conexao, $sql);			
	$op_insercao2 = mysqli_query($conexao, $sql2);			
	

	if ($op_insercao1) {
		if ($op_insercao2) {
			echo "Editado com sucesso!";
			header("refresh: 2;index.php");
			
		}

	} else {
		echo "Erro ao tentar editar";
		header("refresh: 2;index.php");
	}

	mysqli_close($conexao);
?>

