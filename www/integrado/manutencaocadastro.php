<?php
include "secaoaberta.php";
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
	.home{
	font-size: 30px;
	margin-top: 10px;
	color: black,
	}
</style>
    </head>
<title>Alterar cadastro</title>
<body>
    <fieldset class="campo">
    <legend class="texto">Digite seu cnpj e selecione o que deseja fazer com cadastro</legend>
      <form action="deletecadastro.php" method="post">
        <label class="texto">Digite seu cnpj</label>
       <input type="text" name="cnpj"  maxlength="14"></input>
        
    <input type="submit" name="excluir" value="excluir cadastro"></input>
    </form>
    <form name="editar" action="editarcadastro.php" method="post">
        
        <input type="submit" name="editar" value="editar cadastro"></input>
        </form>
<a href="meusdados.php">Meus dados</a>
        <br>
    <label class="texto">ao clicar excluir você declara que esta ciente que seu cadastro sera excluido da nossa base de dados e não ha como desfazer esta ação</label>
    
    </fieldset>
    <br>
    <a href="telafornecedor.php">Voltar a tela forncedor</a>
    <br>
    <a href="logout.php">Sair</a>
    </body>
</html>