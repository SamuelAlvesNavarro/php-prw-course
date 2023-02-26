<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 43 de PHP - Trabalhando com Arquivos - Parte 3 - Contador de acessos</title>
</head>
<body>

    <?php

        //r = Abre p/leitura, ponteiro no inicio
        //w = Abre p/escrita, ponteiro no inicio e zera, se arquivo não existir ele o cria

        $arquivo = fopen("contador.txt", "r");
        $cont = fread($arquivo, 21);
        $cont++; // $cont+=1; ou $cont=$cont+1;
        $arquivo = fopen("contador.txt", "w");
        fwrite($arquivo, $cont);
        
        fclose($arquivo);
        echo "Quantidade de acessos: $cont<br>";
    ?>

</body>
</html>