<?php

	session_start();
	if(!isset($_SESSION["CNPJ"]) || !isset($_SESSION["Senha"])) {
    	header("location:login.php");
    	exit;
    
	}else {
    	echo"<center>";//ao que parece ,o que mantem a pagina centralizada é essa tag
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
	margin:auto;
	}	
	#campo{
	background-color: #000;
	height: 300px;
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
	.home{
	font-size: 30px;
	margin: auto;
	color: black,
	}
</style></head>
    <title>Tela fornecedor</title>
    <body>
		<div id="body">
        	<h1 id="bemvindo">Bem vindo Fornecedor <?=$_SESSION['NOME']?></h1>
        	<fieldset id="campo">
            	<legend class="texto">Fornecedor</legend>
            
        		<p><a class="texto" href="produtos.php">Produtos</a></p>
        		<p><a class="texto" href="editarcadastro.php">Alterar cadastro</a></p>
        		<p><a  class="texto"href="pedidos.php">Meus pedidos</a></p>

        	</fieldset>
			<a class="home"href="logout.php">Sair</a>
		</div>
    </body>
</html>
