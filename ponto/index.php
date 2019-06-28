<?php  
	include('funcoes.php');
	$funcoes = new Funcoes();
	$conexao = mysqli_connect('localhost','root','','ponto');

	if ($conexao) {
		// echo "Conectado com sucesso<br>";
	} else {
		echo "Erro ao conectar no banco de dados<br>";		
	}
		$consulta = " 
			select 
		p.id_pessoa, p.nome_pessoa, d.matricula, 
		d.id_grupo, d.id_categoria, 
		d.orgao_lotacao, d.orgao_exercicio, p.email,c.nome_categoria,
	    o.nome_orgao as orgao_lotacao, oo.nome_orgao as orgao_exercicio,
	    gp.nome_grupo
	    
	    
	from
		dado_funcional d
		inner join pessoa p on p.id_pessoa = d.id_pessoa 
		inner join categoria c on c.id_categoria = d.id_categoria
	    inner join orgao o on o.id_orgao = d.orgao_lotacao
	    inner join orgao oo on oo.id_orgao = d.orgao_exercicio
	    left join grupo_emprego gp on gp.id_grupo = d.id_grupo
	    

	order by 
		id_pessoa desc ;" ;

	$op_insercao = mysqli_query($conexao, $consulta);

	$sql_curso = "select * from categoria";
	$execute_sql_curso = mysqli_query($conexao, $sql_curso);
	$sql_orgao = "select * from orgao";
	$execute_sql_orgao = mysqli_query($conexao, $sql_orgao);
	$sql_grupo_emprego = "select * from grupo_emprego";
	$execute_sql_grupo_emprego = mysqli_query($conexao, $sql_grupo_emprego);

	?>
<!DOCTYPE html>
<html>
<head>
	<title>Tela de Usuário</title>
	
</head>
<style type="text/css">
		i {
			color: #fff;
		}

		/*.input-group-prepend {
		    width: 10%;
		}

		.input-group-text.bg-warning {
		    width: 100%;*/
	/*	}*/

	</style>
	</style>
<body>
	
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
	<link rel="stylesheet" type="text/css" href="estilo.css">


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<main>
	<div class="container text-center">
		<h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Tela de Usuário</h1>

	


	<form action="salvar.php" method="get">
		<div class="input-group mb-2">
			<div class="input-group-prepend">
				<div class="input-group-text bg-warning">Nome</div>
			</div>
			<input type="text" name="nome_pessoa" value="" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup" placeholder="Username">
		</div>
		<div class="input-group mb-2">	   	
			<div class="input-group-prepend">
				<div class="input-group-text bg-warning">Email</div>
			</div>
			<input type="text" name="email" value="" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup" placeholder="Username">
		</div>	

		
		<div class="input-group mb-2">
				<div class="input-group-prepend">
					<div class="input-group-text bg-warning">Grupo</div>
				</div>	
		<select name="id_grupo">
			<option>Selecione</option>
			<?php foreach ($execute_sql_grupo_emprego as $key => $linha): ?>
				<option value="<?php echo $linha['id_grupo'] ?>"><?php echo utf8_encode($linha['nome_grupo']) ?></option>
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
				<option value="<?php echo $linha['id_categoria'] ?>"><?php echo utf8_encode($linha['nome_categoria']) ?></option>
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
				<option value="<?php echo $linha['id_orgao'] ?>"><?php echo utf8_encode($linha['nome_orgao']) ?></option>
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
				<option value="<?php echo $linha['id_orgao'] ?>"><?php echo utf8_encode($linha['nome_orgao']) ?></option>
			<?php endforeach ?>
		</select><br/>
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
				<td>ID</td>
				<td>Nome</td>
				<td>Grupo</td>
				<td>Categoria</td>
				<td>Orgão Lotacao</td>
				<td>Orgão Exercicio</td>
				<td>Email</td>
				<td></td>
				
				</tr>
				</thead>
			<?php foreach ($op_insercao as $key => $dado): ?>				
			<tr>
				<td><?php echo $dado["id_pessoa"]; ?></td>
				<td><?php echo $dado["nome_pessoa"]; ?></td>
				<td><?php echo utf8_encode($dado["nome_grupo"]); ?></td>
				<td><?php echo utf8_encode($dado["nome_categoria"]); ?></td>
				<td><?php echo utf8_encode($dado["orgao_lotacao"]); ?></td>
				<td><?php echo utf8_encode($dado["orgao_exercicio"]); ?></td>
				<td><?php echo $dado["email"]; ?></td>
				<td><a href="cadEditar.php?id=<?php echo $dado['id_pessoa']; ?>"><i class="fas fa-edit btnedit"></i></td>
				<td><a href="excluir.php?id=<?php echo $dado['id_pessoa']; ?>"><i class="fas fa-trash-alt"></i></a></td> 
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