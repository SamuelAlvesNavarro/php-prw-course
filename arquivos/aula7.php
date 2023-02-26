<?php

    $i = 0;
    $tam = 5;
    $vet = array($tam);

    while($i < $tam){
        echo "Valor da variável i = $i<br/>";
        $i++;
    }
    echo "<br><hr/><br>";

    $i = 0;
    while($i < $tam){
        $vet[$i] = "PHP";
        $i++;
    }

    $i = 0;
    while($i < $tam){
        echo "$vet[$i]<br/>";
        $i++;
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/hmtl" charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 7 de PHP - Loop While</title>
</head>
<body>
    
</body>
</html>