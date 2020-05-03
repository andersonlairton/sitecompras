<?php
    require_once "../Models/ProdutosModel.php";
    session_start();
    if($_REQUEST['action']=='cadastrar'){
        $p= new ProdutosController();
        $p->inserir();
    }
    class ProdutosController{
        
        public function inserir(){

            $descricao=$_REQUEST["descricao"];
            $codigo=intval($_REQUEST["codigo"]);
            $categoria=$_REQUEST["categoria"];
            $valorminimo=$_REQUEST["valorminimo"];
            $cnpjvendedor=$_SESSION['CNPJ'];
            $medida=$_REQUEST["medida"];
            $nome_temporario=$_FILES["arquivo"]["tmp_name"];
            $nome_real=$_FILES["arquivo"]["name"];
            
            if(empty($descricao)||
                empty($codigo) ||
                empty($categoria) ||
                empty($valorminimo)||
                empty($cnpjvendedor)||
                empty($medida)){
                    throw new Exception("erro ao inserir arquivos,dados nao podem ser vazio", 1);
            }else{

                $produto = new Produtos($codigo);

                $produto->codigo=$codigo;
                $produto->categoria=$categoria;
                $produto->descricao=$descricao;
                $produto->medida=$medida;
                $produto->nome_temporario=$nome_temporario;
                $produto->nome_real=$nome_real;
                $produto->valorminimo=$valorminimo;

                if($produto->salvar()==true){
                    echo "<script>
                        alert('Salvo com sucesso');
                        window.location='../telafornecedor.php';
                        </script>";
                }
            }
        }
    }
?>