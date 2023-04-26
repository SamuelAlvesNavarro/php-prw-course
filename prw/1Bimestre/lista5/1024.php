<?php
$n = readline();

  while($n > 0){
    
    $linha = readline();
    $tamanho = strlen($linha);
    if($tamanho % 2 == 0){
        $metade = ($tamanho / 2);
    }else{
        $metade = (($tamanho-1) / 2);
    }

    for($j = 0; $j < $tamanho; $j++){
        $ascii = ord($linha[$j]);
        if($ascii >= 65 && $ascii <= 90){
            $ascii += 3;
        }
        if($ascii >= 97 && $ascii <= 122){
            $ascii += 3;
        }
        
        if($j < $metade){
          $ascii--;
        }
        
        $linha[$j] = chr($ascii);
    }

    $linha = strrev($linha);


    print("$linha\n");
    $n--;
  
  }
?>