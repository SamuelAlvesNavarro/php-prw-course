<?php

$n = readline();

$total = 0;
$ratos = 0;
$sapos = 0;
$coelhos = 0;

for($i = 0; $i < $n; $i++){

    $linha = readline();
    $var = explode(" ", $linha);
    $quantidade = $var[0];
    $tipo = $var[1];

    $total += $quantidade;
    
    if($tipo === 'R'){
      
        $ratos += $quantidade;
    } elseif($tipo === 'S'){
      
        $sapos += $quantidade;
    } elseif($tipo === 'C'){
      
        $coelhos += $quantidade;
    }
}

$percentualRatos = ($ratos / $total) * 100;
$percentualSapos = ($sapos / $total) * 100;
$percentualCoelhos = ($coelhos / $total) * 100;
$percentualRatos = number_format($percentualRatos, 2, ".", "");
$percentualSapos = number_format($percentualSapos, 2, ".", "");
$percentualCoelhos = number_format($percentualCoelhos, 2, ".", "");

echo "Total: $total cobaias\n";
echo "Total de coelhos: $coelhos\n";
echo "Total de ratos: $ratos\n";
echo "Total de sapos: $sapos\n";
echo "Percentual de coelhos: $percentualCoelhos %\n";
echo "Percentual de ratos: $percentualRatos %\n";
echo "Percentual de sapos: $percentualSapos %\n";
?>