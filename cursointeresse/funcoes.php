<?php  
/**
 * 
 */
class Funcoes
{
	



	function ultimoId($tabela='')
	{
		$conexao = mysqli_connect('localhost','root','','lead');

		if ($conexao) {
			// echo "Conectado com sucesso<br>";
		} else {
			echo "Erro ao conectar no banco de dados<br>";		
		}
		$sql = "select * from $tabela order by id desc limit 1 ";

		$op_insercao = mysqli_query($conexao, $sql);

		
		foreach ($op_insercao as $key => $value) {
			$id = $value['id'];
		}

		return $id;
	} 

	function debugCL($value='')
	{
		echo "<pre>";
		print_r($value);
		echo "</pre>";
	}
}

?>