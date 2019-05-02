<?php 
	$contador = 0;
	$valor = $_GET['valor'];
	echo "Quer contar até quanto? " . $valor;

	while ( $contador <= $valor) {
		echo $contador;
		echo "<br>";
		$contador = $contador + 1;

	}


?>

