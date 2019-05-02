<?php 
	
	$nota1 = 6;
	$nota2 = 7;
	$nota3 = 7;

	$media = ($nota1 + $nota2 + $nota3)/3;

	if ($media >= 7) {
		echo "Aprovado: ".$media;
	} elseif ($media > 5 && $media < 7) {
		echo "Recuperação: ".$media;		
	} else {
		echo "Reprovado ".$media;		
	}
	

	
	


?>