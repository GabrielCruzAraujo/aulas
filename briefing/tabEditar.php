<?php 
	
	$conexao = mysqli_connect('localhost','root','','briefing');

	if ($conexao) {
		/*echo "Conectado com sucesso<br>";
*/	} else {
		echo "Erro ao conectar no banco de dados<br>";		
	}

	$id = $_GET['id'];
	$consulta = "select * from ficha
					where id = '$id'; ";

	$op_insercao = mysqli_query($conexao, $consulta);
	
	foreach ($op_insercao as $key => $dados) {
			
			$id = $dados['id'];
			$nome = $dados['nome'];
		 	$campanha = $dados['campanha'];
		 	$peca_panfleto = $dados['peca_panfleto'];
		 	$peca_banner = $dados['peca_banner'];
		 	$peca_outdoor = $dados['peca_outdoor'];
		 	$peca_folder = $dados['peca_folder'];
		 	$peca_camisa = $dados['peca_camisa'];
		 	$peca_cartaz = $dados['peca_cartaz'];
		 	$outropecas = $dados['outropecas'];
		 	$ideiacentral = $dados['ideiacentral'];
		 	$publico = $dados['publico'];
		 	$veiculo_site = $dados['veiculo_site'];
		 	$veiculo_rede_social = $dados['veiculo_rede_social'];
		 	$veiculo_email = $dados['veiculo_email'];
		 	$veiculo_impresso = $dados['veiculo_impresso'];
		 	$veiculo_brinde = $dados['veiculo_brinde'];
		 	$outroveiculo = $dados['outroveiculo'];
		 	$tamanho_a3 = $dados['tamanho_a3'];
		 	$tamanho_a4 = $dados['tamanho_a4'];
		 	$tamanho_a5 = $dados['tamanho_a5'];
		 	$outrotamanho = $dados['outrotamanho'];
		 	$prazo = $dados['prazo'];
		 	$observacoes = $dados['observacoes'];
			
	}

?>				


<!DOCTYPE html>
<html>
<head>
	<title>Edição de Briefing</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
	<link rel="stylesheet" type="text/css" href="estilo.css">


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<main>
	<div class="container text-center">
		<h1 style="background: #2585b2 !important;;font-family: Lato, sans-serif;" class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Edição de Briefing</h1>
		<form action="editar.php" method="get">
				<!-- coloquei um display none para ficar invicivel -->
				<div class="input-group mb-2"  style="display: none;">
					<div class="input-group-prepend">
						<div class="input-group-text bg-warning" >Id</div>
					</div>
					<input type="text" name="id" value="<?php echo $id ?>" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup">
				</div>
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text bg-warning" >Nome</div>
					</div>
					<input type="text" name="nome" value="<?php echo $nome ?>" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup">
				</div>
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text bg-warning" >Campanha</div>
					</div>
					<input type="text" name="campanha" value="<?php echo $campanha ?>" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup">
				</div>
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text bg-warning" >Peças</div>
					</div>
					<div class="custom-control custom-checkbox">
					<input name="peca_panfleto" value="<?php echo $peca_panfleto ?>" type="checkbox" class="custom-control-input" id="peca_panfleto">
					<label class="custom-control-label" for="peca_panfleto">Panfleto</label>
					</div>
					<div class="custom-control custom-checkbox">
					<input name="peca_banner" value="<?php echo $peca_banner ?>" type="checkbox" class="custom-control-input" id="peca_banner">
					<label class="custom-control-label" for="peca_banner">Banner</label>
					</div>
					<div class="custom-control custom-checkbox">
					<input name="peca_outdoor" value="<?php echo $peca_outdoor ?>" type="checkbox" class="custom-control-input" id="peca_outdoor">
					<label class="custom-control-label" for="peca_outdoor">Outdoor</label>
					</div>
					<div class="custom-control custom-checkbox">
					<input name="peca_folder" value="<?php echo $peca_folder ?>" type="checkbox" class="custom-control-input" id="peca_folder">
					<label class="custom-control-label" for="peca_folder">Folder</label>
					</div>
					<div class="custom-control custom-checkbox">
					<input name="peca_camisa" value="<?php echo $peca_camisa ?>" type="checkbox" class="custom-control-input" id="peca_camisa">
					<label class="custom-control-label" for="peca_camisa">Camisa</label>
					</div>
					<div class="custom-control custom-checkbox">
					<input name="peca_cartaz" value="<?php echo $peca_cartaz ?>" type="checkbox" class="custom-control-input" id="peca_cartaz">
					<label class="custom-control-label" for="peca_cartaz">Cartaz</label>
					</div>
				</div>	
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text bg-warning" >Outras Peças</div>
					</div>
					<input type="text" name="outropecas" value="<?php echo $outropecas ?>" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup">
				</div>
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text bg-warning" >Ideia Central</div>
					</div>
					<textarea name="ideiacentral" placeholder="Relacione aqui sua ideia para a produção da peça." value="<?php echo $ideiacentral ?>"  rows="5" style="width: 100%;"></textarea>
				</div>
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text bg-warning" >Público Alvo</div>
					</div>
					<textarea name="publico" placeholder="Descreva as pessoas a serem atingidas." value="<?php echo $publico ?>"  rows="5" style="width: 100%;"></textarea>
				</div>
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text bg-warning" >Veiculação</div>
					</div>
					<div class="custom-control custom-checkbox">
					<input name="veiculo_site" value="<?php echo $veiculo_site ?>" type="checkbox" class="custom-control-input" id="veiculo_site">
					<label class="custom-control-label" for="veiculo_site">Site</label>
					</div>
					<div class="custom-control custom-checkbox">
					<input name="veiculo_rede_social" value="<?php echo $veiculo_rede_social ?>" type="checkbox" class="custom-control-input" id="veiculo_rede_social">
					<label class="custom-control-label" for="veiculo_rede_social">Rede Social</label>
					</div>
				</div>
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text bg-warning" >Outros Veiculos</div>
					</div>
					<input type="text" name="outroveiculo" value="<?php echo $outroveiculo ?>" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup">
				</div>
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text bg-warning" >Tamanho</div>
					</div>
					<input type="text" name="tamanho" value="<?php echo $tamanho ?>" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup">
				</div>
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text bg-warning" >Outros Tamanhos</div>
					</div>
					<input type="text" name="outrotamanho" value="<?php echo $outrotamanho ?>" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup">
				</div>
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text bg-warning" >Prazo de Entrega</div>
					</div>
					<input type="text" name="prazo" value="<?php echo $prazo ?>" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup">
				</div>
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text bg-warning" >Observações</div>
					</div>
					<textarea name="observacoes" value="<?php echo $ideiacentral ?>"  rows="5" style="width: 100%;"></textarea>
				</div>
				<button type="submit" class="btn btn-success" id="btn-salvar" ><i class="fas fa-edit btnedit"></i></button>

			
		</form>
		
	</div>
	
	</main>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	</body>
</html>				
				
				
				
				
			
				
				
				
				
				
				
		


	



