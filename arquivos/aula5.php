<?php

//IF-ELSE

$nota = 50;

if($nota >= 70){
    echo "<font color=blue>Aprovado</font>";
} elseif($nota >= 50) {
    echo "<font color=orange>Recuperação</font>";
} else {
    echo "<font color=red>Reprovado</font>";
}

if(($nota >= 40) & ($nota <= 60)){
    echo "<hr>Aluno selecionado";
} else {
    echo "<hr>Aluno fora da faixa";
}
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/hmtl" charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 5 de PHP - Condicional IF-ELSE</title>
</head>
<body>
    
</body>
</html>