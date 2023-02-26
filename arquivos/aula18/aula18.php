<?php

    $texto = "Curso de PHP";
    $nome = "Samuel";
    $canal = "vlog do fessor Bruno";

    echo "<a href=pg1.php?tx=". urlencode($texto) . 
    "&no=" . urlencode($nome) . 
    "&cn=" . urlencode($canal) . 
    " target=_self>Abre pg1</a>";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 18 de PHP - Passagem de valores pela url</title>
</head>
<body>
    
</body>
</html>