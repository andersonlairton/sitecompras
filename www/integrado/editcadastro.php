<?php
    session_start();
    include "config.php";
    

    $CNPJ=$_SESSION['CNPJ'];
    $Nome=$_POST["Nome"];
    $ENDERECO=$_POST["Endereco"];
    $Telefone=$_POST["Tel"];
    $Email=$_POST["email"];
    $Senha=$_POST["Senha"];
    $Confirma_Senha=$_POST["confirma_Senha"];
    $Nome_Empresa=$_POST["nome_empresa"];
    
   /** pesquisar como faz toda esta ação por ajax ou por js para que a pagina nao seja atualizada */
    if($Senha ==$Confirma_Senha){
        if($_SESSION['Senha']==$Senha){
            $sql =sprintf("update tb_forncedor_npj SET 
            NOME='$Nome',
            ENDERECO='$ENDERECO',
            EMAIL='$Email',
            TELEFONE='$Telefone',
            SENHA='$Senha',
            NOME_EMPRESA='$Nome_Empresa'
            WHERE CNPJ=$CNPJ"); 
         
            if(mysqli_query($conexao,$sql)){
               
                $_SESSION['NOME']=$_POST["Nome"];
                $_SESSION['ENDERECO']=$_POST["Endereco"];;
                $_SESSION['EMAIL']=$_POST["email"];
                $_SESSION['TELEFONE']=$_POST["Tel"];
                $_SESSION['NOME_EMPRESA']=$_POST["nome_empresa"];

                echo "<script>alert('dados atualizados com sucesso')</script>";
            }else{
            
                echo "<script>alert('erro ao atualizar dados!!')</script>".mysqli_error($conexao);
            }
        }
    }else{
        echo"<script>alert('Senhas nao conferem,refaça cadastro')</script>";
        //header("location:index.php");
    }
    include "editarcadastro.php";
?>
    