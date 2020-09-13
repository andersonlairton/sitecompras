<?php

//session_start();

class Produtos
{
    public $id;
    public $descricao;
    public $codigo;
    public $categoria;
    public $valorminimo;
    public $cnpjvendedor;
    public $medida;
    public $nome_temporario;
    public $nome_real;

    public function salvar()
    {
        include "../config.php";
        $cnpjvendedor = $_SESSION['CNPJ'];

        $sql = sprintf(
            "insert into tb_itens (
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
            $this->nome_temporario
        );

        if (mysqli_query($conexao, $sql)) {
            return true;
        } else {
            throw new Exception("falha ao cadastrar produto:" . mysqli_error($conexao), 1);
        }
    }
    public function atualizar()
    {
        include "../config.php";

        $sql = sprintf(
            "UPDATE tb_itens 
            SET 
            cod_item='$this->codigo',
            descricao='$this->descricao',
            categoria='$this->categoria',
            valor_referencia='$this->valorminimo',
            unidadedemedida='$this->medida'
            WHERE id='$this->id'"
        );

        var_dump($sql);

        if (mysqli_query($conexao,$sql)) {
            return true;
        }else{
            throw new Exception("Falha ao atualizar o produto". mysqli_error($conexao), 1);
            
        }
    }
    public function deletar()
    {
    }
    public function listar($con)
    {
        $sql = sprintf("select * from tb_itens where cnpj_vendedor=%s", $this->cnpjvendedor);
        $result = mysqli_query($con, $sql);
        $dado = [];
        $i=0;
        while ($linha = mysqli_fetch_array($result)) {
            $dado[$i]['id'] = $linha['id'];
            $dado[$i]['cod_item'] = $linha['cod_item'];
            $dado[$i]['descricao'] = $linha['descricao'];
            $dado[$i]['categoria'] = $linha['categoria'];
            $dado[$i]['valor_referencia'] = $linha['valor_referencia'];
            $dado[$i]['unidadedemedida'] = $linha['unidadedemedida'];
            $i++;
        }
        return $dado;
        mysqli_free_result($result);
        mysqli_close($con);
    }
    public function listarProd($id)
    {
        include "../config.php";
        $sql = sprintf("select * from tb_itens where id=%s",$id);
        $result = mysqli_query($conexao,$sql);
        $_SESSION['editProd'] = [];
        if($result){
            while ($linha = mysqli_fetch_array($result)) {
                array_push($_SESSION['editProd'],$linha);
            }
        }
    }
}
