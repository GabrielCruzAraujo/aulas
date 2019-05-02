<?php 
	include 'inicio.php'; 
	
	$nota1 = $_GET['nota1'];
	$nota2 = $_GET['nota2'];

	

	$media = ($nota1 + $nota2)/2;
	echo " Classificação das médias " ;
	echo "<br>";
	echo " A = Entre 9 e 10 ";
	echo "<br>";	
	echo " B = Entre 8 e 8.9 ";
	echo "<br>";	
	echo " C = Entre 7 e 7.9 ";
	echo "<br>";	
	echo " D = Entre 6 e 6.9 ";
	echo "<br>";
	echo " E = Entre 5 e 5.9 ";	
	echo "<br>";
	echo " F = Abaixo de 5 ";
	echo "<br>";
	echo "<br>";
	echo "<hr>";
	echo "<br>";
	
	echo "Sua média é de " . round($media,2);
	echo "<br>";
		
		
		
		

	if ($media >= 9 && $media <= 10) {
		echo "Você têm o aproveitamento do tipo A ";
		
	}
	if ($media  >= 8 && $media < 8.9)  {
		echo "Você têm o aproveitamento do tipo B ";
		
	}
	if ($media  >= 7 && $media < 7.9)  {
		echo "Você têm o aproveitamento do tipo C ";	
	}
	if ($media  >= 6 && $media < 6.9)  {
		echo "Você têm o aproveitamento do tipo D ";
	}
	if ($media  >= 5 && $media < 5.9)  {
		echo "Você têm o aproveitamento do tipo E ";
	}
	if ($media < 5) {
		echo "Você têm o aproveitamento do tipo F ";
	}				

	

	








	include 'fim.php'; 
?>




