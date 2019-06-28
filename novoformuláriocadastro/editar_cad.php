<?php
	include('funcoes.php');
	$funcoes = new Funcoes();  
	
	$conexao = mysqli_connect('localhost','root','','novo_cadastro');
	if ($conexao) {
		// echo "Conectado com sucesso<br>";
	} else {
		echo "Erro ao conectar no banco de dados<br>";		
	}
	
	$id = $_GET['Id'];
	$consulta = "select 
					i.Id as id_individuo, i.Descricao as desc_individuo,
					c.Id as id_curso, c.Descricao as desc_curso 
				
				from 
					
					individuo i 
					inner join curso c on c.Id = i.id_curso 
					where
						i.Id = '$id'
					
					order by
	   				id_individuo = $id ;" ;

	$op_insercao = mysqli_query($conexao, $consulta);

	$sql_curso = "select * from curso";
	$execute_sql_curso = mysqli_query($conexao, $sql_curso);

	foreach ($op_insercao as $key => $dados) {
		/*$id = $dados['Id'];*/
		$nome = $dados['desc_individuo'];
		$curso = $dados['desc_curso'];

						
	}				

?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Cadastro de Interessados</title>
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

		/* .input-group-prepend {
		    width: 10%;
		}
		
		.input-group-text.bg-warning {
		    width: 100%;
		}
		
		 */
	</style>
</head>
<body>
	<main>
	<div class="container text-center">
			<h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-edit btnedit"></i> Editar</h1>

	
		<form action="editar.php" method="get">
			<div class="input-group mb-2"  style="display: none;">
			<div class="input-group-prepend">
				<div class="input-group-text bg-warning" >Id</div>
			</div>
			<input  readonly="" type="text" name="id_individuo" value="<?php echo $id ?>" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup" placeholder="Username" >
			</div>
			<div class="input-group mb-2">
				<div class="input-group-prepend">
					<div class="input-group-text bg-warning">Nome do Professor</div>
				</div>
			<input type="text" name="desc_individuo" value="<?php echo $nome ?>" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup" placeholder="Username" required=""><br/>
			</div>
			<div class="input-group mb-2">
			<div class="input-group-prepend">
				<div class="input-group-text bg-warning">Escolha seu Curso</div>
			</div>
			<select name="id_curso">
				<?php foreach ($execute_sql_curso as $key => $linha): ?>
					<?php if ($linha['id_curso'] == $curso ): ?>
				<option value="<?php echo $linha['id_curso'] ?>"><?php echo utf8_encode($linha['Descricao']) ?></option>
				<?php else: ?>
				<option value="<?php echo $linha['id_curso'] ?>"><?php echo utf8_encode($linha['Descricao']) ?></option>

					<?php endif ?>
				<?php endforeach ?>
			</select><br/>
			
						
			</select>
			</div>
			<div class="input-group mb-2">			
			   <div class="col-sm-2"></div>
			   <div class="col-sm-2"></div>
			   <div class="col-sm-2"></div>
			   <div class="col-sm-2"></div>
			   <div class="col-sm-2"></div>
			   <div class="col-sm-2" id="grupo-salvar"> 
			   		<button type="submit" class="btn btn-success" id="btn-salvar" ><i class="fas fa-edit btnedit"></i></button>
			   		<input class="btn btn-default" type='button' value='Voltar' onclick='history.go(-1)' />
			   </div>
			</div>
				
		</form>
	</main>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>