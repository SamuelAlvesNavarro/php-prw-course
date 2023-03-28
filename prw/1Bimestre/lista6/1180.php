<?php
	$n = readline();
	$x = array();
	$linha = readline();
	$var = explode(" ", $linha);
  
	for($i = 0; $i < $n; $i++){
	  $x[$i] = $var[$i];
	  settype($x[$i], "integer");
	}
	
	$menor = $x[0];
	$pos = 0;
	
	for($i = 0; $i < $n; $i++){
	  if($menor > $x[$i]){
	    $menor = $x[$i];
	    $pos = $i;
	  }
	}

	print("Menor valor: $menor\n");
	print("Posicao: $pos\n");
?>