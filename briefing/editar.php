<?php 
	
	$conexao = mysqli_connect('localhost','root','','briefing');

	if ($conexao) {
		/*echo "Conectado com sucesso<br>";
*/	} else {
		echo "Erro ao conectar no banco de dados<br>";		
	}

	$id = $_GET['id'];
	$nome = $_GET['nome'];
 	$campanha = $_GET['campanha'];
 	if ( isset($_GET['peca_banner']) ) {
 		$peca_banner = $_GET['peca_banner'];
 		
 	} else {
 		$peca_banner = "off";
 	}
 	if ( isset($_GET['peca_panfleto']) ) {
 		$peca_panfleto = $_GET['peca_panfleto'];
 		
 	} else {
 		$peca_panfleto = "off";
 	}
 	if ( isset($_GET['peca_outdoor']) ) {
 		$peca_outdoor = $_GET['peca_outdoor'];
 		
 	} else {
 		$peca_outdoor = "off";
 	}
 	if ( isset($_GET['peca_folder']) ) {
 		$peca_folder = $_GET['peca_folder'];
 		
 	} else {
 		$peca_folder = "off";
 	}
 	if ( isset($_GET['peca_camisa']) ) {
 		$peca_camisa = $_GET['peca_camisa'];
 		
 	} else {
 		$peca_camisa = "off";
 	}
 	if ( isset($_GET['peca_cartaz']) ) {
 		$peca_cartaz = $_GET['peca_cartaz'];
 		
 	} else {
 		$peca_cartaz = "off";
 	}
 	$outropecas = $_GET['outro_pecas'];
 	$ideiacentral = $_GET['ideia_central'];
 	$publico = $_GET['publico'];
 	if ( isset($_GET['veiculo_site']) ) {
 		$veiculo_site = $_GET['veiculo_site'];
 		
 	} else {
 		$veiculo_site = "off";
 	}

 	if ( isset($_GET['veiculo_rede_social']) ) {
 		$veiculo_rede_social = $_GET['veiculo_rede_social'];
 		
 	} else {
 		$veiculo_rede_social = "off";
 	}

 	if ( isset($_GET['veiculo_email']) ) {
 		$veiculo_email = $_GET['veiculo_email'];
 		
 	} else {
 		$veiculo_email = "off";
 	}
 	if ( isset($_GET['veiculo_impresso']) ) {
 		$veiculo_impresso = $_GET['veiculo_impresso'];
 		
 	} else {
 		$veiculo_impresso = "off";
 	}
 	if ( isset($_GET['veiculo_brinde']) ) {
 		$veiculo_brinde = $_GET['veiculo_brinde'];
 		
 	} else {
 		$veiculo_brinde = "off";
 	}
 	$outroveiculo = $_GET['outro_veiculo'];
	if ( isset($_GET['tamanho_a4']) ) {
 		$tamanho_a4 = $_GET['tamanho_a4'];
 		
 	} else {
 		$tamanho_a4 = "off";
 	}

 	if ( isset($_GET['tamanho_a3']) ) {
 		$tamanho_a3 = $_GET['tamanho_a3'];
 		
 	} else {
 		$tamanho_a3 = "off";
 	}
 	if ( isset($_GET['tamanho_a5']) ) {
 		$tamanho_a5 = $_GET['tamanho_a5'];
 		
 	} else {
 		$tamanho_a5 = "off";
 	}
 	if ( isset($_GET['tamanho_outdoor']) ) {
 		$tamanho_outdoor = $_GET['tamanho_outdoor'];
 		
 	} else {
 		$tamanho_outdoor = "off";
 	}
 	if ( isset($_GET['tamanho_quadrado']) ) {
 		$tamanho_quadrado = $_GET['tamanho_quadrado'];
 		
 	} else {
 		$tamanho_quadrado = "off";
 	}
 	if ( isset($_GET['tamanho_tv']) ) {
 		$tamanho_tv = $_GET['tamanho_tv'];
 		
 	} else {
 		$tamanho_tv = "off";
 	}
 	if ( isset($_GET['tamanho_stories']) ) {
 		$tamanho_stories = $_GET['tamanho_stories'];
 		
 	} else {
 		$tamanho_stories = "off";
 	}
 	$outrotamanho = $_GET['outro_tamanho'];
 	$prazo = $_GET['prazo'];
 	$observacoes = $_GET['observacoes'];
 	$data_entrada = $_GET['data_entrada'];
 	$data_saida = $_GET['data_saida'];
 	$status = $_GET['status'];

 	$sql = "update ficha
 			set nome = '$nome', campanha = '$campanha', peca_banner = '$peca_banner', peca_panfleto = '$peca_panfleto', peca_outdoor = '$peca_outdoor', peca_folder = '$peca_folder', peca_camisa = '$peca_camisa', peca_cartaz = '$peca_cartaz', outro_pecas = '$outropecas', ideia_central = '$ideiacentral', publico = '$publico', veiculo_site = '$veiculo_site', veiculo_rede_social = '$veiculo_rede_social', veiculo_email = '$veiculo_email', veiculo_impresso = '$veiculo_impresso', veiculo_brinde = '$veiculo_brinde', outro_veiculo = '$outroveiculo', tamanho_a4 = '$tamanho_a4', tamanho_a3 = '$tamanho_a3', tamanho_a5 = '$tamanho_a5', tamanho_outdoor = '$tamanho_outdoor', tamanho_quadrado = '$tamanho_quadrado', tamanho_tv = '$tamanho_tv', tamanho_stories = '$tamanho_stories', outro_tamanho = '$outrotamanho', prazo = '$prazo', observacoes = '$observacoes', data_entrada = '$data_entrada', data_saida = '$data_saida', status = '$status'
			where id = '$id' ;";

 	$op_insercao = mysqli_query($conexao, $sql);
 	
 	if ($op_insercao) {
		echo "Editado com sucesso!";
		header("refresh: 1;index.php");

	} else {
		echo "Erro ao tentar editar";
		header("refresh: 1;index.php");
	}

	mysqli_close($conexao);		
 		
?>