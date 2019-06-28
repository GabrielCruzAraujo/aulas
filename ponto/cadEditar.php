<?php  
	include('funcoes.php');
	$funcoes = new Funcoes();
	$conexao = mysqli_connect('localhost','root','','ponto');

	if ($conexao) {
		// echo "Conectado com sucesso<br>";
	} else {
		echo "Erro ao conectar no banco de dados<br>";		
	}

	$id = $_GET['id'];
	$consulta = " 
	select 
		p.id_pessoa, p.nome_pessoa, d.matricula, 
		d.id_grupo, d.id_categoria, 
		d.orgao_lotacao, d.orgao_exercicio, p.email
	    
	    
	from
		dado_funcional d
		inner join pessoa p on p.id_pessoa = d.id_pessoa 
		

	   where 
	   	p.id_pessoa = $id 
	    
" ;

	// print_r($consulta);
	// exit();
	$op_insercao = mysqli_query($conexao, $consulta);

	$sql_curso = "select * from categoria";
	$execute_sql_curso = mysqli_query($conexao, $sql_curso);
	
	$sql_orgao = "select * from orgao";
	$execute_sql_orgao = mysqli_query($conexao, $sql_orgao);


	$sql_grupo_emprego = "select * from grupo_emprego";
	$execute_sql_grupo_emprego = mysqli_query($conexao, $sql_grupo_emprego);

	foreach ($op_insercao as $key => $registro) {
			$nome = $registro['nome_pessoa'];
			$email = $registro['email'];
			$id_grupo = $registro['id_grupo'];
			$id_categoria = $registro['id_categoria'];
			$id_orgao_lotacao =$registro['orgao_lotacao'];
			$id_orgao_exercicio = $registro['orgao_exercicio'];
		

	}


?>

	







<!DOCTYPE html>
<html>
<head>
	<title>Tela de Usuário</title>
	<style type="text/css">

		#btn {
			background: orange;
		}


		.btn {
			background: blue;
		}

	</style>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
	<link rel="stylesheet" type="text/css" href="estilo.css">


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<main>
	<div class="container text-center">
		<h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Editar Usuário</h1>
	<form action="editar.php" method="get">
		<div class="input-group mb-2"  style="display: none;">
				<div class="input-group-prepend">
				<div class="input-group-text bg-warning" >Código</div>
				</div>
				<input  readonly="" type="text" name="id" value="<?php echo $id ?>" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup" placeholder="Username" >
			</div>
			<div class="input-group mb-2">
			<div class="input-group-prepend">
			<div class="input-group-text bg-warning"></i>Nome</div>
			</div>
		<input type="text" name="nome_pessoa" value="<?php echo $nome ?>" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup" placeholder="Username">
		<div class="input-group mb-2">
			<div class="input-group-prepend">
			<div class="input-group-text bg-warning"></i>Email</div>
			</div>
		<input type="text" name="email" value="<?php echo $email ?>" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup" placeholder="Username"><br/>
		<div class="input-group mb-2">
				<div class="input-group-prepend">
					<div class="input-group-text bg-warning">Grupo</div>
				</div>	
		<select name="id_grupo">
			<option>Selecione</option>
			<?php foreach ($execute_sql_grupo_emprego as $key => $linha): ?>
				<?php if ($linha['id_grupo'] == $id_grupo ): ?>
				<option selected="" value="<?php echo $linha['id_grupo'] ?>"><?php echo utf8_encode($linha['nome_grupo']) ?></option>

				<?php else: ?>
				<option value="<?php echo $linha['id_grupo'] ?>"><?php echo utf8_encode($linha['nome_grupo']) ?></option>

				<?php endif ?>
			<?php endforeach ?>
		</select><br/>
		</div>
		<div class="input-group mb-2">
				<div class="input-group-prepend">
					<div class="input-group-text bg-warning">Categoria</div>
				</div>	
		<select name="id_categoria">
			<option>Selecione</option>
			<?php foreach ($execute_sql_curso as $key => $linha): ?>
				<?php if ($linha['id_categoria'] == $id_categoria ): ?>
				<option selected="" value="<?php echo $linha['id_categoria'] ?>"><?php echo utf8_encode($linha['nome_categoria']) ?></option>
					
				<?php else: ?>
				<option value="<?php echo $linha['id_categoria'] ?>"><?php echo utf8_encode($linha['nome_categoria']) ?></option>
					
				<?php endif ?>
			<?php endforeach ?>
		</select><br/>
		</div>
		<div class="input-group mb-2">
				<div class="input-group-prepend">
					<div class="input-group-text bg-warning">Orgão Lotação</div>
				</div>	
		<select name="id_orgao_lotacao">
			<option>Selecione</option>
			<?php foreach ($execute_sql_orgao as $key => $linha): ?>
				<?php if ($linha['id_orgao'] == $id_orgao_lotacao ): ?>
				<option selected="" value="<?php echo $linha['id_orgao'] ?>"><?php echo utf8_encode($linha['nome_orgao']) ?></option>

				<?php else: ?>
				<option value="<?php echo $linha['id_orgao'] ?>"><?php echo utf8_encode($linha['nome_orgao']) ?></option>
				<?php endif ?>
			<?php endforeach ?>
		</select><br/>
		</div>

		<div class="input-group mb-2">
				<div class="input-group-prepend">
					<div class="input-group-text bg-warning">Orgão Exercício</div>
				</div>	
		<select name="id_orgao_exercicio">
			<option>Selecione</option>
			<?php foreach ($execute_sql_orgao as $key => $linha): ?>
				<?php if ($linha['id_orgao'] == $id_orgao_exercicio ): ?><option selected="" value="<?php echo $linha['id_orgao'] ?>"><?php echo utf8_encode($linha['nome_orgao']) ?></option>
				<?php else: ?>
				<option value="<?php echo $linha['id_orgao'] ?>"><?php echo utf8_encode($linha['nome_orgao']) ?></option>

				<?php endif ?>
			<?php endforeach ?>
		</select><br/>
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
		<!-- <input type="text" name="Pesquisar">
		<button type="submit">Pesquisar</button><br/> -->
	</div>
	</form>
	</main>
	</body>
</html>