<?php
    
    $n = readline();
    settype($ano, "int");
    settype($mes, "int");
    settype($dia, "int");
    settype($n, "int");
    $ano=($n/365);
	$n=$n % 365;
	$mes=($n/30);
	$n = $n % 30;
	$dia=($n/1);
	$ano = number_format($ano, 0, ".", "");
	$mes = number_format($mes, 0, ".", "");
	$dia = number_format($dia, 0, ".", "");
	echo "$ano ano(s)\n$mes mes(es)a\n$dia dia(s)";
?>