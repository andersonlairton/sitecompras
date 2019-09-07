
<html>
    <title>Meus Pedidos</title>
    <head></head>
    <body>
        <?php
        include "config.php";
session_start();
if(!isset($_SESSION["CNPJ"]) || !isset($_SESSION["Senha"])) {
    header("location:login.php");
    exit;
    
}else {
    //echo"<center>Você esta logado<center> '$CNPJ''";
    echo"<center>Você esta logado<center>".$_SESSION['CNPJ'];
   
}//40044828
   // 08009704828
 $sql = "select * from tb_pedidos where cnpjvendedor=".$_SESSION['CNPJ'];
        $result = mysqli_query($conexao,$sql);
 ?>
        <br>
        <br>
        <fieldset>
            <table border="1"> 
                <tr>
                <td>Codigo do pedido:</td>
                <td>Codigo Produto</td>
                <td>Quantidade</td>
                <td>Cnpj Vendedor</td>
                <td>Cnpj Cliente</td>
                    </tr>
        <?php
       
        
        while($linha = mysqli_fetch_array($result))
        {?>
                <tr>
                <td><?php echo $linha['cod_pedido']?></td>
                <td><?php echo $linha['codproduto']?></td>
                      <td><?php echo $linha['quantidade']?></td>
                      <td><?php echo $linha['cnpjvendedor']?></td>
                      <td><?php echo $linha['cnpjcliente']?></td>
                </tr>
                <?php
            //print "Codigo do pedido:".$linha['cod_pedido']."- Codigo Produto:".$linha['codproduto']."id=".$linha['quantidade']."Cnpj do Vendendor=".$linha['cnpjvendedor']."cnpj Cliente".$linha['cnpjcliente']."<br>";
           // print "usuario:".$linha['usuario']."- mensagem: ".$linha['mensagem']."id=".$linha['id']." - <a href='excluirconversa.php?id=".$linha['id']."'>-Excluir</a>"."<a href='formeditar.php?id=".$linha['id']."'>-editar</a><br>"; 
            
            
        }
        
        mysqli_free_result($result);
        mysqli_close($conexao);
        ?>
                </table>
            </fieldset>
        <a href="telafornecedor.php">Voltar a tela forncedor</a>
    <br>
    <a href="logout.php">Sair</a>
    </body>
</html>