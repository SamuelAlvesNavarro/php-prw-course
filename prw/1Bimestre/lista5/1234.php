<?php
	
  while(true){
    $sent = readline();
    
    $tam = strlen($sent);
    $ordem = 0;
    
    if($sent == null || $sent > 50)
    {
      break;
    }
    
    for($i = 0; $i < $tam; $i++){
       if($sent[$i] != " "){
        
         if($ordem == 0){
           $ordem++;
           $sent[$i] = strtoupper($sent[$i]);
           
         }else{
           $ordem = 0;
           $sent[$i] = strtolower($sent[$i]);
         }
       }
    }
    printf($sent . "\n");
    
  }	
?>