<?php
session_start();
if (!isset($_SESSION["CNPJ"]) || !isset($_SESSION["Senha"])) {
    header("location:login.php");
    exit;
} else {
    echo "<center>";
}

?>
<htm>
    <head>
        <link href="estilo.css" rel="stylesheet" type="text/css">
    </head>
    <title>Cadastro Produto</title>
    <body>
        <fieldset id="campo">
            <legend class="texto">Cadastrar novo Produto</legend>
            <form name="cadastroproduto" action="Controllers/ProdutosController.php" method="request" enctype="multipart/form-data">
                <label class="texto">Descrição</label>
                <input type="text" name="descricao"></input>
                <label class="texto">Codigo</label>
                <input type="text" name="codigo"></input>
                <label class="texto">categoria</label>
                <input type="text" name="categoria"></input>
                <label class="texto">valor minimo</label>
                <input type="text" name="valorminimo"></input>
                <label class="texto">cnpj vendedor</label>
                <input type="text" name="cnpjvendedor"></input>
                <label class="texto">medida</label>
                <input type="text" name="medida"></input>
                <label class="texto" for="arquivo">Imagem:</label>
                <input type="file" name="arquivo" id="arquivo"></input>
                <br>
                <input type="submit" name="action" value="cadastrar">
            </form>
        </fieldset>
        <a href="telafornecedor.php">voltar a Minha tela</a>
    </body>
</htm>