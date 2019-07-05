<?php 
	
	$conexao = mysqli_connect('localhost','root','','briefing');

	if ($conexao) {
		/*echo "Conectado com sucesso<br>";
*/	} else {
		echo "Erro ao conectar no banco de dados<br>";		
	}

	$consulta = " select * from ficha ";

	$op_insercao = mysqli_query($conexao, $consulta);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Tabela</title>
	
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
		<link rel="stylesheet" type="text/css" href="estilo.css">


		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<style>
			i {
				color: #fff;
			}
		</style>
	</head>
	
<body>
	<main>
		<div class="container text-center">
			<h1 style="background: #2585b2 !important;;font-family: Lato, sans-serif;" class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Tabela Briefing</h1>

			<div class="d-flex table-data">
				<table class="table table-striped table-dark">
					<thead class="thead-dark">
		
				<tr>
					
					<td>Nome</td>
					<td>Campanha</td>
					<td>Público Alvo</td>
					<td>Veiculação</td>
					<td>Prazo de Entrega</td>
					<td>Status</td>
					
					
					<!-- Novo 
					Pendente
					Em andamento
					Finalizado
					Cancelado -->
				</tr>
					
					
				
					
					</thead>
				<?php foreach ($op_insercao as $key => $dado): ?>				
				<tr>
					
					<td><?php echo $dado['nome']; ?></td>
					<td><?php echo $dado['campanha']; ?></td>
					<td><?php echo $dado['publico']; ?></td>
					<td><?php echo $dado['veiculacao']; ?></td>
					<td><?php echo $dado['prazo']; ?></td>
					<td><a href="tabEditar.php?id=<?php echo $dado['id']; ?>"><i class="fas fa-edit btnedit"></i></a></td>
					<td><a href="excluir.php?id=<?php echo $dado['id']; ?>"><i class="fas fa-trash-alt"></i></a></td>
					
					
					
					
				</tr>
				<?php endforeach ?>
				</table>
					
			</div>
		</div>				
					
</main>
				
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>	
</html>
					
				