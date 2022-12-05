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
            //operação unária
            $n1=$_GET["x"];
            $n2=$_GET["y"];
            $tipo = $_GET["op"];
            echo "Os valores passados foram $n1 e $n2 <br/>";
            $r = ($tipo == "s")?$n1+$n2:$n1*$n2;

            echo "O resultado é $r";

            ?>
        </div>
    </main>
</body>
</html>