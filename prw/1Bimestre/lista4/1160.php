<?php

  $tempo = readline();
  
  for($i = 0; $i < $tempo; $i++){
    $linha = readline();
    $var = explode(" ", $linha);
    $pa = $var[0];
    $pb = $var[1];
    $g1 = $var[2];
    $g2 = $var[3];
  
    $anos = 0;
  
    while($pa <= $pb){
      $pa += intval($pa * ($g1 / 100));
      $pb += intval($pb * ($g2 / 100));
      $anos++;
        if($anos > 100){
          print("Mais de 1 seculo.\n");
          break;
        }
    }
  
    if($anos <= 100){
      print("$anos anos.\n");
    }
  }

?>