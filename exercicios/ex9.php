<?php
	
	$valor = $_GET['numero1'];
	$m1 = 1.30;
	$m2 = 1.00;
	
	if ($valor < 12 ) {
		$custoCompra =  $valor * $m1;
		echo "Custo total da compra e " . $custoCompra;
	}
	elseif ($valor >= 12 ) {
		 $custoCompra = $valor * $m2; 
		echo "Custo total da compra " . $custoCompra ;
	
		# code...
	}


 ?>