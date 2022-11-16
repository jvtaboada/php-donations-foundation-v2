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

            <link rel = "shortcut icon" type = "imagem/x-icon" href = "/img/engrenagem-icon.png"/>
            <title>Console - Administração</title>
        </head>

        <body>
            <table align="center" border="1" width="50%">
                <tr>
                    <td style="font-weight:bold;font-size:150%" align=center colspan=9>Administração do cadastro de Instituições Parceiras</td>
                </tr>
                <tr>
                    <th>CNPJ</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>CEP</th>
                    <th>Número da Propriedade</th>
                    <th>Complemento</th>
                    <th align="center" colspan="2">
                        <a href="/api/catalogo_instituicoes/dados.php?manut=I">
                            <img align="center" width="25px" height="25px" src="img/adicionar.png" alt="Alterar"/>
                        </a>
                    </th>
                </tr>

                    <?php
                        $sql = "SELECT * 
                                FROM instituicoes
                                ORDER BY nome";
                        $tabela = mysqli_query($conexao, $sql);

                        while ($linha = mysqli_fetch_array($tabela))
                        {
                    ?>
                        <td align="center"><?php echo $linha["cnpj"]; ?></td>
                            <td><?php echo $linha["nome"]; ?></td>
                            <td><?php echo $linha["fk_telefone_telefone_PK"]; ?></td>
                            <td><?php echo $linha["email"]; ?></td>
                            <td><?php echo $linha["fk_endereco_CEP"]; ?></td>
                            <td><?php echo $linha["numero_da_propriedade"]; ?></td>
                            <td><?php echo $linha["complemento"]; ?></td>
                            <td align="center">
                                <a href="/api/catalogo_instituicoes/dados.php?manut=A&cnpj=<?php echo $linha["cnpj"]; ?>">
                                    <img align="center" width="20px" height="20px" src="img/alterar.png" alt="Alterar"/>
                                </a>
                            </td>
                            <td align="center">
                                <a href="/api/catalogo_instituicoes/dados.php?manut=E&cnpj=<?php echo $linha["cnpj"]; ?>">
                                    <img align="center" width="20px" height="20px" src="img/excluir.png" alt="Excluir"/>
                                </a>
                            </td>
                        </tr>

                    <?php
                    }   
                    ?>	
            </table>
        </body>
    </html>