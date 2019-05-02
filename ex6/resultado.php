<?php 
	include 'inicio.php'; 
	
	$reais = $_GET['reais'];
	
	$dolares = ($reais / 3.90);
	
	echo "Em dolares eu tenho U$$ " . round($dolares,2) ;
	


	include 'fim.php'; 
?>


