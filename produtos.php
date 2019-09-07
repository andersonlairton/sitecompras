<?php
//include "validaracesso";
 
session_start();
if(!isset($_SESSION["CNPJ"]) || !isset($_SESSION["Senha"])) {
    header("location:login.php");
    exit;
    
}else {
    //echo"<center>Você esta logado<center> '$CNPJ''";
    echo"<center>Você esta logado<center>".$_SESSION["CNPJ"];
}

?>
<html>
<title>Produtos</title>
<head>
    </head>
<body>
    <fieldset>
    <a href="cad_produto.php">cadastrar novo produto</a>
        <br>
        <a href="editarproduto.php">editar produto</a>
        <br>
        <a href="excluirproduto.php">Excluir produto</a>
        <br>
        <a href="meusprodutos.php">meus produtos</a>
        </fieldset>
    <a href="telafornecedor.php">voltar a Minha tela</a>
    </body>
</html>