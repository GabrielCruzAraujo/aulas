<?php  
	/*include('funcoes.php');
	$funcoes = new Funcoes();*/
	$conexao = mysqli_connect('localhost','root','','instituicao');

	if ($conexao) {
		// echo "Conectado com sucesso<br>";
	} else {
		echo "Erro ao conectar no banco de dados<br>";		
	}

		$id = $_GET['id'];
		$sql = "SELECT * FROM fac
		where id = '$id' limit 1 ";

		$op_insercao = mysqli_query($conexao, $sql);

		foreach ($op_insercao as $key => $registro) {
			$nome = $registro['nome'];
			$sloga = $registro['sloga'];
			$apresentacao =$registro['apresentacao'];
			$tema = $registro['tema'];
			$arquivo = $registro['arquivo'];
			$edital = $registro['edital'];
			$banner = $registro['banner'];
			$ano = $registro['ano'];
			$status = $registro['status'];
			$mostrar = $registro['mostrar'];
		}


		/*echo $mostrar;

		if ($mostrar == 'OFF') {
			echo "são iguais";
		} else {
			echo "não são iguais";

		}
*/
	

?>

<!DOCTYPE html>
	<html>
	<head>
		<title>Editar Curso</title>
	</head>
	<body>
	
	</body>
		<form action="editar.php" method="get">
			<input readonly="" type="text" name="id" value="<?php echo $id ?>"><br/>
			<label>Nome</label>
			<input type="text" name="nome" value="<?php echo $nome ?>"><br/>
			<label>Sloga</label>
			<input type="text" name="sloga" value="<?php echo $sloga ?>"><br/>
			<label>Apresentação</label>
			<input type="text" name="apresentacao" value="<?php echo $apresentacao ?>"><br/>
			<label>Tema</label>
			<input type="text" name="tema" value="<?php echo $tema ?>"><br/>
			<label>Arquivo</label>
			<input type="text" name="arquivo" value="<?php echo $arquivo ?>"><br/>
			<label>Edital</label>
			<input type="text" name="edital" value="<?php echo $edital ?>"><br/>
			<label>Banner</label>
			<input type="text" name="banner" value="<?php echo $banner ?>"><br/>
			<label>Ano</label>
			<input type="text" name="ano" value="<?php echo $ano ?>"><br/>
			<label>Status</label>
			<select name="status">
				<option value="on" <?php if ($status=="ON"){echo "selected";} ?>
					
				>On</option>
				<option value="off" <?php if ($status=="OFF") {echo "selected";} ?> 
				>Off</option>
			</select><br/>
			<label>Mostrar</label>
			<select name="mostrar">
				<option value="on" <?php if ($mostrar=="ON"){echo "selected";} ?>
					
				>On</option>
				<option value="off" <?php if ($mostrar=="OFF") {echo "selected";} ?> 
				>Off</option>
			</select><br/>
			<button type="submit">Salvar</button>

			<!-- <button type="submit">Editar</button> -->
		</form>
	</html>	
