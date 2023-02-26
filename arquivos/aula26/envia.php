<?php

    $vmail = $_POST['email_txt'];
    $vassunto = $_POST['assunto_txt'];
    $vmsg = $_POST['msg_txt'];    


    if(mail($vmail, $vassunto, $vmsg, "From:outroEmail@gmail.com\nReply-To: resp_samu@gmail.com")){ //opções de cabeçalho Cc Bcc Comments Content-Type:text/html Date
        echo "Mensagem enviada<br>";
        echo "<a href=aula26.php target=_self>voltar</a>";
    } else {
        echo "Erro ao enviar, tente novamente";
    }


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 26 de PHP - Enviando e-mails</title>
</head>
<body>

</body>
</html>