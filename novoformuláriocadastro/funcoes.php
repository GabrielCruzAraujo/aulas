<?php  
/**
 * 
 */
class Funcoes
{
	



	function ultimoId($tabela='')
	{
		$conexao = mysqli_connect('localhost','root','','ponto');

		if ($conexao) {
			// echo "Conectado com sucesso<br>";
		} else {
			echo "Erro ao conectar no banco de dados<br>";		
		}
		$sql = "select * from $tabela order by id_pessoa desc limit 1 ";

		$op_insercao = mysqli_query($conexao, $sql);

		
		foreach ($op_insercao as $key => $value) {
			$id = $value['id_pessoa'];
		}

		return $id;
	} 


	function debugCl($valor) {

		echo "<pre>";
		print_r($valor);
		echo "</pre>";

		echo "<pre>";
		var_dump($valor);
		echo "</pre>";
	}
}

?>