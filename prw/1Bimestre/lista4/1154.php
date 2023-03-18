<?php
$cont = 0;
$soma = 0;
  while(true){
    $idade = readline();
    if($idade < 0){
      break;
    } else{
      $soma += $idade;
      $cont++;
    }
  }
  $media = $soma / $cont;
  $media = number_format($media, 2, ".", "");
  print("$media\n");
?>
