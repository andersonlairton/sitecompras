<?php
//include "secaoaberta";



session_start();
if(!isset($_SESSION["CNPJ"]) || !isset($_SESSION["Senha"])) {
    header("location:login.php");
    exit;
    
}else {
    //echo"<center>Você esta logado<center> '$CNPJ''";
    echo"<center>Você esta logado<center>".$_SESSION['CNPJ'];
}

?>
<html>
<head></head>
<title>Excluir produto</title>
<body>
    <fieldset>
    <form action="deleteproduto.php" method="post">
        <label>Digite o codigo do produto</label>
        <input type="text" name="codigo"  maxlength="14"></input>
        <br>
    <label>ao clicar excluir você declara que esta ciente que o produto sera excluido da nossa base de dados e não ha como desfazer esta ação</label>
        <br>
        <input type="submit" name="excluir" value="excluir"></input>
    <br>
    <a href="telafornecedor.php">Voltar a tela forncedor</a>
    <br>
    <a href="logout.php">Sair</a>
               </fieldset>
    </form>
    </body>
</html>