<?php  
	include 'funcoes.php';
	$funcoes = new Funcoes();

	$conexao = mysqli_connect('localhost','root','','instituicao');

	if ($conexao) {
		/*echo "Conectado com sucesso<br>";*/
	} else {
		echo "Erro ao conectar no banco de dados<br>";		
	}

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

	$sql = " insert into fac
			(nome,sloga,apresentacao,tema,arquivo,edital,banner,ano,status,mostrar)
			values 
			('$nome','$sloga','$apresentacao','$tema','$arquivo','$edital','$banner','$ano','$status','$mostrar');";
	
	

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

