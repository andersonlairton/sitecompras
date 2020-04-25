<?php
    include "config.php";
include "manutencaocadastro.php";

    
     
    $CNPJ=$_POST["CNPJ"];
    $Nome=$_POST["Nome"];
    $ENDERECO=$_POST["Endereco"];
    $Telefone=$_POST["Tel"];
    $Email=$_POST["email"];
    $Senha=$_POST["Senha"];
    $Confirma_Senha=$_POST["confirma_Senha"];
    //$sql = mysql_query("INSERT INTO tb_cliente VALUES('$CNPJ','$Nome','$ENDERECO','$Email','$Telefone','$Senha')") or die(mysql_error());
    if($Senha ==$Confirma_Senha){
   
  
  $sql =sprintf("update tb_cliente SET NOME='$Nome',ENDERECO='$ENDERECO',EMAIL='$Email',TELEFONE='$Telefone',SENHA='$Senha' WHERE CNPJ=$CNPJ"); 
         //$sql =sprintf("update tb_cliente SET NOME=,ENDERECO,EMAIL,TELEFONE,SENHA) values ('%s','%s','%s','%s','%s','%s')",$Nome,$ENDERECO,$Telefone,$Email,$Senha);
    
    
      if(mysqli_query($conexao,$sql)){
         //   header("location:index.php");
           echo "dados inseridos com sucesso";
        }else{
            
            echo "erro ao atualizar dados".mysqli_error($conexao);
        }
    
    }
    else{
        echo"<center>Senhas nao conferem,refaça cadastro</center>";
        //header("location:index.php");
    }
    ?>
    