<?php
//include "validaracesso";



session_start();
if(!isset($_SESSION["CNPJ"]) || !isset($_SESSION["Senha"])) {
    header("location:login.php");
    exit;
    
}else {
    //echo"<center>Você esta logado<center> '$CNPJ''";
    echo"<center>Você esta logado<center>".$_SESSION['mycnpj'];
}
 
?>
<html>
<head></head>
<title>Excluir cadastro</title>
<body>
    <fieldset>
    <form action="deletecadastro.php" method="post">
        <label>Digite seu cnpj</label>
        <input type="text" name="cnpj"  maxlength="14"></input>
        <br>
    <label>ao clicar excluir você declara que esta ciente que seu cadastro sera excluido da nossa base de dados e não ha como desfazer esta ação</label>
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