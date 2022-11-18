<?php
    // tratamento data-hora
    date_default_timezone_set("America/Sao_Paulo");
    $mes = date('M');
    $mes_portugues = array(
        'Jan' => 'JAN',
        'Feb' => 'FEV',
        'Mar' => 'MAR',
        'Apr' => 'ABR',
        'May' => 'MAI',
        'Jun' => 'JUN',
        'Jul' => 'JUL',
        'Aug' => 'AGO',
        'Sep' => 'SET',
        'Oct' => 'OUT',
        'Nov' => 'NOV',
        'Dec' => 'DEZ'
    );

    if (isset($_POST["nome"])) {
        $nome = $_POST["nome"];
    } else {
        $nome = "";
    }

    if (isset($_POST["email"])) {
        $email = $_POST["email"];
    } else {
        $email = "";
    }

    if (isset($_POST["instituicao"])) {
        $instituicao = $_POST["instituicao"];
    } else {
        $instituicao = "";
    }

    if (isset($_POST["data"])) {
        $data = $_POST["data"];
    } else {
        $data = "";
    }

    if (isset($_POST["valor"])) {
        $valor = $_POST["valor"];
    } else {
        $valor = 0;
    }

    // tratamento de primeiro nome
    $primeiro_nome = explode(" ", $nome);
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="/style/reset.css" rel="stylesheet">
        <link href="/style/processamento-page.css" rel="stylesheet">

        <link rel = "shortcut icon" type = "imagem/x-icon" href = "/img/check-icon.png">
        <title>Transação bem sucedida</title>
    </head>

    <body class="processa-body">
        <div class="bcg-recibo">
            <h1 class="main-title">Obrigado pela doação, <?php echo $primeiro_nome[0]?>!</h1> 

            <div> <i> <?php 
                echo date('d') . " " .  $mes_portugues["$mes"] . " " . date('Y') . ", " . date("H:i:s"); 
            ?></i></div>
            
            <img class="img-check" src="/img/check-icone.png" title="Valor Transferido com sucesso"> 

            <p class="transacao-sucesso">
                Sua transação no valor de <b> R$ <?php echo $valor?> </b> foi enviada com sucesso para a instituição <?php echo $instituicao?>.
            </p>

            <span class="comprovante-email">Fique tranquilo, o recibo da sua doação foi encaminhado para o e-mail <?php echo $email ?></span>
        </div>
    </body>
</html>