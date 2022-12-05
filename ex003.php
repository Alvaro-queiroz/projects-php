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
        <h1>Funções Aritméticas</h1>
    </header>
    <main>
    <div id="php">
        <?php
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        echo "Os valores recebidos $v1 e $v2";
        echo "<br/>O valor absoluto de $v2 é ". abs($v2);
        echo "<br/> O valor de $v1<sup> $v2</sup> e " . pow($v1, $v2);
        echo "<br/> A  raiz de $v2 é ". sqrt($v2);
        echo "<br/> O valor arredondado de $v1 é ". round($v1);// ceil: Arredonda pra CIMA   floor: Arrendonda pra BAIXO
        echo "<br/> A parte inteira de $v2 é ". intval($v2);
        echo "<br/> O valor de $v1 em moeda e R$". number_format($v1,2,",", ".");
        ?>
    </div>
    </main>
</body>
</html>