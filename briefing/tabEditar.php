<?php 
	include 'classes/funcoes.php';
	require_once 'classes/config.php';

	$funcoes = new Funcoes();

	$conexao = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	if (mysqli_connect_errno()) {
				// echo "Conexão falhou";
		die("Conexão falhou: ".mysqli_connect_errno() );
	} else {
				// echo "Conectado com sucesso";		
	}

	$id = $_GET['id'];
	$consulta = "select * from ficha
					where id = '$id'; ";

	$op_insercao = mysqli_query($conexao, $consulta);
	
	foreach ($op_insercao as $key => $dados) {
			
			$id = $dados['id'];
			$nome = $dados['nome'];
		 	$campanha = $dados['campanha'];
		 	$peca_banner = $dados['peca_banner'];
		 	$peca_panfleto = $dados['peca_panfleto'];
		 	$peca_outdoor = $dados['peca_outdoor'];
		 	$peca_folder = $dados['peca_folder'];
		 	$peca_camisa = $dados['peca_camisa'];
		 	$peca_cartaz = $dados['peca_cartaz'];
		 	$outropecas = $dados['outro_pecas'];
		 	$ideiacentral = $dados['ideia_central'];
		 	$publico = $dados['publico'];
		 	$veiculo_site = $dados['veiculo_site'];
		 	$veiculo_rede_social = $dados['veiculo_rede_social'];
		 	$veiculo_email = $dados['veiculo_email'];
		 	$veiculo_impresso = $dados['veiculo_impresso'];
		 	$veiculo_brinde = $dados['veiculo_brinde'];
		 	$outroveiculo = $dados['outro_veiculo'];
		 	$tamanho_a3 = $dados['tamanho_a3'];
		 	$tamanho_a4 = $dados['tamanho_a4'];
		 	$tamanho_a5 = $dados['tamanho_a5'];
		 	$tamanho_outdoor = $dados['tamanho_outdoor'];
		 	$tamanho_quadrado = $dados['tamanho_quadrado'];
		 	$tamanho_tv = $dados['tamanho_tv'];
		 	$tamanho_stories = $dados['tamanho_stories'];
		 	$outrotamanho = $dados['outro_tamanho'];
		 	$prazo = date(  'Y-m-d' , strtotime($dados['prazo']));
		 	$observacoes = $dados['observacoes'];
		 	$data_entrada = date(  'Y-m-d' , strtotime($dados['data_entrada']));
		 	$data_saida = date(  'Y-m-d' , strtotime($dados['data_saida']) );
		 	$status = $dados['status'];
			
	}

	// echo $data_saida;
	// exit();

?>				


<!DOCTYPE html>
<html>
<head>
	<title>Edição de Briefing</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
	<link rel="stylesheet" type="text/css" href="estilo.css">


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
		.checkbox { 
			margin-top: 8px;
			margin-left: 14px;
		}
	</style>
	<style>
		.corcaixa {
			background-color: #cccccc;
		}
	</style>
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
						<div class="input-group-text corcaixa" >Nome</div>
					</div>
					<input type="text" name="nome" value="<?php echo $nome ?>" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup">
				</div>
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text corcaixa" >Campanha</div>
					</div>
					<input type="text" name="campanha" value="<?php echo $campanha ?>" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup">
				</div>
				<div class="input-group mb-2 ">
					<div class="input-group-prepend ">
						<div class="input-group-text corcaixa " >Peças</div>
					</div>
					<div class="custom-control custom-checkbox checkbox">
						<input name="peca_banner"  type="checkbox" class="custom-control-input" id="peca_banner" <?php if ($peca_banner == 'on'): ?>
							checked
						<?php endif ?> >
						<label class="custom-control-label" for="peca_banner">Banner</label>
					</div>
					<div class="custom-control custom-checkbox checkbox">
						<input name="peca_panfleto" type="checkbox" class="custom-control-input" id="peca_panfleto" <?php if ($peca_panfleto == 'on'): ?>
							checked
						<?php endif ?> >
						<label class="custom-control-label" for="peca_panfleto">Panfleto</label>
					</div>
					<div class="custom-control custom-checkbox checkbox">
						<input name="peca_outdoor" type="checkbox" class="custom-control-input" id="peca_outdoor" <?php if ($peca_outdoor == 'on'): ?>
							checked
						<?php endif ?> >
						<label class="custom-control-label" for="peca_outdoor">Outdoor</label>
					</div>
					<div class="custom-control custom-checkbox checkbox">
						<input name="peca_folder"  type="checkbox" class="custom-control-input" id="peca_folder" <?php if ($peca_folder == 'on'): ?>
							checked
						<?php endif ?> >
					<label class="custom-control-label" for="peca_folder">Folder</label>
					</div>
					<div class="custom-control custom-checkbox checkbox">
						<input name="peca_camisa" type="checkbox" class="custom-control-input" id="peca_camisa" <?php if ($peca_camisa == 'on'): ?>
							checked
						<?php endif ?> >
					<label class="custom-control-label" for="peca_camisa">Camisa</label>
					</div>
						<div class="custom-control custom-checkbox checkbox">
						<input name="peca_cartaz" type="checkbox" class="custom-control-input" id="peca_cartaz" <?php if ($peca_cartaz == 'on'): ?>
							checked
						<?php endif ?> >
					<label class="custom-control-label" for="peca_cartaz">Cartaz</label>
					</div>
				</div>	
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text corcaixa" >Outras Peças</div>
					</div>
					<input type="text" name="outro_pecas" value="<?php echo $outropecas ?>" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup">
				</div>
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text corcaixa" >Ideia Central</div>
					</div>
					<textarea name="ideia_central" placeholder="Relacione aqui sua ideia para a produção da peça." value="<?php echo $ideiacentral ?>"  rows="5" style="width: 100%;"></textarea>
				</div>
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text corcaixa" >Público Alvo</div>
					</div>
					<textarea name="publico" placeholder="Descreva as pessoas a serem atingidas." value="<?php echo $publico ?>"  rows="5" style="width: 100%;"></textarea>
				</div>
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text corcaixa" >Veiculação</div>
					</div>
					<div class="custom-control custom-checkbox checkbox">
						<input name="veiculo_site" type="checkbox" class="custom-control-input" id="veiculo_site" <?php if ($veiculo_site == 'on'): ?>
							checked
						<?php endif ?> >
						<label class="custom-control-label" for="veiculo_site">Site</label>
					</div>
					<div class="custom-control custom-checkbox checkbox">
						<input name="veiculo_rede_social" type="checkbox" class="custom-control-input" id="veiculo_rede_social" <?php if ($veiculo_rede_social == 'on'): ?>
							checked
						<?php endif ?> >
						<label class="custom-control-label" for="veiculo_rede_social">Rede Social</label>
					</div>
					<div class="custom-control custom-checkbox checkbox">
						<input name="veiculo_email" type="checkbox" class="custom-control-input" id="veiculo_email" <?php if ($veiculo_email == 'on'): ?>
							checked
						<?php endif ?> >
						<label class="custom-control-label" for="veiculo_email">Email Marketing</label>
					</div>
					<div class="custom-control custom-checkbox checkbox">
						<input name="veiculo_impresso" type="checkbox" class="custom-control-input" id="veiculo_impresso" <?php if ($veiculo_impresso == 'on'): ?>
							checked
						<?php endif ?> >
						<label class="custom-control-label" for="veiculo_impresso">Impresso</label>
					</div>
					<div class="custom-control custom-checkbox checkbox">
						<input name="veiculo_brinde" type="checkbox" class="custom-control-input" id="veiculo_brinde" <?php if ($veiculo_brinde == 'on'): ?>
							checked
						<?php endif ?> >
						<label class="custom-control-label" for="veiculo_brinde">Brinde</label>
					</div>
				</div>
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text corcaixa" >Outros Veiculos</div>
					</div>
					<input type="text" name="outro_veiculo" value="<?php echo $outroveiculo ?>" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup">
				</div>
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text corcaixa" >Tamanho</div>
					</div>
					<div class="custom-control custom-checkbox checkbox">
						<input name="tamanho_a3"  type="checkbox" class="custom-control-input" id="tamanho_a3"  <?php if ($tamanho_a3 == 'on'): ?>
							checked
						<?php endif ?>  >
						<label class="custom-control-label" for="tamanho_a3">A3</label>
					</div>
					<div class="custom-control custom-checkbox checkbox">
						<input name="tamanho_a4" type="checkbox" class="custom-control-input" id="tamanho_a4"  <?php if ($tamanho_a4 == 'on'): ?>
							checked
						<?php endif ?> >
						<label class="custom-control-label" for="tamanho_a4">A4</label>
					</div>
					<div class="custom-control custom-checkbox checkbox">
						<input name="tamanho_a5" type="checkbox" class="custom-control-input" id="tamanho_a5" <?php if ($tamanho_a5 == 'on'): ?>
							checked
						<?php endif ?> >
						<label class="custom-control-label" for="tamanho_a5">A5</label>
					</div>
					<div class="custom-control custom-checkbox checkbox">
						<input name="tamanho_outdoor"  type="checkbox" class="custom-control-input" id="tamanho_outdoor" <?php if ($tamanho_outdoor == 'on'): ?>
							checked
						<?php endif ?> >
						<label class="custom-control-label" for="tamanho_outdoor">Outdoor</label>
					</div>
					<div class="custom-control custom-checkbox checkbox">
						<input name="tamanho_quadrado"  type="checkbox" class="custom-control-input" id="tamanho_quadrado" <?php if ($tamanho_quadrado == 'on'): ?>
							checked
						<?php endif ?> >
						<label class="custom-control-label" for="tamanho_quadrado">Quadrado</label>
					</div>
					<div class="custom-control custom-checkbox checkbox">
						<input name="tamanho_tv" type="checkbox" class="custom-control-input" id="tamanho_tv" <?php if ($tamanho_tv == 'on'): ?>
							checked
						<?php endif ?> >
						<label class="custom-control-label" for="tamanho_tv">TV</label>
					</div>
					<div class="custom-control custom-checkbox checkbox">
						<input name="tamanho_stories" type="checkbox" class="custom-control-input" id="tamanho_stories" <?php if ($tamanho_stories == 'on'): ?>
							checked
						<?php endif ?> >
						<label class="custom-control-label" for="tamanho_stories">Stories</label>
					</div>
				</div>
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text corcaixa" >Outros Tamanhos</div>
					</div>
					<input type="text" name="outro_tamanho" value="<?php echo $outrotamanho ?>" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup">
				</div>
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text corcaixa" >Prazo de Entrega</div>
					</div>
					<input type="date" name="prazo" value="<?php echo $prazo ?>" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup">
				</div>
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text corcaixa" >Data de Entrada</div>
					</div>
					<input type="date" name="data_entrada" value="<?php echo $data_entrada?>" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup">
				</div>
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text corcaixa" >Data Saida</div>
					</div>
					<input type="date" name="data_saida" value="<?php echo $data_saida ?>" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup">
				</div>
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text corcaixa">Status</div>
					</div>
			 		<select name="status">
					  
									 
					  <option value="Novo" 
					  <?php if ($status == 'Novo'): ?>
					  		selected
					  <?php endif ?> >Novo</option>
					 
					 <option value="Pendente"
					  <?php if ($status == 'Pendente'): ?>
					  		selected
					  <?php endif ?> >Pendente</option> 

					  <option value="Processando"
					  <?php if ($status == 'Processando'): ?>
					  		selected
					  <?php endif ?> >Processando</option>

					  <option value="Finalizado"
					  <?php if ($status == 'Finalizado'): ?>
					  		selected
					  <?php endif ?> >Finalizado</option>

					  <option value="Cancelado"
					  <?php if ($status == 'Cancelado'): ?>
					  		selected
					  <?php endif ?> >Cancelado</option>

					</select>
			 	</div>
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text corcaixa" >Observações</div>
					</div>
					<textarea name="observacoes" value="<?php echo $observacoes ?>"  rows="5" style="width: 100%;"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Salvar Alterações</button>
				<input class="btn btn-outline-secondary" type='button' value='Voltar' onclick='history.go(-1)' />

			
		</form>
		
	</div>
	
	</main>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	</body>
</html>				
				
				
				
				
			
				
				
				
				
				
				
		


	



