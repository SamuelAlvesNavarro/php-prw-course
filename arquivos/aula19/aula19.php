<?php

    session_start(); // inicia a sessão
    $_SESSION['vnome'] = "Samuel";
    $_SESSION['vtexto'] = "texto para teste";
    $_SESSION['vlog'] = "n";

    //unset($_SESSION['vnome']); deleta variável de sessão

    echo $_SESSION['vnome'];
    echo "<br>" . $_SESSION['vtexto'];

    if(isset($_SESSION['vcanal'])) { // verifica se variável vcanal existe
        echo "<br>" . $_SESSION['vcanal'];
    } else {
        echo "<br>Variável vcanal NÃO foi definida";
    }

    //session_destroy(); // destroí a sessão

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
    <br>
    <a href="pg1.php" target="_self">Segunda página</a>

</body>
</html>