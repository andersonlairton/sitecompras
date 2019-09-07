<?php
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
<title>Editar produto</title>
<body>
        <fieldset>
<legend>editar produto</legend>
<form name="editarproduto" action="editproduto.php" method="post" >
<label>Descrição</label>
<input type="text" name="descricao"></input>
<label>Codigo</label>
<input type="text" name="codigo" ></input>
<label>categoria</label>
<input type="text" name="categoria" ></input>
<label>valor minimo</label>
<input type="text" name="valorminimo" ></input>
<label>cnpj vendedor</label>
<input type="text" name="cnpjvendedor" ></input>
<label>medida</label>
<input type="text" name="medida"></input>
<br>
<input type="submit" name="editar" value="editar">
            </form> 
        </fieldset>
<a href="telafornecedor.php">voltar a Minha tela</a>
    <label>ao clicar excluir você declara que esta ciente que seu cadastro sera excluido da nossa base de dados e não ha como desfazer esta ação</label>
        <br>
        <input type="submit" name="excluir" value="excluir"></input>
    <br>
    <a href="telafornecedor.php">Voltar a tela forncedor</a>
    <br>
    <a href="logout.php">Sair</a>
    </form> 
    </body>
</html>