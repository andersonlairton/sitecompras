<?php
    include "config.php";
    session_start();

    $descricao=$_POST["descricao"];
    $codigo=$_POST["codigo"];
    $categoria=$_POST["categoria"];
    $valorminimo=$_POST["valorminimo"];
    $cnpjvendedor=$_SESSION['CNPJ'];
    $medida=$_POST["medida"];
    $nome_temporario=$_FILES["arquivo"]["tmp_name"];
    $nome_real=$_FILES["arquivo"]["name"];
  
    $sql=sprintf("insert into tb_itens (cod_item,descricao,categoria,valor_referencia,cnpj_vendedor,unidadedemedida,imagem) values('%s','%s','%s','%s','%s','%s','%s')",$codigo,$descricao,$categoria,$valorminimo,$cnpjvendedor,$medida,$nome_temporario);
        
    if(mysqli_query($conexao,$sql)){
        echo "<a href='telafornecedor.php'>voltar</a>";
        echo "<script>alert('salvo com sucesso')</script>";
    }else{
        echo "falha ao cadastrar produto".mysqli_error($conexao);
    }
?> 