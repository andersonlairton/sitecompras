<html>
<title></title>

<head>
    <?php
    include "config.php";


    $CNPJ = $_POST["CNPJ"];
    $Nome = $_POST["Nome"];
    $ENDERECO = $_POST["Endereco"];
    $Telefone = $_POST["Tel"];
    $Email = $_POST["email"];
    $Senha = $_POST["Senha"];
    $Confirma_Senha = $_POST["confirma_Senha"];
    $nome_empresa = $_POST["nome_empresa"];

    //$sql = mysql_query("INSERT INTO tb_cliente VALUES('$CNPJ','$Nome','$ENDERECO','$Email','$Telefone','$Senha')") or die(mysql_error());
    if ($Senha == $Confirma_Senha) {
        $sql = sprintf("insert into tb_forncedor_npj (CNPJ,NOME,ENDERECO,EMAIL,TELEFONE,NOME_EMPRESA,SENHA) values ('%s','%s','%s','%s','%s','%s')", $CNPJ, $Nome, $ENDERECO, $Email, $Telefone, $nome_empresa, $Senha);

// var_dump;;($sql);
// die;
        if (mysqli_query($conexao, $sql)) {
            //   header("location:index.php");
            echo "dados inseridos com sucesso";
            //   header("location:telafornecedor.php");
        } else {

            echo "erro ao iniciar conversa " . mysqli_error($conexao);
        }
    } else {
        echo "<center>Senhas nao conferem,refaça cadastro</center>";
        //header("location:index.php");
    }
    ?>

</head>

</html>