<?php 
	require_once 'classes/config.php';
	$conecta = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	if (mysqli_connect_errno()) {
		// echo "Conexão falhou";
		die("Conexão falhou: ".mysqli_connect_errno() );
	} else {
		// echo "Conectado com sucesso";		
	}

	$id = $_GET['id'];
	$sql = " delete from tb_individuo
				where id = '$id'";

	
	$op_insercao = mysqli_query($conecta, $sql);
	

	if ($op_insercao) { 
		
		echo "Excluído!";
		echo "<script type=\"text/javascript\">
		  window.setTimeout(\"location.href='index.php';\", 1000);
		</script>";
		
	

	} else {
		echo "Erro ao tentar excluir!";
		echo "<script type=\"text/javascript\">
		  window.setTimeout(\"location.href='index.php';\", 1000);
		</script>";
	}
	
		mysqli_close($conecta);				

		




?>