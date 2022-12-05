<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Funções aritméticas</title>
</head>
<body>
    <header>
        <h1>Facilitando Atribuições</h1>
    </header>
    <main>
        <div id="php">
            <?php
            
            //a<-1
            $atual = $_GET["x"];
            
            echo "O ano atual é $atual ";
            echo "e o Ano anterior é o ". --$atual;

           
            ?>
        </div>
    </main>
</body>
</html>