
<?php
	include 'funcoes.php';
	$funcoes = new Funcoes();  
	/*$id = $_GET['id'];*/
	$conexao = mysqli_connect('localhost','root','','novo_cadastro');

	if ($conexao) {
		// echo "Conectado com sucesso<br>";
	} else {
		echo "Erro ao conectar no banco de dados<br>";		
	}
	$id = $_GET['id_individuo'];
	$nome = $_GET['desc_individuo'];
	$id_curso = $_GET['id_curso'];

	$sql = " update individuo
				set Descricao = '$nome', id_curso = $id_curso
				where Id = '$id'; ";

	$op_insercao = mysqli_query($conexao, $sql);
	
	if ($op_insercao) {
		echo "Editado com sucesso!";
		header("refresh: 2;index.php");
	} else {
		echo "Erro ao tentar editar";
		header("refresh: 2;index.php");
	}
				
	mysqli_close($conexao)

	?>
