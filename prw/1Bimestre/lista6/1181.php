<?php
  $linha = readline();
    $m = array();
    
    $esc = readline();
    settype($esc, "string");
    
    for($i = 0; $i < 12; $i++){
      for($j = 0; $j < 12; $j++) $m[$i][$j] = readline();
    }
    
    $soma = 0;
    $cont = 0;
    for($j = 0; $j < 12; $j++){
      $soma += $m[$linha][$j];
      $cont++;
    }

    if($esc == "S"){
      $soma = number_format($soma, 1, ".", "");
      print("$soma\n");
      
    }else if($esc == "M"){
      $soma /= $cont;
      $soma = number_format($soma, 1, ".", "");
      print("$soma\n");
    }
?>