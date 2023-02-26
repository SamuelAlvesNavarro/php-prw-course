<?php

    $i = 4;
    $tam = 3;

    echo "Loop Do While<br/>";
    do{
        echo "<pre>Variável i tem o valor: $i<br/>";
        echo "Variável tam tem o valor: $tam</pre><br/>";
        $i++;
    } while($i < $tam);

    echo "<br/><hr><br>";

    echo "Loop While<br><br>";

    $i = 4;
    $tam = 3;
    while($i < $tam){
        echo "<pre>Variável i tem o valor: $i<br/>";
        echo "Variável tam tem o valor: $tam</pre><br/>";
        $i++;
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/hmtl" charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 8 de PHP - Loop Do While</title>
</head>
<body>
    
</body>
</html>