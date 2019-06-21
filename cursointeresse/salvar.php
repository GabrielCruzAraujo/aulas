
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php  
	require_once 'classes/config.php';
	$conecta = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		if (mysqli_connect_errno()) {
			// echo "Conexão falhou";
			die("Conexão falhou: ".mysqli_connect_errno() );
			} else {
				// echo "Conectado com sucesso";		
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

		

	

	$op_insercao = mysqli_query($conecta, $sql);			
	

	if ($op_insercao) {
		echo "Salvo com sucesso!";		
		echo "<script type=\"text/javascript\">
		  window.setTimeout(\"location.href='index.php';\", 1000);
		</script>";


		
		

	} else {
		echo "Erro ao tentar salvar";
		echo "<script type=\"text/javascript\">
		  window.setTimeout(\"location.href='index.php';\", 1000);
		</script>";

		
	}

	mysqli_close($conecta);


?>


</body>
</html>