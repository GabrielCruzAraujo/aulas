<?php
	$valor1 = $_GET['eleitores'];
	$valor2 = $_GET['brancos'];
	$valor3 = $_GET['nulos'];
	$valor4 = $_GET['validos'];
	
	$inteiro = ($valor2 / $valor1 ) * 100 ;
  	$inteiro2 = ($valor3 / $valor1 ) * 100 ;
  	$inteiro3 = ($valor4 / $valor1) * 100 ;
	echo "<br>O percentual de votos nulos e " . round($inteiro2)."%";	
	echo "<br>O percentual de votos brancos e " . round($inteiro)."%";	
  	echo "<br>O percentual de votos validos e " . round($inteiro3)."%";	 ;



  ?>