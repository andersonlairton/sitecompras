<html>
<head>
    <?php
//include "validaracesso";

session_start();
if(!isset($_SESSION["CNPJ"]) || !isset($_SESSION["Senha"])) {
    header("location:login.php");
    exit;
     
}else {
   // echo"<center>Você esta logado<center> '$CNPJ''";
    echo"<center>Você esta logado<center>".$_SESSION['CNPJ'];
}

?>
    <?php
    include "config.php";
    
    $descricao=$_POST["descricao"];
    $codigo=$_POST["codigo"];
    $categoria=$_POST["categoria"];
    $valorminimo=$_POST["valorminimo"];
    //$cnpjvendedor=$_SESSION['mycnpj'];
    $cnpjvendedor=$_POST["cnpjvendedor"];
   // $cnpjvendedor=$_SESSION["CNPJ"];
    $medida=$_POST["medida"];
    $nome_temporario=$_FILES["arquivo"]["tmp_name"];
    $nome_real=$_FILES["arquivo"]["name"];
    
    if(copy($nome_temporario,"imagens/$nome_real")){
    echo "upload do arquivo: $nome_real efetuado com sucesso";
        $sql=sprintf("insert into tb_itens (cod_item,descricao,categoria,valor_referencia,cnpj_vendedor,unidadedemedida,imagem) values('%s','%s','%s','%s','%s','%s','%s')",$codigo,$descricao,$categoria,$valorminimo,$cnpjvendedor,$medida,$nome_temporario);
        // $sql=sprintf("insert into tb_itens (cod_item,descricao,categoria,valor_referencia,cnpj_vendedor,unidadedemedida,imagem) values('%s','%s','%s','%s','%s','%s','%s')",$codigo,$descricao,$categoria,$valorminimo,$cnpjvendedor,$medida,$nome_real);

        if(mysqli_query($conexao,$sql)){
         //   header("location:index.php");
          // echo "dados inseridos com sucesso";
            //$seu_link = "http://www.imasters.com.br";  //so um exemplo
 //echo "<a href=".$seu_link.">".$seu_link."</a>";
            
            $link ="(location:telafornecedor.php)";
            echo "<a href='telafornecedor.php'>voltar</a>";
        }else{
            
            echo "falha ao cadastrar produto".mysqli_error($conexao);
        }
        
        
        
    }else{
    echo "erro ao  fazer upload do arquivo $nome_real";
}
    
   
    
    
    ?> 
    </head>
</html>