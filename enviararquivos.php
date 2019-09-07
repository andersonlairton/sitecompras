<?php
$nome_temporario=$_FILES["arquivo"]["tmp_name"];
$nome_real=$_FILES["arquivo"]["name"];

if(copy($nome_temporario,"imagens/$nome_real")){
    echo "upload do arquivo: $nome_real efetuado com sucesso";
}
else{
    echo "erro ao  fazer uload do arquivo $nome_real";
    
} 








?>