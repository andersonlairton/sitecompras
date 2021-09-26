<?php
session_start();
include "../../config.php";
include "../../Models/UsuarioModel.php";
include "../layout/header.php";

if (!isset($_SESSION["CNPJ"]) || !isset($_SESSION["Senha"])) {
    header("location:login.php");
    exit;
} else {

    echo "<center>";
}

// $produtos = new Produtos();
// $produtos->cnpjvendedor = $_SESSION["CNPJ"];
// $prod = $produtos->listar($conexao);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
    <div class="container-fluid">
        <h1 class="texto">Novo usuario</h1>

        <fieldset class="corpo">
            <div class="row">
                <div class="col-sm-6">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" aria-describedby="name" placeholder="Seu Nome" maxlength="255">
                </div>

                <div class="col-sm-6">
                    <label for="nome_empresa">Nome Empresa</label>
                    <input type="text" class="form-control" id="nome_empresa" aria-describedby="nome_empresa" placeholder="Nome da sua empresa" maxlength="255">
                </div>

                <div class="col-sm-3">
                    <label for="email">Endereço de email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Seu email">
                    <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                </div>

                <div class="col-sm-3">
                    <label class="texto" for="cnpj">CNPJ</label>
                    <input type="text" class="form-control" id="cnpj" aria-describedby="cnpj" placeholder="Cnpj da sua empresa" maxlength="14">
                </div>



            </div>
        </fieldset>
    </div>

</body>

</html>