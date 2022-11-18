<?php
	$conexao = mysqli_connect("127.0.0.1:3306","root","","bd_site")
	or die ("Falha na conexão!");
?>

<!DOCTYPE html>
    <html lang="pt-BR">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <link href="/style/reset.css" rel="stylesheet"> 
            <link href="/style/catalogo.css" rel="stylesheet">
            <link href="/style/footer.css" rel="stylesheet">
            
            <link rel = "shortcut icon" type = "imagem/x-icon" href = "/img/instituicao-ico.png"/>
            <title>Catálogo de Instituições</title>
        </head>

        <body class="catalogo-body">  
            <div class="titles">
                <h1 class="inst-title">Catálogo de Instituições parceiras</h1>
                <h2 class="inst-subtitle">Conheça as instituições parceiras do projeto</h2>
            </div>
            
            <div class="card-wrapper">
                <?php
                    $sql = "SELECT * 
                            FROM instituicoes
                            ORDER BY nome";
                    $tabela = mysqli_query($conexao, $sql);

                    while ($linha = mysqli_fetch_array($tabela))
                    {
                ?>  
                <div class="card-inst">
                    <h2 class="nome-inst"><?php echo $linha["nome"]; ?></h2>

                    <img class="logo-inst" src="/img/instituicao-ico.png">

                    <a href="/api/pagina_doacao/doacao.php?a=<?php echo $linha["nome"];?>"><button class="btn-inst">DOAR</button></a>
                </div> 

                <?php
                }   
                ?>	

            </div>

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