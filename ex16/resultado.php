<?php 
	include 'inicio.php'; 
	
	$cont = 1;
	$num = $_GET['num'];
	$num1 = $_GET['num1'];
	$num2 = $_GET['num2'];
	$num3 = $_GET['num3'];
	$num4 = $_GET['num4'];
	$soma = 0;
	
	while ($cont <= 5) {
		
		// echo $cont;
		echo "<br>";
		$soma = $soma + $num + $num1 + $num2 + $num3 + $num4;
		$cont = $cont + 1;		
	}
	echo "A soma de todos os valores foi " .$soma;



	include 'fim.php'; 
?>


