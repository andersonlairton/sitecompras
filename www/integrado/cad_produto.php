<?php
session_start();
if (!isset($_SESSION["CNPJ"]) || !isset($_SESSION["Senha"])) {
    header("location:login.php");
    exit;
} else {
    echo "<center>";
}

if(!empty($_POST['id'])){
    echo "teste";
}

if (isset($_SESSION['editProd'])&&!empty($_SESSION['editProd'])) {
    $id = $_SESSION['editProd'][0]['id'];
    $descricao = $_SESSION['editProd'][0]['descricao'];
    $codigo = $_SESSION['editProd'][0]['cod_item'];
    $categoria = $_SESSION['editProd'][0]['categoria'];
    $valor_referencia = $_SESSION['editProd'][0]['valor_referencia'];
    $unidadedemedida = $_SESSION['editProd'][0]['unidadedemedida'];
    unset($_SESSION['editProd']);
    $name = 'atualizar';

}else {
    $name='cadastrar';
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
                <input type="text" name="descricao" <?=(isset($descricao)?"value=".$descricao:"")?>></input>
                <label class="texto">Codigo</label>
                <input type="text" name="codigo" <?=(isset($codigo)?"value=".$codigo:"")?>></input>
                <label class="texto">categoria</label>
                <input type="text" name="categoria" <?=(isset($categoria)?"value=".$categoria:"")?>></input>
                <label class="texto">valor minimo</label>
                <input type="text" name="valorminimo" <?=(isset($valor_referencia)?"value=".$valor_referencia:"")?>></input>
                <label class="texto">cnpj vendedor</label>
                <input type="text" name="cnpjvendedor" value="<?=$_SESSION['CNPJ']?>"></input>
                <label class="texto">medida</label>
                <input type="text" name="medida" <?=(isset($unidadedemedida)?"value=".$unidadedemedida:"")?>></input>
                <label class="texto" for="arquivo">Imagem:</label>
                <input type="file" name="arquivo" id="arquivo"></input>
                <?php if (isset($id)) :?>
                    <input type="text" name="id" value="<?=$id?>" hidden="true">
                <?php endif?>
                <br>
                <input type="submit" name="action" value=<?=$name?>>
            </form>
        </fieldset>
        <a href="telafornecedor.php">voltar a Minha tela</a>
    </body>
</htm>