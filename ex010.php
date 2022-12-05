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
        <h1>Operadores Relacionais</h1>
    </header>
    <main>
        <div>
            <?php
            // operador unário
            $nota1 = $_GET["n1"];
            $nota2 = $_GET["n2"];
            $sm = ($nota1 + $nota2)/2;
            echo "A média das notas $nota1 em humanas e $nota2 em exatas fica $sm <br/>";
            echo "O aluno ". (($sm >= 5)? "passou!" : "não passou!");// as operações devem ser colocadas entre parênteses 
            ?>
        </div>
    </main>
</body>
</html>