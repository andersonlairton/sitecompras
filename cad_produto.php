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
<htm>
    <head></head>
    <title>Cadastro Produto</title>
    <body>
        <fieldset>
            <legend>Cadastrar novo Produto</legend>
            <form name="cadastroproduto" action="salvarproduto.php" method="post" enctype="multipart/form-data">
                <label>Descrição</label>
            <input type="text" name="descricao"></input>
            <label>Codigo</label>
        <input type="text" name="codigo" ></input>
        <label>categoria</label>
    <input type="text" name="categoria" ></input>
    <label>valor minimo</label>
<input type="text" name="valorminimo" ></input>
<label>cnpj vendedor</label>
<input type="text" name="cnpjvendedor"></input>

<label>medida</label>
<input type="text" name="medida"></input>

        <!--<form action="cadastrarproduto.php" method="post" enctype="multipart/form-data">-->
        <label for="arquivo">Imagem:</label>
            <input type="file" name="arquivo" id="arquivo"></input>
        <br>
      <!-- <input type="submit" name="submit" value="enviar"></input>
      <!--  </form>-->
<input type="submit" name="cadastrar" value="cadastrar">
</form> 
        </fieldset>
<a href="telafornecedor.php">voltar a Minha tela</a>


    </body>
</htm>