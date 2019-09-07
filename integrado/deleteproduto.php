<html>
    <title></title>
    <head>
    
    </head>
    <body>
    <?php
        include "config.php";
       // $id = $_GET["id"];
        $coditem = $_POST["codigo"];
        
        $sql = sprintf("delete from tb_itens where cod_item='%s'",$coditem);
      
        if(mysqli_query($conexao,$sql))
        {
            echo "<center>item excluido com sucesso";
            
            
        }else{
           echo "erro ao iniciar conversa".mysqli_error($conexao);
        }
        ?>
        <br>
        <a href="telafornecedor.php">Voltar ao inicio</a>
        
    </body>
</html>