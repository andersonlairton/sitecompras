<?php
 
    // $host = "db4free.net";//"bd";//"127.0.0.1";//futuramente alterar para o 000webhost
    // $user = "site_compras";
    // $pass = "!tB4=R&DdA|]36%*";
    // $banco="sitecompras";

    $host = "bd";//"127.0.0.1";//futuramente alterar para o 000webhost
    $user = "root";
    $pass = "password";
    $banco="sitecompras";

    $conexao = mysqli_connect($host, $user, $pass) or die(mysqli_error($conexao));
    mysqli_select_db($conexao,$banco) or die(mysqli_error($conexao));
?>