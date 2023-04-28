<?php
    $path = $_POST['pasta'];
    if(is_dir("$path/")){
        $path .= "/";
        $diretorio = dir($path);
    }else{
        echo "Você digitou uma pasta que não existe. Volte <a href='form.html'>aqui</a> e digite o nome correto.";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            width: 150px;
            height: 100px;
        }
    </style>
</head>
<body>
    <?php
        echo "<h1>Imagens:</h1>";
        while($arquivo = $diretorio -> read()){
            echo
            '<tr>
                <img src='. $path.$arquivo .'>
            </tr>';
        }
        $diretorio -> close();
    ?>
</body>
</html>