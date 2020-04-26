<?php

    include "config.php";
    $CNPJ=$_POST["CNPJ"]; 
    $Senha=$_POST["Senha"]; 
    $SQL = sprintf("SELECT * FROM tb_forncedor_npj WHERE CNPJ = '$CNPJ' AND SENHA = '$Senha'");
    
    $result = mysqli_query($conexao,$SQL) or die(mysqli_error());//comando sql

    $dado = mysqli_fetch_assoc($result);
   
    $row = mysqli_num_rows($result);//checando no banco se a informção existe

    if ($row== 1){ //condição,se tiver mais qe um registo ele acessa o banco
        
        session_start();
        $_SESSION['CNPJ']=$_POST['CNPJ'];
        $_SESSION['NOME']=$dado['NOME'];
        $_SESSION['ENDERECO']=$dado['ENDERECO'];
        $_SESSION['EMAIL']=$dado['EMAIL'];
        $_SESSION['TELEFONE']=$dado['TELEFONE'];
        $_SESSION['NOME_EMPRESA']=$dado['NOME_EMPRESA'];
        $_SESSION['Senha']=$_POST['Senha'];
        header('Location:telafornecedor.php');
    }else{
        echo"<center>login invalido</center>";
        
    }
?>