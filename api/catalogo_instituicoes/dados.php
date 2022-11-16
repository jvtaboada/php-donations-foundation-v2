<?php
	$conexao = mysqli_connect("127.0.0.1:3306","root","","bd_site")
	or die ("Falha na conexão!");

    $manut = $_GET["manut"];

    switch ($manut) {
        case "I":
            $botao= "INCLUIR";
            $botao2= "LIMPAR";
            $cnpj= "";
            $nome = "";
            $telefone = "";
            $email = "";
            $cep = "";
            $complemento = "";
            $numero_da_propriedade = "";
            break;
        
        case "A":
            $botao="ALTERAR";
            $botao2= "LIMPAR ALTERAÇÕES";
            $cnpj=$_GET["cnpj"];
            $sql="
            SELECT * 
            FROM instituicoes
            WHERE cnpj=$cnpj";
            $tabela = mysqli_query($conexao, $sql);
            $linha = mysqli_fetch_array($tabela);
            $cnpj = $linha["cnpj"];
            $nome = $linha["nome"];
            $telefone = $linha["fk_telefone_telefone_PK"];
            $email = $linha["email"];
            $cep = $linha["fk_endereco_CEP"];
            $numero_da_propriedade = $linha["numero_da_propriedade"];
            $complemento = $linha["complemento"];
            break;
        
        case "E":
            $botao="EXCLUIR";
            $botao2= "LIMPAR";
            $cnpj=$_GET["cnpj"];
            $sql="
            SELECT * 
            FROM instituicoes
            WHERE cnpj=$cnpj";
            $tabela = mysqli_query($conexao, $sql);
            $linha = mysqli_fetch_array($tabela);
            $cnpj = $linha["cnpj"];
            $nome = $linha["nome"];
            $telefone = $linha["fk_telefone_telefone_PK"];
            $email = $linha["email"];
            $cep = $linha["fk_endereco_CEP"];
            $numero_da_propriedade = $linha["numero_da_propriedade"];
            $complemento = $linha["complemento"];
            break;
            
        default:
            break;
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Instituição</title>
</head>
<body>
    <center>
        <p><b>INSTITUIÇÃO - DADOS</b></p>
        <form action="crud.php" method="post">
            <table>
                <tr>
                    <td>CNPJ :</td>
                    <td><input type="text" name="cnpj" value="<?php echo $cnpj; ?>" required></td>
                </tr>
                <tr>
                    <td>Nome :</td>
                    <td><input type="text" name="nome" value="<?php echo $nome; ?>" required></td>
                </tr>
                <tr>
                    <td>Telefone :</td>
                    <td><input type="text" name="telefone"value="<?php echo $telefone; ?>" required></td>
                </tr>
                <tr>
                    <td>E-mail :</td>
                    <td><input type="email" name="email" value="<?php echo $email; ?>"required></td>
                </tr>
                <tr>
                    <td>CEP :</td>
                    <td><input type="text" name="cep" value="<?php echo $cep; ?>"required></td>
                </tr>
                <tr>
                    <td>Numero da Propriedade :</td>
                    <td><input type="number" name="numero_da_propriedade" value="<?php echo $numero_da_propriedade; ?>"required></td>
                </tr>
                <tr>
                    <td>Complemento :</td>
                    <td><input type="text" name="complemento" value="<?php echo $complemento; ?>"required></td>
                </tr>
                    <td colspan="2">&nbsp;</td>
                <tr>
                    <td><input type="submit" value="<?php echo $botao; ?>" name=botao></td>
                    <td><input type="reset" value="<?php echo $botao2; ?>" name=botao2></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php
	mysqli_close($conexao);
?>