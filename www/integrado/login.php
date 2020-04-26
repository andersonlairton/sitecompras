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
				color: white;
			}

			#cadastro{
				font-size: 15px;
				font-style: Times New Romam;
				margin-top: 10px;
				color: #349DD1
	
			}

		</style>
	</head>
	<body>

		<div id = "mother">

			<div id = "head">
				<p class="logo" face="Monospace">Safe Trade Place </p>
			</div> 

 			<form action="validaracesso.php" method="post">
 				CNPJ:<br>
				<input type="text" name="CNPJ" maxlength="14"></input>
 				<br>
 				Senha:<br>
 				<input type="password" name="Senha" maxlength="8"></input>
 				<br><br>
   				<input type="submit" name="Acessar" value="Acessar"></input>
				<div id= "cadastro">
					Não possui cadastro? <a href="cadastro.php">Cadastre-se</a>
     				<br>
     				<a href="loginCli.php">login Cliente</a>
				</div>
 			</form>
		</div>
	</body>
</html>