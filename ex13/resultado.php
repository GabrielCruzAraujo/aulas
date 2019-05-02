<?php 
	include 'inicio.php'; 

	$contador = 0;
	$valor = $_GET['valor'];
	

	while ( $contador <= $valor) {
		echo $contador;
		echo "<br>";
		$contador = $contador + 1;

	}

	include 'fim.php'; 
?>










