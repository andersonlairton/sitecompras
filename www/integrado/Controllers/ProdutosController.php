<?php
    require_once "../Models/ProdutosModel.php";
    session_start();

if (isset($_REQUEST['action'])) {
    $p = new ProdutosController();
    
    if ($_REQUEST['action'] == 'cadastrar') {
        $p->inserir();
    }elseif ($_REQUEST['action']=='list') {
        $p->list();
    }elseif ($_REQUEST['action']=='atualizar') {
        $p->atualizar();
    }
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
        public function atualizar(){
            var_dump($_REQUEST);
        }
        public function deletar(){

        }

        public function list(){
            //print_r('chegou na função');
           // die;
            $retorno = [
                1=>"metodo iniciado com sucesso",
                2=>'mais uma posição'
            ];
            if(isset($_REQUEST['id'])&&!empty($_REQUEST['id']))
            {
                $id = $_REQUEST['id'];
                $prod = new Produtos();
                $prod->listarProd($id);
            }else {
                $retorno.=[3=>'id invalido'];
            }
           // print_r($retorno);
           print_r(json_encode($retorno));
            //return json_encode($retorno);
            //return $retorno;//json_encode($retorno);
        }
    }
?>