<?php  
	/*include('funcoes.php');
	$funcoes = new Funcoes();*/
	$conexao = mysqli_connect('localhost','root','','lead');

	if ($conexao) {
		/*echo "Conectado com sucesso<br>";*/
	} else {
		echo "Erro ao conectar no banco de dados<br>";		
	}
		$consulta = " select 
						i.id , i.nome as nome_individuo,
						c.id as id_curso, c.nome_curso as desc_curso ,
                        i.telefone, i.data_cadastro
					from 
						tb_individuo i 
						inner join tb_cursos c on c.id = i.id_curso
					order by
						i.id desc ;" ;
		
		$op_insercao = mysqli_query($conexao, $consulta);

		/*$sql_individuo = "select * from tb_individuo";
		$execute_sql_individuo = mysqli_query($conexao, $sql_individuo);*/
	
		$sql_cursos = "select * from tb_cursos";
		$execute_sql_cursos = mysqli_query($conexao, $sql_cursos);

	
	?>


<!DOCTYPE html>
<html>
<head>
	<title>Curso de Interesse</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
	<link rel="stylesheet" type="text/css" href="estilo.css">


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<style type="text/css">
		* button {
			margin: 1.5em 0.5em;
			padding: 0.3em 1.4em;
		}

		i {
			color: #fff;
		}


	</style>
</head>

<body>
	<main>
	<div class="container text-center">
		<h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Cadastro de Candidatos</h1>
		<form action="salvar.php" method="get">
			<div class="input-group mb-2">
				<div class="input-group-prepend">
					<div class="input-group-text bg-warning">Nome</div>
				</div>
				<input required="" type="text" name="nome" required="" value="" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup" placeholder="Nome"><br/>
			</div>

			<div class="input-group mb-2">
				<div class="input-group-prepend">
					<div class="input-group-text bg-warning">Curso</div>
				</div>		
				<select name="id_curso" class="form-control">
					<?php foreach ($execute_sql_cursos as $key => $linha): ?>			
						<option value="<?php echo $linha['id'] ?>"><?php echo utf8_encode($linha['nome_curso']) ?></option>
					<?php endforeach ?>
					
					
				</select>
			</div>
			<div class="input-group mb-2">	   	
				<div class="input-group-prepend">
					<div class="input-group-text bg-warning">Telefone</div>
				</div>

				<input required=""  type="text" name="telefone" value="" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup" placeholder="Telefone"><br>		
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
			<!-- <input type="text" name="Pesquisar">
			<button type="submit">Pesquisar</button><br/> -->

		</form>
	
		<div class="d-flex table-data">
				<table class="table table-striped table-dark">
					<thead class="thead-dark">
				<tr>
					<td>#</td>
					<td>Nome</td>
					<td>Curso de Interesse</td>
					<td>Telefone</td>
					<td>Data Cadastro</td>
					
					
				</tr>
				</thead>
			
				<?php foreach ($op_insercao as $key => $dado): ?>				
				<tr>
					<td><?php echo $dado["id"]; ?></td>
					<td><?php echo $dado["nome_individuo"]; ?></td>
					<td><?php echo $dado["desc_curso"]; ?></td>
					<td><?php echo $dado["telefone"]; ?></td>
					<td><?php echo $dado["data_cadastro"]; ?></td>
					<td><a href="indiEditar.php?id=<?php echo $dado['id']; ?>"i class="fas fa-edit btnedit"></i></td>
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