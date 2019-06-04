<?php  
	include('funcoes.php');
	$funcoes = new Funcoes();
	$conexao = mysqli_connect('localhost','root','','instituicao');

	if ($conexao) {
		// echo "Conectado com sucesso<br>";
	} else {
		echo "Erro ao conectar no banco de dados<br>";		
	}
	
	if (isset($_GET['pesquisar'])) {
		$pesquisar = $_GET['pesquisar'];
		$consulta = "SELECT * FROM fac where nome like '%$pesquisar%' ";

		

	} else {
		$consulta = "SELECT * FROM fac ";		
		
	}
	
	$op_insercao = mysqli_query($conexao, $consulta);


		
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
	<h2>Cadastro de Cursos</h2>
	<form action="salvar.php" method="get">
		<label>Nome</label>
		<input type="text" name="nome" required=""><br/>
		<label>Sloga</label>
		<input type="text" name="sloga"><br/>
		<label>Apresentação</label>
		<input type="text" name="apresentacao"><br/>
		<label>Tema</label>
		<input type="text" name="tema"><br/>
		<label>Arquivo</label>
		<input type="text" name="arquivo"><br/>
		<label>Edital</label>
		<input type="text" name="edital"><br/>
		<label>Banner</label>
		<input type="text" name="banner"><br/>
		<label>Ano</label>
		<input type="text" name="ano"><br/>
		<label>Status</label>
		<select name="status">
			<option value="on">on</option>
			<option value="off">off</option>
		</select><br/>
		<label>Mostrar</label>
		<select name="mostrar">
			<option value="on">on</option>
			<option value="off">off</option>
		</select><br/>
		</select>
		<button type="submit">Salvar</button><br/><br/>		
	</form>
	<form method="get">
		<input type="text" name="pesquisar">
		<button type="submit">Pesquisar</button><br/>
	</form>
		<table border="1">
			<tr>
				<td>Id</td>
				<td>Nome</td>
				<td>Sloga</td>
				<td>Apresentação</td>
				<td>Tema</td>
				<td>Arquivo</td>
				<td>Edital</td>
				<td>Banner</td>
				<td>Ano</td>
				<td>Status</td>
				<td>Mostrar</td>
				<td></td>
				<td></td>
				</tr>
			<?php foreach ($op_insercao as $key => $dado): ?>				
			<tr>
				<td><?php echo $dado["id"]; ?></td>
				<td><?php echo $dado["nome"]; ?></td>
				<td><?php echo $dado["sloga"]; ?></td>
				<td><?php echo $dado["apresentacao"]; ?></td>
				<td><?php echo $dado["tema"]; ?></td>
				<td><?php echo $dado["arquivo"]; ?></td>
				<td><?php echo $dado["edital"]; ?></td>
				<td><?php echo $dado["banner"]; ?></td>
				<td><?php echo $dado["ano"]; ?></td>
				<td><?php echo $dado["status"]; ?></td>
				<td><?php echo $dado["mostrar"]; ?></td>
				<td><a href="editarCurso.php?id=<?php echo $dado['id']; ?>">Editar</a></td>
				<td><a href="excluir.php?id=<?php echo $dado['id']; ?>">Excluir</a></td>
				
				
			</tr>
			<?php  

				// $funcoes->debugCl($dado);
				// exit();
			?>
			<?php endforeach ?>

			
			
		</table>
	</body>
</html>