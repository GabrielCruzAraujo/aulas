<?php 
	$valor = $_GET['numero1'];
	if ($valor >= 0)
		echo "Valor Positivo";
	elseif ($valor < 0) {
		echo "Valor Negativo";
		# code...
	}

 ?>