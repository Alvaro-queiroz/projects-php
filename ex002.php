<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores em php</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <h1>
            Operadores em PHP
        </h1>
    </header>
    <main>
        <div id="php">
            <?php
                $n1 = $_GET["a"];
                $n2 = $_GET["b"];
                echo "A soma vale ". ($n1 + $n2);
                echo "<br/> A subtração vale " . ($n1 - $n2);
                echo "<br/> A multiplicação vale ". ($n1 * $n2);
                ?>
        </div>
    </main>
</body>
</html>