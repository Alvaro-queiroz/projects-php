<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Variáveis</title>
</head>
<body>
    <header>
        <h1>variáveis referenciadas</h1>
    </header>
    <main>
        <div id="php">
            <?php
            
            $a = 45;
            $b = &$a;
            $b += 55;

            echo "a variável A vale $a";
            echo "<br/> A variável B vale $b";

           
            ?>
        </div>
    </main>
</body>
</html>