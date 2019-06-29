<?php  
	include 'funcoes.php';
	require_once 'classes/config.php';
	$funcoes = new Funcoes();

	$conecta = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		if (mysqli_connect_errno()) {
			// echo "Conexão falhou";
			die("Conexão falhou: ".mysqli_connect_errno() );
			} else {
				// echo "Conectado com sucesso";		
			}

	$id = $_GET['id'];
	$nome = $_GET['nome'];
	$telefone = $_GET['telefone'];
	$id_curso = $_GET['id_curso'];
	$email = $_GET['email'];
	$observacao = $_GET['observacao'];
	/*$data_cadastro = $_GET['data_cadastro'];*/

	$sql = " update tb_individuo
			set nome = '$nome', telefone = '$telefone',id_curso = '$id_curso', email = '$email', observacao = '$observacao'
			where id = '$id' ";

	

	$op_insercao1 = mysqli_query($conecta, $sql);			
	
	

	if ($op_insercao1) {
		
			echo "Editado com sucesso!";
			echo "<script type=\"text/javascript\">
		  	window.setTimeout(\"location.href='index.php';\", 1000);
			</script>";
		
	} else {
		echo "Erro ao tentar editar";
		echo "<script type=\"text/javascript\">
		window.setTimeout(\"location.href='index.php';\", 1000);
		</script>";
	}	

	mysqli_close($conecta);
				 		 
?>	