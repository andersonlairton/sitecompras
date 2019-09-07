<html>
    <head></head>
    
     <title>Cadastro1</title>
    <head></head>
    <body>
         
  <h1>Efetue seu Cadastro para prosseguir</h1>
        
   <fieldset>
       <legend>Cadastro Comprador</legend>
      <form action="cadastroFornecedor.php" method="post">
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
<input type="submit" name="Cadastrar" value="Cadastrar"></input>
</form>
</fieldset> 

<p><small>Já possui cadastro? <a href="login.php">Clique aqui!</a></small></p>


    </body>
</html>