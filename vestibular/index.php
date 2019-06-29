<?php  
	include 'classes/funcoes.php';
	$funcoes = new Funcoes();
	require_once 'classes/config.php';
	

	
	$execute_sql_cursos = $funcoes->listarJoinVestibular();

	/*if (isset($_GET['pesquisar'])) {
		$pesquisar = $_GET['pesquisar'];
		$op_insercao = $funcoes->listarJoinIndividuoLike($pesquisar);
		
		

	} else {
		$op_insercao = $funcoes->listarJoinIndividuo();	
		
	}
*/
?>


<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Interessados</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
	<link rel="stylesheet" type="text/css" href="estilo.css">


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<style type="text/css">
		.input-group-prepend {
		    width: 10%;
		}

		.input-group-text.bg-warning {
		    width: 100%;
		}

	</style>
</head>

<body>
	<main>
	<div class="container text-center">
		<h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Vestibular</h1>
		
		
	
		<div class="d-flex table-data">
				<table class="table table-striped table-dark">
					<thead class="thead-dark">
				<tr>
					<td>Código</td>
					<td>Nome</td>
					<td>Curso</td>
					<td>Data Inscrição</td>
					<td>Telefone</td>
					<td>Data Prova</td>
					
					
				</tr>
				</thead>
			
				<?php foreach ($execute_sql_cursos as $key => $dado): ?>				
				<tr>
					<td><?php echo $dado["id"]; ?></td>
					<td><?php echo $dado["nome"]; ?></td>
					<td><?php echo $dado["curso"]; ?></td>
					<td><?php echo $funcoes->dataHoraPtBr($dado["datainscricao"]); ?></td>
					<td><?php echo $dado["telefone"]; ?></td>
					<td><?php echo $funcoes->dataHoraPtBr($dado["dataprova"]); ?></td>
						
				</tr>
				<?php endforeach ?>

			</table>
		</div>
		
	</main>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

			
 </body>
</html>