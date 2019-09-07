<?php
//include "secaoaberta";
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
<head>
    </head>
<title>Tela Cliente</title>
<body>
    <fieldset>
        <a href="meusfornecedores.php">meus fornecedores</a>
        <br>
        <a href="pesquisarprodutos.php">pesquisar produtos</a>
        <br>
        <a href="meusdados.php">Meus dados</a>
        <form name="pesquisar" action="pesquisarproduto.php" method="post">
        </form>
    </fieldset>
    <a href="logout.php">Sair</a>
    
    </body>
</html>