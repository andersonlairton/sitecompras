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
	height: 150	px;
	width: 100%;
	}
	#campo2{
	background-color: #000;
	height: 140px;
	width: 100%;
	}
	.texto{
	color: white;
	font-size: 25px;
	}
	.texto2{
	color: white;
	}
	.home{
	font-size: 30px;
	margin-top: 10px;
	color: white,
	}
</style>
</head>
<title>Excluir produto</title>
<body>
    <fieldset id="campo">
    <form action="deleteproduto.php" method="post">
        <label class="texto2">Digite o codigo do produto</label>
		 <br>
        <input type="text" name="codigo"  maxlength="14"></input>
        <br>  <br>
    <label class="texto2">ao clicar em excluir você declara que esta ciente que o produto sera excluido da nossa base de dados e não há como desfazer esta ação</label>
        <br>  <br>
        <input type="submit" name="excluir" value="excluir"></input>
    <br>  <br>
    <a class="texto2" href="telafornecedor.php">Voltar a tela forncedor</a>
    <br>  <br>
    <a class="texto2" href="logout.php">Sair</a>
   
               </fieldset>
    </form>
    </body>
</html>