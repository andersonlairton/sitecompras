<?php
include "validaracesso.php";

// $CNPJ = $_REQUEST["CNPJ"]; //pegando dados digitados pelo usuario
  //  $Senha = $_REQUEST["Senha"];
 
//session_start();
//echo $_SESSION["CNPJ"];
//die;
if(!isset($_SESSION["CNPJ"]) || !isset($_SESSION["Senha"])) {
    header("location:login.php");
    exit;
    
}else {
    echo"<center>esta merda esta funcionando ".$_SESSION['CNPJ'];
   // echo"<center>Você esta logado<center> '$CNPJ''";
   // echo"<center>Você esta logado<center>".$_SESSION['mycnpj'];
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
	margin-top: 10px;
	color: black,
	}
</style></head>
    <title>Tela fornecedor</title>
    <body>
        <h1 id="bemvindo">Bem vindo Fornecedor</h1>
        <fieldset id="campo">
            <legend class="texto">Fornecedor</legend>
            
        <p><a class="texto" href="produtos.php">Produtos</a></p>
        <p><a class="texto" href="manutencaocadastro.php">Alterar cadastro</a></p>
        <p><a  class="texto"href="pedidos.php">Meus pedidos</a></p>
        <!--<p><a class="texto" href="Clientes.php">Meus clientes</a></p>    
       <!-- <form action="enviararquivos.php" method="post" enctype="multipart/form-data">
        <label for="arquivo">arquivo</label>
            <input type="file" name="arquivo" id="arquivo"></input>
        <br>
        <input type="submit" name="submit" value="enviar"></input>
-->
        
            
        
        
        </form>
        </fieldset>

<a class="home"href="logout.php">Sair</a>
    </body>
</html>
