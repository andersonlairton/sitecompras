<?php
    
    session_start();
    
    class Produtos
    {   
        public $descricao;
        public $codigo;
        public $categoria;
        public $valorminimo;
        public $cnpjvendedor;
        public $medida;
        public $nome_temporario;
        public $nome_real;
        
        public function salvar(){
            include "../config.php";
            $cnpjvendedor=$_SESSION['CNPJ'];

            $sql=sprintf("insert into tb_itens (
                cod_item,
                descricao,
                categoria,
                valor_referencia,
                cnpj_vendedor,
                unidadedemedida,
                imagem) values('%s','%s','%s','%s','%s','%s','%s')",
                $this->codigo,
                $this->descricao,
                $this->categoria,
                $this->valorminimo,
                $cnpjvendedor,
                $this->medida,
                $this->nome_temporario);
            
            if(mysqli_query($conexao,$sql)){
               return true;
            }else{
                throw new Exception( "falha ao cadastrar produto:".mysqli_error($conexao), 1);
            }    
        }
        public function atualizar(){

        }
        public function deletar(){

        }
    }
