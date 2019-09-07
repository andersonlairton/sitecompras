<?php
include "secaoaberta.php";
?> 
<html>
<head>
    </head>
<title>Alterar cadastro</title>
<body>
    <fieldset>
    <legend>Digite seu cnpj e selecione o que deseja fazer com cadastro</legend>
      <form action="deletecadastro.php" method="post">
        <label>Digite seu cnpj</label>
       <input type="text" name="cnpj"  maxlength="14"></input>
        
    <input type="submit" name="excluir" value="excluir cadastro"></input>
    </form>
    <form name="editar" action="editarcadastro.php" method="post">
        
        <input type="submit" name="editar" value="editar cadastro"></input>
        </form>
<a href="meusdados.php">Meus dados</a>
        <br>
    <label>ao clicar excluir você declara que esta ciente que seu cadastro sera excluido da nossa base de dados e não ha como desfazer esta ação</label>
    
    </fieldset>
    <br>
    <a href="telafornecedor.php">Voltar a tela forncedor</a>
    <br>
    <a href="logout.php">Sair</a>
    </body>
</html>