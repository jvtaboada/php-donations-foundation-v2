<!DOCTYPE html>

<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="/style/reset.css" />
        <link rel="stylesheet" href="/style/header.css" />
        <link rel="stylesheet" href="/style/footer.css" />
        <link rel="stylesheet" href="/style/doacao.css" />
        
        <link rel = "shortcut icon" type = "imagem/x-icon" href = "/img/doacao-icon.png"/>
        <title>Faça sua contribuição!</title>
    </head>

    <body>
        <div id="titulo">
            <h1>
                Contribuição
            </h1>
        </div>
        <div class="coluna">
            <div id="preencha">
                <p>Preencha e doe!</p>
            </div>
            <form method="post" action="processamento.php" class="coluna">
                <div class="linha divinput">
                    <input id="nome" type="text" name="nome" placeholder="Fulano da Silva" required />
                    <input id="telefone" type="tel" name="telefone" placeholder="(11) 99184374" required />
                </div>

                <div class="linha divform">
                    <input id="email" type="email" name="email" placeholder="fulano.silva@exemplo.com" required/>
                </div>

                <div class="imagens">
                    <img src="/img/cartao-icon.png" />
                    <img src="/img/pix-icon.png" />
                    <img src="/img/boleto-icon.png" />
                </div>

                <div class="coluna valor">
                    <input type="number" name="valor" id="valor">

                    <!-- nesse select tem que fazer o esquema de ser dinamico -->
                    <select id="instituicao" name="instituicao" >
                        <option value="Apae Jundiai" selected>Apae Jundiai</option>
                        <option value="FebenJundiai">Feben Jundiai</option>
                        <option value="monsenhor">MONSENHOR Jundiai</option>
                    </select>
                </div>
            <button type="submit" name="enviar">Enviar</button>
            </form>
        </div>

    </body>

</html>