<?php 
	class Funcoes 
	{

	
		public function dataHoraPtBr($data)
		{
			$nova_data = date('d/m/Y H:i', strtotime($data));

			return $nova_data;

		}

		public function dataPtBr($data)
		{
			$nova_data = date('d/m/Y', strtotime($data));

			return $nova_data;

		}

		public function status($valor)
		{

			if ($valor == 'Novo') {
				echo "<button style='width:82.47px; ' type='button' class='btn btn-primary btn-sm'>Novo</button>";
			} 
			elseif ($valor == 'Pendente') {
				echo "<button type='button' class='btn btn-warning btn-sm'>Pendente</button>";
			}
			elseif ($valor == 'Processando' ) {
				echo "<button type='button' class='btn btn-info btn-sm'>Processando</button>";
			}
			elseif ($valor == 'Finalizado') {
				echo "<button type='button' class='btn btn-success btn-sm'>Finalizado</button>";
			}
			elseif ($valor == 'Cancelado') {
			 	echo "<button type='button' class='btn btn-danger btn-sm'>Cancelado</button>";
			}
							

		
		}
	}	



 ?>