<?php
    class ProdutosController{
        function inserir(){
            $produto = new Produtos();
            $descricao=$_POST["descricao"];
            $codigo=$_POST["codigo"];
            $categoria=$_POST["categoria"];
            $valorminimo=$_POST["valorminimo"];
            $cnpjvendedor=$_SESSION['CNPJ'];
            $medida=$_POST["medida"];
            $nome_temporario=$_FILES["arquivo"]["tmp_name"];
            $nome_real=$_FILES["arquivo"]["name"];

            if(empty($descricao)||
                empty($codigo) ||
                empty($categoria) ||
                empty($valorminimo)||
                empty($cnpjvendedor)||
                empty($medida)){
                    throw new Exception("erro ao inserir arquivosdados nao podem ser vazio", 1);
            }else{
                $produto->salvar();
            }
        }
    }
?>