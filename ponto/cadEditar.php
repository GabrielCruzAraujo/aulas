<?php  
	include('funcoes.php');
	$funcoes = new Funcoes();
	$conexao = mysqli_connect('localhost','root','','ponto');

	if ($conexao) {
		// echo "Conectado com sucesso<br>";
	} else {
		echo "Erro ao conectar no banco de dados<br>";		
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
	<form action="salvar.php" method="get">
		<label>Nome</label>
		<input type="text" name="nome_pessoa" required=""><br/>
		<label>Email</label>
		<input type="text" name="email"><br/>
		<label for="grupo_emprego"> Grupo</label>
		<select name="id_grupo">
			<option>Selecione</option>
			<?php foreach ($execute_sql_grupo_emprego as $key => $linha): ?>
				<option value="<?php echo $linha['id_grupo'] ?>"><?php echo utf8_encode($linha['nome_grupo']) ?></option>
			<?php endforeach ?>
		</select><br/>
		<label for="categoria"> Categoria</label>
		<select name="id_categoria">
			<option>Selecione</option>
			<?php foreach ($execute_sql_curso as $key => $linha): ?>
				<option value="<?php echo $linha['id_categoria'] ?>"><?php echo utf8_encode($linha['nome_categoria']) ?></option>
			<?php endforeach ?>
		</select><br/>
		<label for="orgao"> Orgão Lotação</label>
		<select name="id_orgao_lotacao">
			<option>Selecione</option>
			<?php foreach ($execute_sql_orgao as $key => $linha): ?>
				<option value="<?php echo $linha['id_orgao'] ?>"><?php echo utf8_encode($linha['nome_orgao']) ?></option>
			<?php endforeach ?>
		</select><br/>
		<label for="orgao"> Orgão Exercicio</label>
		<select name="id_orgao_exercicio">
			<option>Selecione</option>
			<?php foreach ($execute_sql_orgao as $key => $linha): ?>
				<option value="<?php echo $linha['id_orgao'] ?>"><?php echo utf8_encode($linha['nome_orgao']) ?></option>
			<?php endforeach ?>
		</select><br/>
		<button type="submit">Salvar</button>
		<!-- <input type="text" name="Pesquisar">
		<button type="submit">Pesquisar</button><br/> -->

	</form>
	
	</body>
</html>