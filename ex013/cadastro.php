<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php
$nome = isset($_GET["nome"])?$_GET["nome"]:"[Não informado]";
$tam = isset ($_GET["tam"])?$_GET["tam"]:"12pt";
$cor = isset($_GET["cor"])?$_GET["cor"]:"#00000";
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Enviado</title>
    <style>
        span.texto{
            font-size: <?php echo $tam;?>;
            color: <?php echo $cor;?>;
        }
    </style>
</head>

<body>
    <div>
        <?php
       $ano =isset( $_GET["ano"])? $_GET["ano"]: "[Ano não informado ou não foi localizado]";
       $sexo =isset($_GET["sexo"])? $_GET["sexo"]:"[Sem sexo]";
       $idade = date("Y") - $ano;
    echo "<span class='texto'>$nome é $sexo e tem $idade anos</span><br/>";

    if($idade<18) {
        echo "O site não permite a sua entrada pois você é menor de idade";
    }else{
        echo "O site permite a sua entrada";
    }
        ?>
    </div>
        <a href="checkbox.html">Voltar</a>

</body>
</html>