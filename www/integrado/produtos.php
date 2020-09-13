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
    
<style>
	body{
	background-image:url(foto_1.jpg);
	background-attachment: fixed;
	background-size: 100%;
	background-repeat: no-repeat;
	background-color: #000;
	}	
	#campo{
	background-color: #000;
	height: 150px;
	width: 600px;
	}
	#campo2{
	background-color: #000;
	height: 40px;
	width: 600px;
	}
	.texto{
	color: white;
	}
	.home{
	font-size: 30px;
	margin-top: 10px;
	color: black,
	}
</style>
    </head>
<body>
    <fieldset id="campo">
		<a href="Views/Produtos/listProdutos.php" class="texto">Meus produtos(desenvolvimento)</a>
		<br>
        <a href="meusprodutos.php" class="texto">meus produtos</a>
        <br>  <br>
    <a class="texto"href="cad_produto.php">cadastrar novo produto</a>
        <br>  <br>
        <a  class="texto" href="editarproduto.php">editar produto</a>
        <br>  <br>
        <a  class="texto" href="excluirproduto.php">Excluir produto</a>
        </fieldset>
    <a  class="home" href="telafornecedor.php">voltar a Minha tela</a>
    </body>
</html>