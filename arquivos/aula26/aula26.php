<?php


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 26 de PHP - Enviando e-mail</title>
</head>
<body>

    <form name="email" method="post" action="envia.php">
        <label>e-mail</label><br>
        <input type="email" name="email_txt"><br>
        <label>Assunto</label><br>
        <input type="text" name="assunto_txt"><br>
        <label>Mensagem</label><br>
        <textarea name="msg_txt" cols="50" rows="5"></textarea><br>
        <input type="submit" value="enviar">
    </form>

</body>
</html>