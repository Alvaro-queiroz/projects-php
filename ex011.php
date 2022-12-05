<!DOCTYPE html>
<html lang="pt-br
">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title> Operadores Relacionais</title>
</head>
<body>
    <header>
        <h1>Eleições</h1>
    </header>
    <main>
        <div>
            <?php
            // operadores lógicos
           $ano = $_GET["an"];
           $idade = 2022 - $ano;

            echo "Quem nasceu em  $ano tem idade de $idade anos <br/>";
            echo "Seu voto ".(($idade >= 18 && $idade<65)?"é obrigatório" : "não é obrigatório");
            ?>
        </div>
    </main>
</body>
</html>