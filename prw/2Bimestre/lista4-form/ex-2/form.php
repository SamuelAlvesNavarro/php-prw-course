<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $comentario = $_POST['comentario'];
    $genero = $_POST['genero'];

    $cores = $_POST['cor'];
    $esporte = $_POST['esporte'];

    echo "Bem vindo, $nome, o gênero inserido foi $genero<br>";
    echo "Seu email inserido é: $email. E sua senha inserida é $senha<br>";
    echo "Comentário inserido: $comentario<br>";
    echo "Cor(es):<br>";
    foreach($cores as $key => $value){
        echo ++$key . " $value<br>";
    }
    echo "Seu esporte escolhido é: $esporte<br>";
    
?>