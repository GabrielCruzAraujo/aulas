<?php  
/**
 * 
 */
class Funcoes
{
	



	function ultimoId($tabela='')
	{
		require_once 'classes/config.php';
		$conecta = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

			if (mysqli_connect_errno()) {
			// echo "Conexão falhou";
			die("Conexão falhou: ".mysqli_connect_errno() );
			} else {
			// echo "Conectado com sucesso";		
			}
		$sql = "select * from $tabela order by id desc limit 1 ";

		$op_insercao = mysqli_query($conecta, $sql);

		
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