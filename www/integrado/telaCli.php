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

	}
        #bemvindo{
	font-family: Impact, Charcoal, sans-serif;
	font-size: 40px;
	letter-spacing: 0px;
	word-spacing: 2px;
	color: #FFFFEB;
	font-weight: 400;
	text-decoration: none solid rgb(68, 68, 68);
	font-style: normal;
	font-variant: normal;
	text-transform: none;
	text-shadow: -9px 4px 5px #1C0BFF;
}
        .texto{
	color: red;
            font-size: 25px;
	}
	.h

    </style>
    <!--<link href="estilo.css" rel="stylesheet" type="text/css">-->
    </head>
<title>Tela Cliente</title>
<body>
     <h1 id="bemvindo">Bem vindo Cliente</h1>
    <iframe></iframe><fieldset  id="campo">
     <!--   <a href="meusfornecedores.php">meus fornecedores</a>-->
        <br>
        <a href="pesquisarprodutos.php">pesquisar produtos</a>
        <br>
        <a href="meusdados.php">Meus dados</a>
        <form name="pesquisar" action="pesquisarproduto.php" method="post">
        </form>
    </fieldset>
    <a  class="texto" href="logout.php">Sair</a>
    
    
    
    </body>
</html>