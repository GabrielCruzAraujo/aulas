<?php  
	include 'funcoes.php';
	$funcoes = new Funcoes();

	$conexao = mysqli_connect('localhost','root','','instituicao');

	if ($conexao) {
		/*echo "Conectado com sucesso<br>";*/
	} else {
		echo "Erro ao conectar no banco de dados<br>";		
	}

	$nome = $_GET['descricao'];
	$valor = $_GET['valor'];

	$sql = " insert into tb_cursos
			(descricao,valor)
			values 
			('$nome','$valor');";
	
	

	$op_insercao = mysqli_query($conexao, $sql);			
			
			

	if ($op_insercao) {
		echo "Salvo com sucesso!";
		header("refresh: 1;adicionarCurso.php");

	} else {
		echo "Erro ao tentar salvar";
		header("refresh: 1;adicionarCurso.php");
	}

	mysqli_close($conexao);
?>

