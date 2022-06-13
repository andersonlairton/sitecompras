<?php

class Usuario
{
    public $id;
    public $cnpj;
    public $senha;
    public $name;
    public $retorno;

    public function login($dados = null)
    {
        $retorno = ['
        resposta_status' => [
            'status' => 1,
            'msg' => ''
        ]];

        $verifica = $this->verifica_table($dados);

        $this->retorno = $verifica;

        return $this->retorno;
    }

    public function verifica_table($dados = null)
    {
        include "../config.php";

        $retorno = ['
        resposta_status' => [
            'status' => 1,
            'msg' => '',
            'status_correct_pass' => ''
        ]];

        $passmd5 = md5($dados['password']);

        $sql_verifica_user = "SELECT 
            COUNT(tb_forncedor_npj.CNPJ) AS QTD_CNPJ,
            CASE when tb_forncedor_npj.SENHA = {$dados['cnpj']} then 'S'
                    when usuarios.SENHA = '{$passmd5}' then 'S'
            ELSE 'N'
            END AS SENHA_CORRECT
        FROM tb_forncedor_npj
        LEFT JOIN usuarios ON usuarios.ID = tb_forncedor_npj.USUARIOS_ID
            AND usuarios.`STATUS` = 'A'
        WHERE tb_forncedor_npj.CNPJ = {$dados['cnpj']}";

    // print_r($sql_verifica_user);
        $result = mysqli_query($conexao, $sql_verifica_user);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);

                if ($row['SENHA_CORRECT'] == 'S' && empty($row['USUARIOS_ID'])) {
                    $row['CEP_ID'] = 0;
                    $row['SENHA'] = md5($dados['password']);
                    $row['LAST_TABLE'] = "tb_forncedor_npj.CNPJ IN ({$dados['cnpj']})";
                    $grava_user = $this->salvar($row);
                    if ($grava_user['resposta_status']['status'] != 1) {
                        $retorno = $grava_user;
                    }
                } elseif ($row['SENHA_CORRECT'] == 'S' && !empty($row['USUARIOS_ID'])) {
                    $retorno['resposta_status']['status_correct_pass'] = 'N';
                }
            } else {
                $retorno['resposta_status']['status'] = 0;
                $retorno['resposta_status']['msg'] = 'Usuario não cadastrado.Cod:' . __LINE__;
            }
        } else {
            $retorno['resposta_status']['status'] = 0;
            $retorno['resposta_status']['msg'] = "Erro ao localizar usuario,erro:" . mysqli_error($conexao) . "\n Cod:" . __LINE__;
        }

        $this->retorno = $retorno;

        // print_r($retorno);
        return $retorno;
    }

    public function salvar($dados = null)
    {
        include "../config.php";

        $retorno = ['
        resposta_status' => [
            'status' => 1,
            'msg' => '',
            'status_correct_pass' => ''
        ]];


        $insert_user = "INSERT INTO usuarios (
            usuarios.NAME,
            usuarios.CEP_ID,
            usuarios.SENHA,
            usuarios.`STATUS`,
            usuarios.CRIACAO_DATA)
        VALUES (
            '{$dados['NOME']}',
            {$dados['CEP_ID']},
            '{$dados['SENHA']}',
            'A',
            NOW()
        )";

        $insert = mysqli_query($conexao, $insert_user);

        if ($insert) {
            $id = mysqli_insert_id($conexao);

            if (!empty($dados['LAST_TABLE'])) {
                $update_lastTable = "UPDATE tb_forncedor_npj SET tb_forncedor_npj.USUARIOS_ID = {$id}
                WHERE {$dados['LAST_TABLE']}";

                $result = mysqli_query($conexao, $update_lastTable);

                if (!$result) {
                    $retorno['resposta_status']['status'] = 0;
                    $retorno['resposta_status']['msg'] = "Erro ao atulizar usuario.Cod:" . __LINE__;
                }
            } else {

                $insert_tb_form = "INSERT INTO tb_forncedor_npj (
                    tb_forncedor_npj.CNPJ,
                    tb_forncedor_npj.NOME,
                    tb_forncedor_npj.NOME_EMPRESA,
                    tb_forncedor_npj.ENDERECO,
                    tb_forncedor_npj.EMAIL,
                    tb_forncedor_npj.TELEFONE,
                    tb_forncedor_npj.USUARIOS_ID
                ) VALUES (
                    {$dados['CNPJ']},
                    '{$dados['NOME']}',
                    '{$dados['NOME_EMPRESA']}',
                    '{$dados['ENDERECO']}',
                    '{$dados['EMAIL']}',
                    {$dados['TELEFONE']},
                    {$id}
                )";

                $insert = mysqli_query($conexao, $insert_tb_form);

                if (!$result) {
                    $retorno['resposta_status']['status'] = 0;
                    $retorno['resposta_status']['msg'] = "Erro ao inserir novo usuario.Cod:" . __LINE__;
                }
            }
        } else {
            $retorno['resposta_status']['status'] = 0;
            $retorno['resposta_status']['msg'] = "Erro ao inserir novo usuario.Cod:" . __LINE__;
        }

        $this->retorno = $retorno;
        
        return $retorno;
    }
}
