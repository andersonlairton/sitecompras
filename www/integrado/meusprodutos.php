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
$produtos->cnpjvendedor=$_SESSION["CNPJ"];
$prod = $produtos->listar($conexao);
?>
<html>

<head></head>
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
            <?php foreach ($prod as $key => $linha) :?>
               <!-- echo $value['id'];-->
                <tr>
                <td class="texto"><?php echo $linha['cod_item'] ?></td>
                <td class="texto"><?php echo $linha['descricao'] ?></td>
                <td class="texto"><?php echo $linha['categoria'] ?></td>
                <td class="texto"><?php echo $linha['valor_referencia'] ?></td>
                <td class="texto"><?php echo $linha['unidadedemedida'] ?></td>

            </tr>
            <?php endforeach;?>
        </table>
    </fieldset>
    <a class="texto" href="telafornecedor.php">Voltar a tela forncedor</a>
    <br>
    <a class="texto" href="logout.php">Sair</a>
</body>

</html>