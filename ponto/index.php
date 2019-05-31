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
	<h2>Tela de Usuário</h2>
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
		<table border="1">
			<tr>
				<td>id_Pessoa</td>
				<td>Nome_Pessoa</td>
				<td>Id_Grupo</td>
				<td>Id_Categoria</td>
				<td>Orgao_Lotacao</td>
				<td>Orgao_Exercicio</td>
				<td>Email</td>
				<td></td>
				
				</tr>
			<?php foreach ($op_insercao as $key => $dado): ?>				
			<tr>
				<td><?php echo $dado["id_pessoa"]; ?></td>
				<td><?php echo $dado["nome_pessoa"]; ?></td>
				<td><?php echo utf8_encode($dado["nome_grupo"]); ?></td>
				<td><?php echo utf8_encode($dado["nome_categoria"]); ?></td>
				<td><?php echo utf8_encode($dado["orgao_lotacao"]); ?></td>
				<td><?php echo utf8_encode($dado["orgao_exercicio"]); ?></td>
				<td><?php echo $dado["email"]; ?></td>
				<td><a href="cadEditar.php?id=<?php echo $dado['id_pessoa']; ?>"  >Editar</a></td> 
			</tr>
			<?php  

				// $funcoes->debugCl($dado);
				// exit();
			?>
			<?php endforeach ?>

			
			
		</table>
	</body>
</html>