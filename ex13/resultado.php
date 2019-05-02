<?php 
	include 'inicio.php'; 

	$contador = 0;
	$valor = $_GET['valor'];
	$salto = $_GET['salto'];
	

	while ( $contador <= $valor) {
		echo $contador;
		echo "<br>";
		$contador = $contador + $salto;
		echo "<br>";
		

	}

	include 'fim.php';

?>
	









