<?php
    $ano = $_POST['ano'];
    
    if(($ano % 4 == 0) && ($ano % 100 != 0)){
        print("O ano é Bissexto");
    }else{
        print("O ano não é Bissexto");
    }
?>