<html>
    <head>
    <link href="estilo.css" rel="stylesheet" type="text/css"</head>
    
     <title>Cadastro Cliente</title>
    <head></head>
    <body>
        
  <h1 class="texto">Efetue seu Cadastro para prosseguir</h1>
        
   <fieldset class="corpo">
       <legend class="texto">Cadastro Comprador</legend>
      <form action="cadastroCliente.php" method="post">
    <label class="texto">Nome:</label>
        <input type="text" name="Nome" maxlength="255"></input>
    <br>
    <label class="texto">Nome da Empresa:</label>
       <input type="text" name="nome_empresa" maxlength="255"></input>
        <br>
    <label class="texto">CNPJ</label>
    <input type="text" name="CNPJ" maxlength="14"></input>
<br>

<label class="texto"> Endereço:</label>
<input type="text" name="Endereco"></input>
<br>
<label class="texto">Telefone:</label>
<input type="text" name="Tel" maxlength="14"></input>
<br>
<label class="texto">Email</label>
<input type="email" name="email"></input>
<br>
<label class="texto">Senha</label>
<input type="password" name="Senha" maxlength="8"></input>
<label class="texto">Repita a senha</label>
<input type="password" name="confirma_Senha" maxlength="8"></input>
<input type="submit" name="Cadastrar" value="Cadastrar"></input>
</form>
</fieldset> 

<p><small>Já possui cadastro? <a href="loginCli.php">Clique aqui!</a></small></p>


    </body>
</html>