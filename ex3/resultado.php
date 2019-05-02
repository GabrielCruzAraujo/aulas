<?php 
	include 'inicio.php'; 
	
	$grausfa = $_GET['grausfa'];
	

	$grausce = ($grausfa -32)/9 * 5  ; 

	echo "Temperatura em Graus Celsius " . $grausce;




	include 'fim.php'; 
?>