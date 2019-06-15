<?php  
	/*include('funcoes.php');
	$funcoes = new Funcoes();*/
	$conexao = mysqli_connect('localhost','root','','instituicao');

	if ($conexao) {
		// echo "Conectado com sucesso<br>";
	} else {
		echo "Erro ao conectar no banco de dados<br>";		
	}
		$consulta = "SELECT * FROM tb_cursos ";
		$op_insercao = mysqli_query($conexao, $consulta);

	
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Tela de Usuário</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
	<link rel="stylesheet" type="text/css" href="estilo.css">


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<style type="text/css">
		* button {
			margin: 1.5em 0.5em;
			padding: 0.3em 1.4em;
		}
	</style>
</head>
	<style type="text/css">
		i {
			color: #fff;
		}
	</style>
<body>
	<main>
		<div class="container text-center">
			<h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Cadastro de Cursos</h1>

			

	<form action="salvar.php" method="get">
		<div class="input-group mb-2">
			<div class="input-group-prepend">
				<div class="input-group-text bg-warning"></i>Nome</div>
			</div>
			<input type="text" name="descricao" value="" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup" placeholder="Username">
		</div>
		<div class="input-group mb-2">	   	
			<div class="input-group-prepend">
				<div class="input-group-text bg-warning"></i>Valor Curso</div>
			</div>
			<input type="text" name="valor" value="" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup" placeholder="Username">
		</div>	
		<div class="input-group mb-2">			
		   <div class="col-sm-2"></div>
		   <div class="col-sm-2"></div>
		   <div class="col-sm-2"></div>
		   <div class="col-sm-2"></div>
		   <div class="col-sm-2"></div>
		   <div class="col-sm-2" id="grupo-salvar"> 
		   		<button type="submit" class="btn btn-success" id="btn-salvar" ><i class="fas fa-plus"></i></button>
		   </div>
		</div>
		

	</form>


		<div class="d-flex table-data">
			<table class="table table-striped table-dark">
				<thead class="thead-dark">
			<tr>
				<td>Código</td>
				<td>Nome</td>
				<td>Valor Curso</td>
				<td></td>
				<td></td>
				
				</tr>
			</thead>
			<?php foreach ($op_insercao as $key => $dado): ?>				
			<tr>
				<td><?php echo $dado["id"]; ?></td>
				<td><?php echo $dado["descricao"]; ?></td>
				<td><?php echo $dado["valor"]; ?></td>
				<td><a href="editarCurso.php?id=<?php echo $dado['id']; ?>"><i class="fas fa-edit btnedit"></i>
				<td><a href="excluir.php?id=<?php echo $dado['id']; ?>"><i class="fas fa-trash-alt"></i></a></td>
				
				
			</tr>
			<?php  

				// $funcoes->debugCl($dado);
				// exit();
			?>
			<?php endforeach ?>

		</table>
	</main>	

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



	</body>
</html>
			
			