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
            $preço = $_GET["x"];
            

            echo "O produto que vale R$ ". number_format($preço,2, ",",".");
            
            $preço -= $preço*10/100;

           echo "<br/> com 10% de desconto fica R$ ". number_format($preço,2, ",",".");

           
            ?>
        </div>
    </main>
</body>
</html>