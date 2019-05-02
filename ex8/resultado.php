<?php 
	include 'inicio.php'; 
	
	$preço = $_GET['preço'];
	
	$imposto = ($preço * 60)/100;

	echo "O imposto sera de " . $imposto;

	include 'fim.php'; 
?>


