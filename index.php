<?php

    $arquivo = file_get_contents('imagens.json');
    $json = json_decode($arquivo);

    $link = "imagens.xml";
    $xml = simplexml_load_file($link)->materia;

?>

<!DOCTYPE html>


<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style/reset.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/footer.css">

    <link rel="shortcut icon" type="imagem/x-icon" href="/img/doacao-icon.png" />
    <title>PHP Donations Foundation</title>
</head>

<body>
    
    <header class="main-header">
        <div class="icon-header">
            <a href="."><img class="icon" src="img/doacao-icon.png"></a>
        </div>

        <nav class="nav-header">
            <a class="text-header" href="./api/catalogo_instituicoes/catalogo.php">Instituições</a>
            <a class="text-header" href="./api/pagina_doacao/doacao.php">Contribua</a>
        </nav>

        <div class="buttons-header">
            <?php
                session_start();

                if( ( (!isset($_SESSION["logado"])) || ($_SESSION["logado"] != TRUE) ) && ( (!isset($_SESSION["adm_logado"])) || ($_SESSION["adm_logado"] != TRUE) )) {
                    echo "<a href='api/login_e_cadastro/login.php'><button class='text-header btn-nav'>Login</button></a>";
                    echo "<a href='api/login_e_cadastro/cadastro-part1.html'><button class='text-header btn-nav btn-inverso'>Cadastre-se</button></a>";
                } else{
                    echo "<a href='api/login_e_cadastro/sair.php'><button class='text-header btn-nav btn-inverso'>Desconectar</button></a>";
                }
                    
                ?>
        </div>
    </header>


    <main class="main-section">
        <div class="nav-main">
            <a class="no-visited" href="#section-ideia">A IDEIA</a>
            <p>|</p>
            <a class="no-visited" href="#section-sobre">SOBRE NÓS</a>
            <p>|</p>
            <a class="no-visited" href="#section-parceiros">PARCEIROS</a>
        </div>

        <section id="section-ideia">
            <div class="big-title ideia-title">
                <img class="ideia-icon" src="/img/ideia.png">
                <h2>A ideia do projeto</h2>
            </div>

            <p class="ideia-text">
                A PHP Donations Foundation é uma organização sem fins lucrativos fundada em 2022 pelos sócios João, Lucas, Max e Vinicius.
                <br> Sua proposta é arrecadar, processar e distribuir doações monetárias para instituições de caridade, de maneira totalmente automatizada e integrada.
                <br><br>
                Com uma plataforma desenvolvida 100% pela comunidade acadêmica da Fatec Jundiaí, o projeto tem a intenção de arrecadar R$ 55.000.000,00 até o final do ano!
            </p>
        </section>

        <section id="section-sobre">
            <h2 class="big-title sobre-title">Sobre nós</h2>

            <div class="card-wrapper">
                <?php foreach ($json as $registro) {
                    echo "<div class='card-integrante'>
                            <img class='icone-integrante' src='$registro->imagem'>
                            <div class='desc-integrante'>
                                <h3><b></b>$registro->titulo</h3>
                                <span>$registro->cargo</span>
                            </div>
                        </div>";
                }
                ?>
            </div>

        </section>

        <section id="section-parceiros">
            <h2 class="parceiros-title big-title">Uma parceria com:</h2>

            <div class="parceiros-wrapper">
                <?php foreach ($xml->aula as $aula) {
                    echo "<img class='parceiro-icon' src='" . $aula->imagem . "'></img><br/>";
                }
                ?>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-line"></div>

        <div class="social-icon-wrapper">
            <img class="social-icon" src="/img/insta-icon.webp">
            <img class="social-icon" src="/img/face-icon.png">
            <img class="social-icon" src="/img/linkedin-icon.png">
            <img class="social-icon" src="/img/ghub-icon.webp">
        </div>

        <span class="foot-text">
            © PHP Donations Foundation Inc 2022. <br>All Rights Reserved.
        </span>

    </footer>
</body>

</html>