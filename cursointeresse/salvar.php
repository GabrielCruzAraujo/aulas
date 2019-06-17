<?php  
	$conexao = mysqli_connect('localhost','root','','lead');

	if ($conexao) {
		// echo "Conectado com sucesso<br>";
	} else {
		echo "Erro ao conectar no banco de dados<br>";		
	}

	// DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA
    date_default_timezone_set('America/Sao_Paulo');
	$nome = $_GET['nome'];
	$telefone = $_GET['telefone'];
	$id_curso = $_GET['id_curso'];
	$datacadastro =  date('y-m-d H:i:s');  //'2019-12-25 00:00:00'


	$sql = "insert into tb_individuo
			(nome,telefone,id_curso,data_cadastro)
			values
			('$nome','$telefone','$id_curso','$datacadastro');";

		

	

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