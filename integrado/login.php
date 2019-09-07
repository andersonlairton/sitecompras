<!Doctype html>
<html>
 <meta charset = "utf-8"/>
  <title> Safe Trade Place  </title>
<head>
<style>

body{
	background-image:url(foto_1.jpg);
	background-attachment: fixed;
	background-size: 100%;
	background-repeat: no-repeat;
	background-color: #000;
}

#mother{
	height: 320px;
	width: 328px;
	border:;
	float: center;
	margin-top: 95px;
	margin-left: 1558px;
}

form{
	margin-top: 0px;
	margin-right: 40px;
	float: right;
	font-size: 20px;
	color: orange;
	
}

.logo{
	text-align: center;
	font-size: 30px;
}

#cadastro{
	font-size: 30px;
	margin-top: 10px;
	color: #349DD1
}

</style>
</head>
<body>

<div id = "mother">

<div id = "head">
<p class="logo" style="color:white">
    <font size="6" face="Monospace">
  Safe Trade Place </p>
</div> 

 <!--<form>
 -Nome:<br>
 <input type="text" name"firstname" value=" ">
 <br>
 Senha:<br>
 <input type="password" name="senha">
 <br><br>
 <!-- <a href="safe_trade_place_fornecedor.html" target="_self">
   <input type="submit" value="Entrar" ></input> </a>-->

 <form action="validaracesso.php" method="post">
 CNPJ:<br>
<input type="text" name="CNPJ" maxlength="14"></input>
 <br>
 Senha:<br>
 <input type="password" name="Senha" maxlength="8"></input>
 <br><br>
   <input type="submit" name="Acessar" value="Acessar"></input>
<div id= "cadastro" style="color:#349DD1">
 <font size="3" face="Times New Romam">
	Não possui cadastro? <a href="cadastro.php">Cadastre-se</a>
     <br>
     <a href="loginCli.php">login Cliente</a>
</div>
 </form>
  <!--</form>-->
</div>
</body>
</html>