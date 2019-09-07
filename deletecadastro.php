<html>
    <title></title>
    <head>
    
    </head>
    <body>
    <?php
        include "config.php";
       // $id = $_GET["id"];
        $cnpj = $_POST["cnpj"];
        
        $sql = sprintf("delete from tb_forncedor_npj where CNPJ='%s'",$cnpj);
      
        if(mysqli_query($conexao,$sql))
        {
            echo "<center>cadastro excluido com sucesso";
             
            
        }else{
           echo "erro ao iniciar conversa".mysqli_error($conexao);
        }
        ?>
        <br>
        <a href="logout.php">Voltar ao inicio</a>
        
    </body>
</html>