
<html>
<title></title>
<head>
   
    <?php
   include "config.php";//0606
   $CNPJ=$_POST["CNPJ"]; 
   $Senha=$_POST["Senha"]; 
   
    session_start();
    //include "config.php";
    
    $SQL = sprintf("SELECT * FROM tb_forncedor_npj WHERE CNPJ = '$CNPJ' AND Senha = '$Senha'");
    
  
    
    $result = mysqli_query($conexao,$SQL) or die(mysqli_error());//comando sql
    $row = mysqli_num_rows($result);//checando no banco se a informção existe
    
    if ($row> 0){ //condição,se tiver mais qe um registo ele acessa o banco
      session_start();
        $_SESSION['CNPJ']=$_POST['CNPJ'];
        
        $_SESSION['Senha']=$_POST['Senha'];
        
        echo "<center>Login feito com sucesso $CNPJ";
       // $_SESSION['mycnpj'] =$CNPJ['CNPJ'];
       //  $_SESSION["mycnpj"] = $CNPJ["CNPJ"];
        header("location:telafornecedor.php");
        $SQL2 = sprintf("SELECT NOME FROM tb_cliente WHERE CNPJ = $CNPJ");
        $_SESSION['MYNAME']=$SQL2["NOME"];
        
    }else{
        echo"<center>login invalido</center>";
        
    }
    
    
    ?>
    
    </head>
</html>
    
  