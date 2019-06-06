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
	<h2>Editar Usuário</h2>
	<form action="editar.php" method="get">
		<input readonly="" type="text" name="id" value="<?php echo $id ?>"><br/>
		<label>Nome</label>
		<input type="text" name="nome_pessoa" required="" value="<?php echo $nome ?>"><br/>
		<label>Email</label>
		<input type="text" name="email" required="" value="<?php echo $email ?>"><br/>
		<label for="grupo_emprego"> Grupo</label>
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
		<label for="categoria"> Categoria</label>
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
		<label for="orgao"> Orgão Lotação</label>
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
		

		<label for="orgao"> Orgão Exercicio</label>
		<select name="id_orgao_exercicio">
			<option>Selecione</option>
			<?php foreach ($execute_sql_orgao as $key => $linha): ?>
				<?php if ($linha['id_orgao'] == $id_orgao_exercicio ): ?><option selected="" value="<?php echo $linha['id_orgao'] ?>"><?php echo utf8_encode($linha['nome_orgao']) ?></option>
				<?php else: ?>
				<option value="<?php echo $linha['id_orgao'] ?>"><?php echo utf8_encode($linha['nome_orgao']) ?></option>

				<?php endif ?>
			<?php endforeach ?>
		</select><br/>
		<button type="submit">Salvar</button>
		<!-- <input type="text" name="Pesquisar">
		<button type="submit">Pesquisar</button><br/> -->

	</form>
	
	</body>
</html>