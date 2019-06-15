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
		$sql = "SELECT * FROM tb_cursos
		where id = '$id'";

		$op_insercao = mysqli_query($conexao, $sql);
		

	
		foreach ($op_insercao as $key => $registro) {
			$nome = $registro['descricao'];
			$valor = $registro['valor'];
		}


	

?>

<!DOCTYPE html>
	<html>
	<head>
		<title>Editar Curso</title>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">

		<link rel="stylesheet" type="text/css" href="estilo.css">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	</head>
	<body>
		<main>
		<div class="container text-center">
			<h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Área de Edição</h1>
	
		<form action="editar.php" method="get">
		<div class="input-group mb-2">
		 <div class="input-group-prepend">
			<div class="input-group-text bg-warning">Código</div>
				</div>
				  <input readonly="" type="text" name="id" value="<?php echo $id ?>" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup" placeholder="Username">
				   	</div>
		<div class="input-group mb-2">
		 <div class="input-group-prepend">
			<div class="input-group-text bg-warning">Nome</div>
				</div>
				  <input type="text" name="descricao" value="<?php echo $nome ?>" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup" placeholder="Username">
				   	</div>
			<div class="input-group mb-2">	   	
			<div class="input-group-prepend">
				<div class="input-group-text bg-warning"></i>Valor Curso</div>
				</div>
				  <input type="text" name="valor" value="<?php echo $valor ?>" autocomplete="off" placeholder="" class="form-control" id="inlineFormInputGroup" placeholder="Username">
				   	</div>		
					<div class="input-group mb-2">			
					   <div class="col-sm-2"></div>
					   <div class="col-sm-2"></div>
					   <div class="col-sm-2"></div>
					   <div class="col-sm-2"></div>
					   <div class="col-sm-2"></div>
					   <div class="col-sm-2" id="grupo-salvar"> 
		   		<button type="submit" class="btn btn-success" id="btn-salvar" ><i class="fas fa-edit btnedit"></i></button>
		   		<input type='button' value='Voltar' onclick='history.go(-1)' />

		   </div>
		</form>
		</div>
        </main>
	</body>
	</html>	
