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
    <title>Document</title>
</head>
<body>
    tela usuario
</body>
</html>