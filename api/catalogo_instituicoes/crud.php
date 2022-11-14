<?php

    $conexao = mysqli_connect("127.0.0.1:3306","root","root","bd_php-donation")
    or die ("Falha na conexão");

    $cnpj=$_POST["cnpj"];

    if(isset($_POST["nome"])){
        $nome = $_POST["nome"];
    } else {
        $nome = "";
    }
    if(isset($_POST["telefone"])){
        $telefone = $_POST["telefone"];
    } else {
        $telefone = "";
    }
    if(isset($_POST["email"])){
        $email = $_POST["email"];
    } else {
        $email = "";
    }
    if(isset($_POST["cep"])){
        $cep = $_POST["cep"];
    } else {
        $cep = "";
    }
    if(isset($_POST["complemento"])){
        $complemento = $_POST["complemento"];
    } else {
        $complemento = "";
    }
    if(isset($_POST["numero_da_propriedade"])){
        $numero_da_propriedade = $_POST["numero_da_propriedade"];
    } else {
        $numero_da_propriedade = "";
    }
    
    $botao=$_POST["botao"];

    switch($botao){
        case "INCLUIR":
            $sql = "INSERT INTO instituicoes
            (cnpj, nome, fk_telefone_telefone_PK, email, fk_endereco_CEP, complemento, numero_da_propriedade)
            VALUES 
            ('$cnpj', '$nome', '$telefone', '$email', '$cep', '$complemento', '$numero_da_propriedade' )";
            break;

        case "ALTERAR":
            $sql = "UPDATE instituicoes SET
            cnpj='$cnpj',
            nome='$nome',
            fk_telefone_telefone_PK='$telefone',
            email='$email',
            fk_endereco_CEP='$cep',
            complemento='$complemento',
            numero_da_propriedade='$numero_da_propriedade'
            WHERE cnpj=$cnpj";
            break;

        case "EXCLUIR":
            $sql = "DELETE FROM instituicoes
            WHERE cnpj=$cnpj";
            break;
    }

    mysqli_query($conexao, $sql);
    mysqli_close($conexao);
    header('location: catalogo.php');
?>