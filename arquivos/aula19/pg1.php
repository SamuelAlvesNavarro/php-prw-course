<?php

    session_start();

    if($_SESSION['vlog'] == 's') {

    $_SESSION['vcanal'] = "vlog do fessor Bruno"; // cria variável vcanal
    
    echo "<h3>Segunda página </h3>";
    
    echo $_SESSION['vnome'];
    echo "<br>" . $_SESSION['vtexto'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 19 de PHP - Sessão</title>
</head>
<body>

    <br><br>
    <a href="aula19.php" target="_self">voltar aula 19</a><br>
    <a href="pg2.php" target="_self">Terceira página</a>

</body>
</html>

<?php
    } else {
        echo "Acesso indevido...";
    }
    
?>