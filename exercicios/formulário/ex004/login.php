<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário login</title>
    <link rel="stylesheet" href="estilo/estilo.css">
</head>
<body>
    <?php
    $usu = $_POST["login"];
    $senha = $_POST["senha"];
    echo "Bem vindo $usu <br/>";
    echo "Sua senha é $senha";
    ?>
</body>
</html>
