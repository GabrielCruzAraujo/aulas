<?php 
	include 'inicio.php'; 
	
	$anoatual = $_GET['anoatual'];
	$anonasc  = $_GET['anonasc'];
	
	$idade = ($anoatual - $anonasc);
	echo "Minha idade será " . $idade ;	

	include 'fim.php'; 
?>


