<?php
//include "secaoaberta";
 

session_start();
if(!isset($_SESSION["CNPJ"]) || !isset($_SESSION["Senha"])) {
    header("location:login.php");
    exit;
    
}else {
   // echo"<center>Você esta logado<center> '$CNPJ''";
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
    
     <title>Editar cadastro</title>
    <head></head>
    <body>
         <fieldset id="campo">
       <legend class="texto">Editar cadastro</legend>
      <form action="editcadastroCli.php" method="post">
    <label class="texto">Nome:</label>
        <input type="text" name="Nome" maxlength="255"></input>
    <br>  <br>
    <label class="texto">Nome da Empresa:</label>
       <input type="text" name="nome_empresa" maxlength="255"></input>
        <br>  <br>
     <label class="texto">CNPJ</label>
   <input type="text" name="CNPJ" maxlength="14"></input>
<br>  <br>
<label class="texto">Endereço:</label>
<input type="text" name="Endereco"></input>
<br>  <br>
<label class="texto">Telefone:</label>
<input type="text" name="Tel" maxlength="14"></input>
<br>  <br>
<label class="texto">Email</label>
<input type="email" name="email"></input>
<br>  <br>
<label class="texto">Senha</label>
<input type="password" name="Senha" maxlength="8"></input>
<label class="texto">Repita a senha</label>
<input type="password" name="confirma_Senha" maxlength="8"></input>
<input type="submit" name="Editar" value="editar"></input>
</form>
</fieldset>
<fieldset id="campo2"> 
<a class="home" href="telaCli.php">Voltar a pagina inicial</a>
 &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp
<a  class="home" href="excluircadastroCli.php">Excluir cadastro?</a>
</fieldset>


    </body>
</html>