<?php  
	/*include('funcoes.php');
	$funcoes = new Funcoes();*/
	$conexao = mysqli_connect('localhost','root','','instituicao');

	if ($conexao) {
		// echo "Conectado com sucesso<br>";
	} else {
		echo "Erro ao conectar no banco de dados<br>";		
	}
		$consulta = "SELECT * FROM tb_cursos ";
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
		<input type="text" name="descricao" required=""><br/>
		<label>Valor</label>
		<input type="text" name="valor">
		</select>
		<button type="submit">Salvar</button>
		<!-- <input type="text" name="Pesquisar">
		<button type="submit">Pesquisar</button><br/> -->

	</form>
		<table border="1">
			<tr>
				<td>Id_Pessoa</td>
				<td>Nome_Pessoa</td>
				<td>Valor</td>
				<td></td>
				<td></td>
				
				</tr>
			<?php foreach ($op_insercao as $key => $dado): ?>				
			<tr>
				<td><?php echo $dado["id"]; ?></td>
				<td><?php echo $dado["descricao"]; ?></td>
				<td><?php echo $dado["valor"]; ?></td>
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