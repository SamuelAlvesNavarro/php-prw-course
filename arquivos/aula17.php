<?php

    if(isset($_POST["f_nome"])){
        $vnome = $_POST["f_nome"];
        echo "Nome: $vnome<br>";
    } else {
        echo "Dados não submetidos";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 17 de PHP - Isset</title>
</head>
<body>
    <br><br>
    <form name="f_aula" method="post" action="aula17.php">
        <label for="">Nome:</label><br>
        <input type="text" name="f_nome"><br>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>

<?php
    }
?>