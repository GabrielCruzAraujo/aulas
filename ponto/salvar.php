<?php  
	include 'funcoes.php';
	$funcoes = new Funcoes();

	$conexao = mysqli_connect('localhost','root','','ponto');

	if ($conexao) {
		// echo "Conectado com sucesso<br>";
	} else {
		echo "Erro ao conectar no banco de dados<br>";		
	}


	$nome = $_GET['nome_pessoa'];
	$email = $_GET['email'];
	$id_grupo = $_GET['id_grupo'];
	$id_categoria = $_GET['id_categoria'];
	$orgao_lotacao = $_GET['id_orgao_lotacao'];
	$orgao_exercicio = $_GET['id_orgao_exercicio'];
	$data_cadastro = '2019-01-01';
	$nr_vinculo = 1;
	$regime_trabalho = 40;








	if ( isset($_GET['id']) ) {
		$id = $_GET['id'];
		$sql = "update pessoa
		 		 set nome_pessoa = '$nome', email = '$email'
		 		 where id = '$id' ";
		
	} else {
		$id = $funcoes->ultimoId('pessoa') + 1 ;
		$sql = "insert into pessoa
			(id_pessoa,nome_pessoa, email)
			values
			($id,'$nome','$email');";

		$sql2 = "insert into dado_funcional
		 (matricula,id_grupo,id_categoria,orgao_lotacao,orgao_exercicio,id_pessoa,data_ingresso,nr_vinculo,regime_trabalho)
		 values
		 ('$id','$id_grupo','$id_categoria','$orgao_lotacao','$orgao_exercicio','$id','$data_cadastro','$nr_vinculo','$regime_trabalho')";

	}

	$op_insercao1 = mysqli_query($conexao, $sql);			
	$op_insercao2 = mysqli_query($conexao, $sql2);			
			

	if ($op_insercao2) {
		echo "Salvo com sucesso!";
		header("refresh: 5;index.php");

	} else {
		echo "Erro ao tentar salvar";
		header("refresh: 5;index.php");
	}

	mysqli_close($conexao);
?>

