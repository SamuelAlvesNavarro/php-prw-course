<?php

$sc = 2002;

  while(true){
  
    $s = intval(readline());
  
    if($s === $sc){
        echo "Acesso Permitido\n";
        break;
    }else{
        echo "Senha Invalida\n";
    }
  }
?>