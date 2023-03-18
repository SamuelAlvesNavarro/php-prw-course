<?php
$jogos = 1;
$empate = 0;
$inter = 0;
$gremio = 0;
  do{
    $linha1 = readline();
    $var = explode(" ", $linha1);
    $interGols = $var[0];
    $gremioGols = $var[1];
    if($interGols > $gremioGols){
      $inter++;
    }elseif ($interGols < $gremioGols){
      
      $gremio++;
    } else{
      
      $empate++;
    }
    print("Novo grenal (1-sim 2-nao)\n");
    $novo = readline();
    
    if($novo == 1){
      
      $jogos++;
      
    } else{
      $novo = 0;
    }
    
  }while($novo == 1);
  
  print("$jogos grenais\n");
  print("Inter:$inter\n");
  print("Gremio:$gremio\n");
  print("Empates:$empate\n");
  if($inter > $gremio){
    print("Inter venceu mais\n");
  } else{
    if($inter == $gremio){
      print("Nao houve vencedor\n");
    } else {
      print("Gremio venceu mais\n");
    }
  }
  
?>