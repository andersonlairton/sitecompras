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
    <head></head>
    
     <title>Editar cadastro</title>
    <head></head>
    <body>
         <fieldset>
       <legend>Editar cadastro</legend>
      <form action="editcadastro.php" method="post">
    <label>Nome:</label>
        <input type="text" name="Nome" maxlength="255"></input>
    <br>
    <label>Nome da Empresa:</label>
       <input type="text" name="nome_empresa" maxlength="255"></input>
        <br>
     <label>CNPJ</label>
   <input type="text" name="CNPJ" maxlength="14"></input>
<br>
<label>Endereço:</label>
<input type="text" name="Endereco"></input>
<br>
<label>Telefone:</label>
<input type="text" name="Tel" maxlength="14"></input>
<br>
<label>Email</label>
<input type="email" name="email"></input>
<br>
<label>Senha</label>
<input type="password" name="Senha" maxlength="8"></input>
<label>Repita a senha</label>
<input type="password" name="confirma_Senha" maxlength="8"></input>
<input type="submit" name="Editar" value="editar"></input>
</form>
</fieldset> 
<a href="telafornecedor.php">Voltar a pagina inicial</a>
<a href="excluircadastro.php">Excluir cadastro?</a>



    </body>
</html>