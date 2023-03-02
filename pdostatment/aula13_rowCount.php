<?php

include_once("./config.php");


$email = "pedro1@f.com";
$senha = "1234";


try{
    $sql = "SELECT * FROM T_usuario";
    $prepare = $pdo->prepare($sql);
    $count = $prepare->execute();
    $qtd = $prepare->rowCount();

    echo "qtd: $qtd";

} catch (PDOException $err){
    echo $err->getMessage();
}