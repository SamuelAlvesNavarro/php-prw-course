<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $idadeErro = $periodoErro = $moduloErro = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if($_POST['idade'] < 15 || $_POST['idade'] > 75){
            $idadeErro = "Idade incorreta";
        }
        if($_POST['periodo'] != 'V' || $_POST['periodo'] != 'N'){
            $periodoErro = "Período inexistente!";
        }
        if($_POST['modulo'] < 1 || $_POST['modulo'] > 4){
            $moduloErro = "Módulo inexistente!";
        }
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="">Prontuário: </label>
        <input type="text" name="prontuario" required><br><br>
        <label for="">Nome: </label>
        <input type="text" name="nome" required><br><br>
        <label for="">Idade: </label>
        <input type="number" name="idade"><span> <?php echo $idadeErro;?></span><br><br>
        <label for="">Período: </label>
        <input type="text" name="periodo"><span> <?php echo $periodoErro;?></span><br><br>
        <label for="">Módulo: </label>
        <input type="number" name="modulo"><span> <?php echo $moduloErro;?></span><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>