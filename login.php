
<html>
 <meta charset = "utf-8"/>
  <title> Login  </title>
<head>
<style></style>
    <link rel="stylesheet" type="text/css" href="estilo.css"/>
</head>
<body>
<div id = "mother">
<div id = "head">
<p class="logo" style="color:white"> 
 Safe Trade Place </p>
</div> 

    <form action="validaracesso.php" method="post">
    <label>CNPJ:</label>
    <input type="text" name="CNPJ" maxlength="14"></input>
    <label>Senha:</label>
    <input type="password" name="Senha" maxlength="8"></input>
    <input type="submit" name="Acessar" value="Acessar"></input>
    </form>
<div id= "cadastro" style="color:#349DD1">
<a href="cad_fornecedor.php">Cadastre-se</a>
    <!--<p><small>Ainda não é cadastrado?<a href="index.php">Efetue seu cadastro agora mesmo</a></small></p>-->
</div>
</div>
</body>
</html>