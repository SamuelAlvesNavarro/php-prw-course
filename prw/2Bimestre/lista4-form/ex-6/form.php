<?php
    $frequencia = $_POST['frequencia'];
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    
    $m = ($n1 + $n2) / 2;

    if($frequencia < 75){
        echo "Reprovado por <strong>frequência</strong>";
    } else{
        if($m < 5){
            echo "Reprovado por <strong>nota</strong>";
        }else{
            echo "<strong>Aprovado</strong>";
        }
    }
?>