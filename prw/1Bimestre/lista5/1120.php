<?php

while (true) {
  $linha = readline();
  
  if($linha == "0 0"){
    break;
  }

  $var = explode(" ", $linha);
  $digito = $var[0];
  $num = $var[1];
  $result = '';

  for($i = 0; $i < strlen($num); $i++){
    
    if($num[$i] != $digito){
      $result .= $num[$i];
    }
  }

  if ($result == '') {
    echo "0\n";
  } else if(ltrim($result, '0') == ''){
    print("0\n");
  } else{
    print(ltrim($result, '0') . "\n");
  }
}