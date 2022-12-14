<?php
if (isset($_GET['erro'])) {
	$erro = $_GET['erro'];
} else {
	$erro = 0;
}

if ($erro == 1) {
	$msg = "Login e/ou Senha invalido(s).";
} else {
    $msg = "";
}
	
?>

<!DOCTYPE html>

<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link href="/style/reset.css" rel="stylesheet"> 
        <link href="/style/cadastro.css" rel="stylesheet">
        <link href="/style/footer.css" rel="stylesheet">

        <link rel = "shortcut icon" type = "imagem/x-icon" href = "/img/user-icon.png"/>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>

    <body class="cad-body">

        <main class="full-page">
            
            <div class="top-titles">
                <h1 class="cad-title">LOGIN</h1>
                <h2 class="cad-title cad-subtitle">Entre na PHP Donations Foundation</h2>
            </div>

            <form class="form-box login" action="./validaLogin.php" method="post">

                <div class="linha-form">
                    <div class="label-input">
                        <label class="cad-label">Email</label>
                        <input class="cad-input" type="email" name="email" placeholder="fulano@gmail.com" required/>
                    </div>
                </div>

                <div class="linha-form">
                    <div class="label-input">
                        <label class="cad-label">Senha</label>
                        <input class="cad-input" type="password" name="senha" required/>
                    </div>
                </div>

                <?php echo "<p><font color='red'>". $msg ."</font></p>"; ?>

                <input class="cad-btn" type="submit" value="Entrar"/>

                <a class="redireciona-cadastro" href="./cadastro-part1.html">Não tem uma conta?</a>

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
    </body>
</html>