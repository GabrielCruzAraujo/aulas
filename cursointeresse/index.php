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
						i.id desc		
						;" ;
		
		$op_insercao = mysqli_query($conexao, $consulta);
		$sql_curso = "select * from tb_cursos";
		$execute_sql_curso = mysqli_query($conexao, $sql_curso);

	
	?>


<!DOCTYPE html>
<html>
<head>
	<title>Curso de Interesse</title>
</head>
<body>
	<form action="salvar.php" method="get">
		<label>Nome</label>
		<input type="text" name="nome" required=""><br/>
		<label for="id_curso">Curso</label>				 
		<select name="id_curso">
			<?php foreach ($execute_sql_curso as $key => $linha): ?>			
				<option value="<?php echo $linha['id'] ?>"><?php echo utf8_encode($linha['nome_curso']) ?></option>
			<?php endforeach ?>
			
			
		</select><br>
		<label>Telefone</label>
		<input type="text" name="telefone"><br>		
		<button type="submit">Salvar</button>
		<!-- <input type="text" name="Pesquisar">
		<button type="submit">Pesquisar</button><br/> -->

	</form>

	<table border="1">
			<tr>
				<td>Id</td>
				<td>Nome</td>
				<td>Nome do Curso</td>
				<td>Telefone</td>
				<td>Data Cadastro</td>
				
				
				</tr>
			<?php foreach ($op_insercao as $key => $dado): ?>				
			<tr>
				<td><?php echo $dado["id"]; ?></td>
				<td><?php echo $dado["nome_individuo"]; ?></td>
				<td><?php echo $dado["desc_curso"]; ?></td>
				<td><?php echo $dado["telefone"]; ?></td>
				<td><?php echo $dado["data_cadastro"]; ?></td>
			</tr>
			<?php endforeach ?>

			
			
		</table>

</body>
</html>