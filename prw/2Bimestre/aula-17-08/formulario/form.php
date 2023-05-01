<?php
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    echo "<a href='form.html'><button class='btn-close' arial-labek='Close'></button></a><br>";
    echo "Parabéns por logar $nome, e pela sua idade de $idade<br>";
    echo "<input value=$idade>";

    if($idade >= 18){
        echo "Parabéns você é maior de idade";
    }else{
        echo "Você é um inútil";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .sla{
            animation: sla 10s cubic-bezier(.42,1.81,1,-1.1) infinite;
            margin: 90px;
            color: red;
            font-weight: 200;
            font-size: 7em;
        }
        @keyframes sla {
            from{
                transform: rotate(0deg);
                color: red;
                padding-left: 0;
                background-color: greenyellow;
            }
            to{
                transform: rotate(-360deg);
                color: blue;
                background-color: yellow;
                padding-left: 80%;
            }
        }
    </style>
</head>
<body>
    <p class="sla">
        <?php echo "$nome"; ?>
    </p>
</body>
</html>