<html>
<title></title>
<head></head>
    <body>
    <?php
    include "config.php";
     
    
    $CNPJ=$_POST["CNPJ"];
    $Nome=$_POST["Nome"];
    $ENDERECO=$_POST["Endereco"];
    $Telefone=$_POST["Tel"];
    $Email=$_POST["email"];
    $Senha=$_POST["Senha"];
    $Confirma_Senha=$_POST["confirma_Senha"];
    
    //$sql = mysql_query("INSERT INTO tb_cliente VALUES('$CNPJ','$Nome','$ENDERECO','$Email','$Telefone','$Senha')") or die(mysql_error());
    if($Senha ==$Confirma_Senha){
  $sql =sprintf("insert into tb_forncedor_npj (CNPJ,NOME,ENDERECO,EMAIL,TELEFONE,SENHA) values ('%s','%s','%s','%s','%s','%s')",$CNPJ,$Nome,$ENDERECO,$Telefone,$Email,$Senha);
    
    
      if(mysqli_query($conexao,$sql)){
         //   header("location:index.php");
           echo "dados inseridos com sucesso";
          ?>
          <a href="login.php">efetue o login para continuar</a>
          <?php
        }else{
            
            echo "erro ao iniciar conversa".mysqli_error($conexao);
        }
    
    }
    else{
        echo"<center>Senhas nao conferem,refaça cadastro</center>";
        //header("location:index.php");
    }
    ?>
        <br>
        <a href="login.php">efetue o login para continuar</a>
    </body>
    </html>