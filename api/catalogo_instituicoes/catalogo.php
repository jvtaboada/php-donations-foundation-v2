<?php
	$conexao = mysqli_connect("127.0.0.1:3306","root","","bd_site")
	or die ("Falha na conexão!");
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <link href="/style/reset.css" rel="stylesheet"> 
            <link href="/style/instituicoes.css" rel="stylesheet">
            <link href="/style/footer.css" rel="stylesheet">

            <link rel = "shortcut icon" type = "imagem/x-icon" href = "/img/instituicao-ico.png"/>
            <title>Catálogo de Instituições</title>
        </head>

        <body>  
            <h1>Titulo da div</h1>
            
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
        </body>
    </html>