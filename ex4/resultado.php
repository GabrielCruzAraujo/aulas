<?php 
	include 'inicio.php'; 
	
	$nome = $_GET['nome'];
	$altura = $_GET['altura'];
	$peso = $_GET['peso'];

	echo $nome ;
	echo "<br>";
	$imc = $peso / ($altura * $altura ) ;
	echo "Seu indice de massa corporal é " . round($imc,2);
	echo "<br>";
	if ($imc >= 18.5 && $imc < 25) {
		echo "Você está no peso ideal ";
		# code...
	}

	elseif ($imc > 18.5 && $imc < 25) {
		echo "Você não está no peso ideal";
		# code...
	}

	if ($imc < 18.5) {
		echo "Você está abaixo do peso ";
		# code...
	}
	if ($imc > 25 && $imc < 29.9) {
		echo "Você está sobrepeso";
		# code...
	}
	if ($imc > 30 && $imc < 34.9) {
		echo "Você está com Obesidade grau I";
		# code...
	}
	if ($imc > 35 && $imc < 39.9) {
		echo "Você está com Obesidade grau II";
		# code...
	}
	if ($imc > 40 ) {
		echo "Você está com Obesidade grau III";
		# code...
	}





	include 'fim.php'; 
?>


