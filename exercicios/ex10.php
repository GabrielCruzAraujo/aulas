<?php 
	$valor1 = $_GET['ano_atual'];
	$valor2 = $_GET['ano_nasc'];

	$idade = ($valor1 - $valor2);
	
	if ($idade >= 18 ) { 
	    
		echo "Você está apto a votar " ;
	}
	elseif ($idade < 18 ) {
	    
		echo "Você não está apto a votar ";
		# code...
	}
?>

		