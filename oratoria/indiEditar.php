<?php  
	include('funcoes.php');
	$funcoes = new Funcoes();
	require_once 'classes/config.php';
	$conecta = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		if (mysqli_connect_errno()) {
			// echo "Conexão falhou";
			die("Conexão falhou: ".mysqli_connect_errno() );
		} else {
			// echo "Conectado com sucesso";		
		}

	$id = $_GET['id'];
	$consulta = " select 
						i.id , i.nome as nome_individuo,
						c.id as id_curso, c.nome_curso as desc_curso ,
                        i.telefone, i.data_cadastro,email,observacao
					from 
						tb_individuo i 
						inner join tb_cursos c on c.id = i.id_curso
					where
						i.id = '$id'
					order by
						i.id desc		
						;" ;
	


	$op_insercao = mysqli_query($conecta, $consulta);
	/*var_dump($op_insercao);
	exit();*/

	/*$sql_individuo = "select * from tb_individuo";
	$execute_sql_individuo = mysqli_query($conexao, $sql_individuo);*/
	
	$sql_cursos = "select * from tb_cursos";
	$execute_sql_cursos = mysqli_query($conecta, $sql_cursos);
	

	foreach ($op_insercao as $key => $dados) {
			$id = $dados['id'];
			$nome = $dados['nome_individuo'];
			$telefone = $dados['telefone'];
			$id_curso = $dados['id_curso'];
			$data_cadastro = $dados['data_cadastro'];
			$email = $dados['email'];
			$observacao = $dados['observacao'];



		

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
		<h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Editar Cadastro</h1>
		<form action="editar.php" method="get">
			<!-- coloquei um display none para ficar invicivel -->
			<div class="input-group mb-2"  style="display: none;">
				<div class="input-group-prepend">
					<div class="input-group-text bg-warning" >Código</div>
				</div>
				<input  readonly="" type="text" name="id" value="<?php echo $id ?>" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup" placeholder="Username" >
			</div>
			<div class="input-group mb-2">
				<div class="input-group-prepend">
					<div class="input-group-text bg-warning">Nome</div>
				</div>
				<input required="" type="text" name="nome" required="" value="<?php echo $nome ?>" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup" placeholder="Nome"><br/>
			</div>

			<div class="input-group mb-2">
				<div class="input-group-prepend">
					<div class="input-group-text bg-warning">Curso</div>
				</div>		
				<select name="id_curso" class="form-control">
					<?php foreach ($execute_sql_cursos as $key => $linha): ?>
						<?php if ($linha['id'] == $id_curso ): ?>
						<option selected="" value="<?php echo $linha['id'] ?>"><?php echo utf8_encode($linha['nome_curso']) ?></option>
						<?php else: ?>
						<option value="<?php echo $linha['id'] ?>"><?php echo utf8_encode($linha['nome_curso']) ?></option>
						<?php endif ?>
					<?php endforeach ?>
					

									

					
					
				</select>
			</div>
			<div class="input-group mb-2">	   	
				<div class="input-group-prepend">
					<div class="input-group-text bg-warning">Telefone</div>
				</div>

				<input required="" type="text" name="telefone" value="<?php echo $telefone ?>" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup" placeholder="Telefone"><br>		
			</div>
			<div class="input-group mb-2">	   	
				<div class="input-group-prepend">
					<div class="input-group-text bg-warning">Email</div>
				</div>

				<input required=""  type="text" name="email" value="<?php echo $email?>" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup" placeholder="email"><br>		
			</div>
			<div class="input-group mb-2">	   	
				<div class="input-group-prepend">
					<div class="input-group-text bg-warning">Observações </div>
				</div>
					<textarea name="observacao"  rows="10" cols="40" maxlength="500"><?php echo $observacao?>"</textarea>
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
		
	</div>
	</main>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	</body>
</html>