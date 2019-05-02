<?php 
	include 'inicio.php'; 
	
	$golt1 = $_GET['golt1'];
	$golt2 = $_GET['golt2'];
	
	$dif = ($golt1 - $golt2);
	if ($dif < 0 ) {
		$dif = $dif * (-1);
	} 
	
	switch ($dif) {
		case 0:
			echo "A diferença de gols é de " . $dif ;
			echo "<br>";
			echo "Status da partida é de Empate ";
			break;
		case 1;
			echo "A diferença de gols è de " . $dif;
			echo "<br>";
			echo "Status da partida é de Partida Normal " ;	
			break;
		case 2:
			echo "A diferença de gols é de " . $dif ;
			echo "<br>";
			echo "Status da partida é de Partida Normal ";
			break;	
		case 3:
			echo "A diferença de gols é de " . $dif ;
			echo "<br>";
			echo "Status da partida é de Partida Normal ";
			break;
		default:
			echo "A diferença de gols é de " . $dif;
			echo "<br>";
			echo "Status da partida é de Goleada ";
			
			break;
	}
	

	




	include 'fim.php'; 
?>


