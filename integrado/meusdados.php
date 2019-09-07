<html>
    <head>
        <link href="estilo.css" rel="stylesheet" type="text/css">
    </head>
    <style></style>
    
    <title>Meus dados Cliente</title>
    
    <body> 
        <fieldset class="campo">
    <legend class="texto">Digite seu cnpj e selecione o que deseja fazer com cadastro</legend>
      <form action="deletecadastroCli.php" method="post">
        <label class="texto">Digite seu cnpj</label>
       <input type="text" name="cnpj"  maxlength="14"></input>
        
    <input type="submit" name="excluir" value="excluir cadastro"></input>
    </form>
    <form name="editar" action="editarcadastroCli.php" method="post">
        
        <input type="submit" name="editar" value="editar cadastro"></input>
        </form>
<a href="meusdadosCli.php">Meus dados</a>
        <br>
    <label class="texto">ao clicar excluir você declara que esta ciente que seu cadastro sera excluido da nossa base de dados e não ha como desfazer esta ação</label>
    
    </fieldset>
    <br>
    <a href="telaCli.php">Voltar a minha area</a>
    <br>
    <a href="logout.php">Sair</a></body>
</html>