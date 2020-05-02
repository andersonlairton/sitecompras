<?php
    include "config.php";
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
            include "config.php";
            $sql=sprintf("insert into tb_itens (
                cod_item,
                descricao,
                categoria,
                valor_referencia,
                cnpj_vendedor,
                unidadedemedida,
                imagem) values('%s','%s','%s','%s','%s','%s','%s')",
                $codigo,
                $descricao,
                $categoria,
                $valorminimo,
                $cnpjvendedor,
                $medida,
                $nome_temporario);
            
            if(mysqli_query($conexao,$sql)){
               return true;
            }else{
                throw new Exception( "falha ao cadastrar produto".mysqli_error($conexao), 1);
            }    
        }
        public function atualizar(){

        }
        public function deletar(){

        }
    }
