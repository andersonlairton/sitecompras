<?php
session_start();
include "config.php";
include "Models/ProdutosModel.php";

if (!isset($_SESSION["CNPJ"]) || !isset($_SESSION["Senha"])) {
    header("location:login.php");
    exit;
} else {

    echo "<center>";
}
$produtos = new Produtos();
$produtos->cnpjvendedor = $_SESSION["CNPJ"];
$prod = $produtos->listar($conexao);
?>
<html>

<head>
    <script type="text/javascript" src="Views/functions.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<style></style>
<link href="estilo.css" rel="stylesheet" type="text/css">
<title>Meus produtos</title>

<body>

    <br>
    <br>
    <fieldset>
        <table id="campo">
            <tr>
                <td class="texto">cod_item</td>
                <td class="texto">descricao</td>
                <td class="texto">categoria</td>
                <td class="texto">valor_referencia</td>
                <td class="texto">unidadedemedida</td>
            </tr>
            <?php foreach ($prod as $key => $linha) : ?>
                <!-- echo $value['id']; -->
                <tr>
                <form action="cad_produto.php" method="POST">
                    <td class="texto" name="cod_item" value="teste"><?=$linha['cod_item'] ?></td>
                    <td class="texto" name="descricao"><?=$linha['descricao'] ?></td>
                    <td class="texto" name="categoria"><?=$linha['categoria'] ?></td>
                    <td class="texto" name="valor_referencia"><?=$linha['valor_referencia'] ?></td>
                    <td class="texto" name="unidadedemedida"><?=$linha['unidadedemedida'] ?></td>
                    <td class="texto"><a href="#" onclick="editProd('<?=$linha['id']?>')">Editar</a></td>
                    <!--<td class="texto">
                            <input type="hidden" name="id" value=<?//=$linha['id']?> />
                            <button id="tim">Editar</button>
                    </td>-->
                </form>
                </tr>
            <?php endforeach; ?>
        </table>
    </fieldset>
    <a class="texto" href="telafornecedor.php">Voltar a tela forncedor</a>
    <br>
    <a class="texto" href="logout.php">Sair</a>
</body>

</html>