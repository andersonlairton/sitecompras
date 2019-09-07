<?php
//include "validaracesso";



session_start();
if(!isset($_SESSION["CNPJ"]) || !isset($_SESSION["Senha"])) {
    header("location:login.php");
    exit;
    
}else {
    //echo"<center>Você esta logado<center> '$CNPJ''";
    echo"<center class >Você esta logado<center>".$_SESSION["CNPJ"];
}
 
?>
<html>
<head></head>
    <style></style>
    <link href="estilo.css" rel="stylesheet" type="text/css">
<title>Excluir cadastro</title>
<body>
    <fieldset class="corpo">
    <form action="deletecadastroCli.php" method="post">
        <label class="texto">Digite seu cnpj</label>
        <input type="text" name="cnpj"  maxlength="14"></input>
        <br>
    <label class="Texto">ao clicar excluir você declara que esta ciente que seu cadastro sera excluido da nossa base de dados e não ha como desfazer esta ação</label>
        <br>
        <input type="submit" name="excluir" value="excluir"></input>
    <br>
    <a href="telaCli.php" class="Texto">Voltar a tela forncedor</a>
    <br>
    <a href="logout.php">Sair</a>
               </fieldset>
    </form>
    </body>
</html>