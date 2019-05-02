<?php 
	include 'inicio.php'; 
	
	$nome = $_GET['nome'];
	$sal = $_GET['sal'];
	$dep = $_GET['dep'];

	

	switch ($dep) {
		case 0:
			$NSal = $sal + ($sal * 5/100);
			break;
		case 1:
			$NSal = $sal + ($sal * 10/100);
			break;
		case 2:
			$NSal = $sal + ($sal * 10/100);
			break;
		case 3:
			$NSal = $sal + ($sal * 10/100);
			break;
		case 4:
			$NSal = $sal + ($sal * 15/100);
			break;
		case 5:
			$NSal = $sal + ($sal * 15/100);
			break;
		case 6:
			$NSal = $sal + ($sal * 15/100);
			break;

		default:
			$NSal = $sal + ($sal * 18/100);
			break;
	}
	echo "O novo salário de " . $nome, " será de R$ " . $NSal;
			
			
	
		
			

	
	
	








	include 'fim.php'; 
?>


