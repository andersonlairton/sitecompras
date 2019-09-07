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
    <head></head>
    <title>Tela fornecedor</title>
    <body>
        <h1>Bem vindo Fornecedor</h1>
        <fieldset>
            <legend>Fornecedor</legend>
            
        <p><a href="produtos.php">Produtos</a></p>
        <p><a href="manutencaocadastro.php">Alterar cadastro</a></p>
        <p><a href="pedidos.php">Meus pedidos</a></p>
        <p><a href="Clientes.php">Meus clientes</a></p>    
       <!-- <form action="enviararquivos.php" method="post" enctype="multipart/form-data">
        <label for="arquivo">arquivo</label>
            <input type="file" name="arquivo" id="arquivo"></input>
        <br>
        <input type="submit" name="submit" value="enviar"></input>
-->
        
            
        
        
        </form>
        </fieldset>

<a href="logout.php">Sair</a>
    </body>
</html>
