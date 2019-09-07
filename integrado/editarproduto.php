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
<head>
    <link href="estilo.css" rel="stylesheet" type="text/css"</head>
<title>Editar produto</title>
<body>
        <fieldset class="corpo">
<legend class="texto">editar produto</legend>
<form name="editarproduto" action="editproduto.php" method="post" >
<label class="texto">Descrição</label>
<input type="text" name="descricao"></input>
<label class="texto">Codigo</label>
<input type="text" name="codigo" ></input>
<label class="texto">categoria</label>
<input type="text" name="categoria" ></input>
<label class="texto">valor minimo</label>
<input type="text" name="valorminimo" ></input>
<label class="texto">cnpj vendedor</label>
<input type="text" name="cnpjvendedor" ></input>
<label class="texto">medida</label>
<input type="text" name="medida"></input>
<br>
<input type="submit" name="editar" value="editar">
            </form> 
        </fieldset>
<a href="telafornecedor.php">voltar a Minha tela</a>
    
        <br>
        <a href="excluirproduto.php">Excluir produto</a>
    <br>
    <a href="telafornecedor.php" class="texto">Voltar a tela forncedor</a>
    <br>
    <a href="logout.php" class="texto">Sair</a>
    </form> 
    </body>
</html>