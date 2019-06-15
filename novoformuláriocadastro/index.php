<?php  
	include('funcoes.php');
	$funcoes = new Funcoes();

	$conexao = mysqli_connect('localhost','root','','novo_cadastro');

	if ($conexao) {
		// echo "Conectado com sucesso<br>";
	} else {
		echo "Erro ao conectar no banco de dados<br>";		
	}
	$consulta = "
	select 
		i.id as id_individuo, i.descricao as desc_individuo,
		c.id as id_curso, c.descricao as desc_curso 
	from 
		individuo i 
	inner join curso c on c.id = i.id_curso; 




	";
	$op_insercao = mysqli_query($conexao, $consulta);

	$sql_curso = "select * from curso";
	$execute_sql_curso = mysqli_query($conexao, $sql_curso);




	mysqli_close($conexao);
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Novo Cadastro</title>
	<!-- <style type="text/css">

		#btn {
			background: orange;
		}


		.btn {
			background: blue;
		}

	</style> -->
	
</head>
<body>

	<form action="salvar.php" method="get">
		<label>Nome do Professor</label>
		<input type="text" name="Descricao" required=""><br/>
		<label for="id_curso"> Escolha seu curso</label>
		
		<select name="id_curso">
			<?php foreach ($execute_sql_curso as $key => $linha): ?>
				<option value="<?php echo $linha['id_individuo'] ?>"><?php echo utf8_encode($linha['Descricao']) ?></option>
			<?php endforeach ?>
			
			
		</select>
		<button type="submit">Salvar</button>
		<!-- <input type="text" name="Pesquisar">
		<button type="submit">Pesquisar</button><br/> -->

	</form>
		<table border="1">
			<tr>
				<td>Id</td>
				<td>Descrição</td>
				<td>Nome do Curso</td>
				
				
				</tr>
			<?php foreach ($op_insercao as $key => $dado): ?>				
			<tr>
				<td><?php echo $dado["id_individuo"]; ?></td>
				<td><?php echo $dado["desc_individuo"]; ?></td>
				<td><?php echo $dado["desc_curso"]; ?></td>
			</tr>
			<?php endforeach ?>

			
			
		</table>
	</body>
</html>