<!DOCTYPE html>

<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="/style/reset.css" />
        <link rel="stylesheet" href="/style/header.css" />
        <link rel="stylesheet" href="/style/cadastro.css" />
        <link rel="stylesheet" href="/style/footer.css" />
        
        <link rel = "shortcut icon" type = "imagem/x-icon" href = "/img/doacao-icon.png"/>
        <title>Faça sua contribuição!</title>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
        <script src="/js/jquery.maskMoney.min.js" type="text/javascript"></script>
        <script>
            $(function() {
                $("#valor").maskMoney();
            })
          </script>
    </head>

    <body class="doa-body">
        
        <main class="full-page">
            <div class="top-titles">
                <h1 class="cad-title">Contribuição</h1>
                <h2 class="cad-title cad-subtitle">É simples. Preencha e doe!</h2>
            </div>


            <form class="form-box" action="processamento.php" method="post">

                <div class="linha-form">
                    <div class="label-input nome-60">
                        <label class="cad-label">Nome</label>
                        <input class="cad-input" id="nome" type="text" name="nome" placeholder="Fulano da Silva" required />
                    </div>

                    <div class="label-input tel-40">
                        <label class="cad-label">Telefone</label>
                        <input class="cad-input" id="telefone" type="tel" name="telefone" placeholder="(DDD) 9 9999-9999" required />
                    </div> 
                </div>

                <div class="linha-form">
                    <div class="label-input">
                        <label class="cad-label">Email</label>
                        <input class="cad-input" id="email" type="email" name="email" placeholder="fulano.silva@exemplo.com" required/>
                    </div> 
                </div>

                <div class="imagens">
                    <img src="/img/cartao-icon.png" />
                    <img src="/img/pix-icon.png" />
                    <img src="/img/boleto-icon.png" />
                </div>

                <div class="linha-form">
                    <div class="label-input grana-doa">
                        <label class="cad-label">Valor</label>
                        <input class="cad-input" name="valor" type="text" id="valor" data-thousands="." data-decimal="," data-prefix="R$ " placeholder="R$ 0,00"/>
                    </div>
                </div>

                <div class="linha-form">
                    <div class="label-input">
                        <label class="cad-label">Instituição</label>

                        <select class="cad-input doa-input" id="instituicao" name="instituicao" required>

                            <option value="" selected disabled hidden>Selecione uma instituição</option>

                            <?php
                                $a = $_GET['a'];

                                if(isset($_GET['a'])){
                                    $a = $_GET['a'];
                                } else{
                                    $a = "";
                                }

                               $conexao = mysqli_connect("127.0.0.1:3306","root","","bd_site")
                               or die ("Falha na conexão!");

                               $sql = "SELECT * 
                                       FROM instituicoes
                                       ORDER BY nome";
                               $tabela = mysqli_query($conexao, $sql);

                            

                               while ($linha = mysqli_fetch_array($tabela))
                               {
                           ?>
                               <option value="<?php echo $linha["nome"]; ?>" <?php if($a == $linha["nome"]) echo "selected" ?>  >  <?php echo $linha["nome"]; ?> </option>
       
                           <?php } 

                           ?>

                        </select>

                    </div>
                </div>

                <input class="cad-btn doa-btn" type="submit" name="enviar" value="Contribuir"/>
            </form>
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

        <script src="./teste.js"></script>
    </body>

</html>