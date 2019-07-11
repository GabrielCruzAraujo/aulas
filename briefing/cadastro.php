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

	mysqli_close($conexao);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Cadastro Briefing</title>
 </head>
 <body>

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
	<style>
		.voltar {
			margin-left: 3px;
		}
	</style>

	

<main>
	<div class="container text-center">
		<h1 style="background: #2585b2 !important;;font-family: Lato, sans-serif;" class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Briefing</h1>
			 	

	 	<form action="salvar.php" method="get">
		 	<div class="input-group mb-2">
				<div class="input-group-prepend">
					<div class="input-group-text corcaixa">Nome</div>
				</div>
		 		<input type="text" name="nome" required="" value="" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup">
			</div>
		 	<div class="input-group mb-2">
				<div class="input-group-prepend">
					<div class="input-group-text corcaixa">Campanha</div>
				</div>
		 		<input type="text" name="campanha" required="" value="" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup">
			</div>
		 	<div class="input-group mb-2">
				<div class="input-group-prepend">
					<div class="input-group-text corcaixa">Peças</div>
				</div>		 	
				<div class="custom-control custom-checkbox checkbox" >
					<input name="peca_banner" type="checkbox" class="custom-control-input" id="peca_banner">
					<label  class="custom-control-label" for="peca_banner">Banner</label>
				</div>
			 	<div class="custom-control custom-checkbox checkbox">
					<input name="peca_panfleto" type="checkbox" class="custom-control-input" id="peca_panfleto">
					<label class="custom-control-label" for="peca_panfleto">Panfleto</label>
				</div>
				<div class="custom-control custom-checkbox checkbox">
					<input name="peca_folder" type="checkbox" class="custom-control-input" id="peca_folder">
					<label  class="custom-control-label" for="peca_folder">Folder</label>
				</div>
				<div class="custom-control custom-checkbox checkbox">
					<input name="peca_outdoor" type="checkbox" class="custom-control-input" id="peca_outdoor">
					<label  class="custom-control-label" for="peca_outdoor">Outdoor</label>
				</div>
				<div class="custom-control custom-checkbox checkbox">
					<input name="peca_camisa" type="checkbox" class="custom-control-input" id="peca_camisa">
					<label  class="custom-control-label" for="peca_camisa">Camisa</label>
				</div>
				<div class="custom-control custom-checkbox checkbox">
					<input name="peca_cartaz" type="checkbox" class="custom-control-input" id="peca_cartaz">
					<label  class="custom-control-label" for="peca_cartaz">Cartaz</label>
				</div>
			</div>
		 	<div class="input-group mb-2">
				<div class="input-group-prepend">
					<div class="input-group-text corcaixa">Outras Peças</div>
				</div>
		 		<input type="text" name="outro_pecas" value="" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup">
			</div>
		 	<div class="input-group mb-2">
				<div class="input-group-prepend">
					<div class="input-group-text corcaixa">Ideia Central</div>
				</div>
		 		<textarea name="ideia_central"  placeholder="Relacione aqui sua ideia para a produção da peça." rows="5" style="width: 100%;"></textarea>
			</div>
		 	<div class="input-group mb-2">
				<div class="input-group-prepend">
					<div class="input-group-text corcaixa">Público Alvo</div>
				</div>
		 		<textarea name="publico" placeholder="Descreva as pessoas a serem atingidas." rows="5" style="width: 100%;"></textarea>
		 	</div>	
		 	<div class="input-group mb-2">
				<div class="input-group-prepend">
					<div class="input-group-text corcaixa">Veiculação</div>
				</div>
				<div class="custom-control custom-checkbox checkbox">
					<input name="veiculo_site" type="checkbox" class="custom-control-input" id="veiculo_site">
					<label class="custom-control-label" for="veiculo_site">Site</label>
				</div>
		 		<div class="custom-control custom-checkbox checkbox">
					<input name="veiculo_rede_social" type="checkbox" class="custom-control-input" id="veiculo_rede_social">
					<label class="custom-control-label" for="veiculo_rede_social">Rede Social</label>
				</div>
				<div class="custom-control custom-checkbox checkbox">
					<input name="veiculo_email" type="checkbox" class="custom-control-input" id="veiculo_email">
					<label class="custom-control-label" for="veiculo_email">Email Marketing</label>
				</div>
				<div class="custom-control custom-checkbox checkbox">
					<input name="veiculo_impresso" type="checkbox" class="custom-control-input" id="veiculo_impresso">
					<label class="custom-control-label" for="veiculo_impresso">Impresso</label>
				</div>
				<div class="custom-control custom-checkbox checkbox">
					<input name="veiculo_brinde" type="checkbox" class="custom-control-input" id="veiculo_brinde">
					<label class="custom-control-label" for="veiculo_brinde">Brinde</label>
				</div>
			</div>		
		 	<div class="input-group mb-2">
				<div class="input-group-prepend">
					<div class="input-group-text corcaixa">Outros Veículos</div>
				</div>
		 		<input type="text" name="outro_veiculo"value="" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup">
		 	</div>	
		 	<div class="input-group mb-2">
				<div class="input-group-prepend">
					<div class="input-group-text corcaixa">Tamanho</div>
				</div>
				<div class="custom-control custom-checkbox checkbox">
					<input name="tamanho_a4" type="checkbox" class="custom-control-input" id="tamanho_a4">
					<label class="custom-control-label" for="tamanho_a4">A4</label>
				</div>
		 		<div class="custom-control custom-checkbox checkbox">
					<input name="tamanho_a3" type="checkbox" class="custom-control-input" id="tamanho_a3">
					<label class="custom-control-label" for="tamanho_a3">A3</label>
				</div>
				<div class="custom-control custom-checkbox checkbox">
					<input name="tamanho_a5" type="checkbox" class="custom-control-input" id="tamanho_a5">
					<label class="custom-control-label" for="tamanho_a5">A5</label>
				</div>
				<div class="custom-control custom-checkbox checkbox">
					<input name="tamanho_outdoor" type="checkbox" class="custom-control-input" id="tamanho_outdoor">
					<label class="custom-control-label" for="tamanho_outdoor">Outdoor</label>
				</div>
				<div class="custom-control custom-checkbox checkbox">
					<input name="tamanho_quadrado" type="checkbox" class="custom-control-input" id="tamanho_quadrado">
					<label class="custom-control-label" for="tamanho_quadrado">Quadrado</label>
				</div>
				<div class="custom-control custom-checkbox checkbox">
					<input name="tamanho_tv" type="checkbox" class="custom-control-input" id="tamanho_tv">
					<label class="custom-control-label" for="tamanho_tv">TV</label>
				</div>
				<div class="custom-control custom-checkbox checkbox">
					<input name="tamanho_stories" type="checkbox" class="custom-control-input" id="tamanho_stories">
					<label class="custom-control-label" for="tamanho_stories">Stories</label>
				</div>
				<div class="input-group mb-2">
				<div class="input-group-prepend">
					<div class="input-group-text corcaixa">Outros Tamanhos</div>
				</div>
		 		<input type="text" name="outro_tamanho" value="" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup">
		 		</div>
			 	<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text corcaixa">Prazo de Entrega</div>
					</div>
			 		<input type="date" name="prazo" required="" value="" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup">
			 	</div>
			 	<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text corcaixa">Data Entrada</div>
					</div>
			 		<input type="date" name="data_entrada" required="" value="" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup">
			 	</div>
			 	<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text corcaixa">Data Saida</div>
					</div>
			 		<input type="date" name="data_saida" value="" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup">
			 	</div>
			 	<!-- <div class="input-group mb-2">
			 						<div class="input-group-prepend">
			 							<div class="input-group-text bg-warning">Status</div>
			 						</div>
			 		<input type="text" name="status" value="" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup">
			 	</div> -->
			 	<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text corcaixa">Observações</div>
					</div>
			 		<textarea name="observacoes" rows="5" style="width: 100%;"></textarea>
			 	</div>

				
				

				<button type="submit" class="btn btn-primary">Salvar</button>
				<input class="btn btn-outline-secondary voltar" type='button' value='Voltar' onclick='history.go(-1)' />

	
	</div>
</main>	

</body>	
</html>

