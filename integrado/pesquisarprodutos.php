<html>
    <head></head>
    <style></style>
    <link href="estilo.css" rel="stylesheet" type="text/css">
    <title>Meus produtos</title>
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
 //$sql = "select cod_item,descricao,categoria,valor_referencia,unidadedemedida,cnpj_vendedor,telefone from tb_itens,tb_forncedor_npj where cnpj.tb_forncedor_npj=cnpj_vendedor.tb_itens"; // where cnpjvendedor=".$_SESSION['CNPJ'];
      //  $sql = "select cod_item,descricao,categoria,valor_referencia,unidadedemedida,cnpj_vendedor,telefone from tb_itens,tb_forncedor_npj where cnpj=cnpj_vendedor";
        $sql = "select cod_item,descricao,categoria,valor_referencia,unidadedemedida,cnpj_vendedor,telefone,EMAIL,imagem from tb_itens,tb_forncedor_npj where cnpj=cnpj_vendedor";
        $result = mysqli_query($conexao,$sql);
 ?>
        <br>
        <br>
        <fieldset >
            <table  id="campo" border="1"> 
                <tr>
                <td class="texto">cod_item</td>
                <td class="texto">descricao</td>
                <td class="texto">categoria</td>
                <td class="texto">valor_referencia</td>
                <td class="texto">unidadedemedida</td>
                    
                    <td class="texto">Cnpj Vendedor</td>
                    <td class="texto">Telefone</td>
                    <td class="texto">Email</td>
                   
                   
                    </tr>
        <?php
       
        
        while($linha = mysqli_fetch_array($result))
        {?>
                <tr>
                <td class="texto"><?php echo $linha['cod_item']?></td>
                <td class="texto"><?php echo $linha['descricao']?></td>
                      <td class="texto"><?php echo $linha['categoria']?></td>
                      <td class="texto"><?php echo $linha['valor_referencia']?></td>
                      <td class="texto"><?php echo $linha['unidadedemedida']?></td>
                    <td class="texto"><?php echo $linha['cnpj_vendedor']?></td>
                   <td class="texto"><?php echo $linha['telefone']?></td>
                    <td class="texto"><a href="malito:<?php echo $linha['EMAIL']?>"><?php echo $linha['EMAIL']?></a></td>
                  
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
        <a class="texto"href="telaCli.php">Voltar a MINHA TELA</a>
    <br>
    <a class="texto"href="logout.php">Sair</a></body>
</html>