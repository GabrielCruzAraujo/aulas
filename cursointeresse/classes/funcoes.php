<?php  

	class Funcoes
	{
	
		public function listarJoinIndividuo()
		{
			require_once 'config.php';
			$conecta = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

				if (mysqli_connect_errno()) {
				// echo "Conexão falhou";
				die("Conexão falhou: ".mysqli_connect_errno() );
			} else {
				// echo "Conectado com sucesso";		
			}
			$consulta = " select 
							i.id , i.nome as nome_individuo,
							c.id as id_curso, c.nome_curso as desc_curso ,
	                        i.telefone, i.data_cadastro
						from 
							tb_individuo i 
							inner join tb_cursos c on c.id = i.id_curso
						order by
							i.id desc ;" ;
			
			$op_insercao = mysqli_query($conecta, $consulta);
	
			
			mysqli_close($conecta);

			return $op_insercao;
		}

		public function listarJoinIndividuoLike($pesquisar)
		{
			require_once 'config.php';
			$conecta = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

				if (mysqli_connect_errno()) {
				// echo "Conexão falhou";
				die("Conexão falhou: ".mysqli_connect_errno() );
			} else {
				// echo "Conectado com sucesso";		
			}
			$consulta = " select 
							i.id , i.nome as nome_individuo,
							c.id as id_curso, c.nome_curso as desc_curso ,
	                        i.telefone, i.data_cadastro
						from 
							tb_individuo i 
							inner join tb_cursos c on c.id = i.id_curso
						where 
							nome like '%$pesquisar%'
						order by
							i.id desc ;" ;
			
			$op_insercao = mysqli_query($conecta, $consulta);
	
			
			mysqli_close($conecta);

			return $op_insercao;
		}

		public function listarCursos()
		{
			require_once 'config.php';
			$conecta = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

				if (mysqli_connect_errno()) {
				// echo "Conexão falhou";
				die("Conexão falhou: ".mysqli_connect_errno() );
				} else {
				// echo "Conectado com sucesso";		
				}
					
			
			$sql_cursos = "select * from tb_cursos";
			$execute_sql_cursos = mysqli_query($conecta, $sql_cursos);

			
			mysqli_close($conecta);

			return $execute_sql_cursos;
		}















		public function dataHoraPtBr($data)
		{
			$nova_data = date('d/m/Y H:i', strtotime($data));

			return $nova_data;

		}
		public function calcularMedia($nome,$nota1,$nota2,$nota3)
		{
			$media = ($nota1 + $nota2 + $nota3)/3; 
			echo $nome." sua media é ". round($media) ."<br>";

			if ($media >= 7) {
				echo $nome." aprovado!<br>";
				
			
			} else {
				echo $nome." reprovado!<br>";
			}
			
		}
	}

?>